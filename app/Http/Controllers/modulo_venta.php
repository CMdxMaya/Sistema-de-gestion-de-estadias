<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use App\mesas;
use App\clientes;
use App\tipodeproductos;
use App\productos;
use App\ventas;
use App\pagos;

use App\ventadetalles;
use Session;

class modulo_venta extends Controller
{
   

    //AQUI EMPIEZA
    function venta()
    {


                if(Session::get('sesionidu')!=""){
         $clavequesigue = ventas::orderBy('idv','desc')
								->take(1)->get();
         $cuantos = count($clavequesigue);
         if($cuantos==0)
         {
             $idv= 1;
         }
         else
         {
          $idv = $clavequesigue[0]->idv+1;   
         }
        $empleados = empleados::all();
        $mesas = mesas::all();
         $tipodeproductos = tipodeproductos::all();
                  $clientes = clientes::all();

     return view('carrito')
           ->with('mesas',$mesas)
           ->with('clientes',$clientes)

           ->with('empleados',$empleados)
      ->with('tipodeproductos',$tipodeproductos)
      ->with('idv',$idv);

    }

    else
    {
        Session::flash('error','Deve logearse antes de continuar');
    }
    return redirect()->route('login');
    }
	
	
    function comboca(Request $request)
    {
         $id_tipodeproducto = $request->get('id_tipodeproducto');
         $productos = productos::where('id_tipodeproducto','=',$id_tipodeproducto)->get();
        
         return view ('combop')->with('productos',$productos);
    }

 
	

	
      function detallep(Request $request)
    {
        $id_producto = $request->get('id_producto');
        $productos = productos::where('id_producto','=',$id_producto)->get();
        return view ('detallep')->with('productos',$productos[0]);
        //echo "$idp";
    }
	
    function carrito(Request $request)
    {
	    $exist = $request->existencia;

        $ventas = ventas::where('idv',$request->idv)->get();

       
		$cuantos = count($ventas);



	
        if($cuantos==0)
        {   
                         
            Session::put('sidv',$request->idv);
            Session::put('sid_cliente',$request->id_cliente);
            Session::put('sid_mesero',$request->id_mesero);
            Session::put('sid_mesa',$request->id_mesa);
            Session::put('stipodeorden',$request->tipodeorden);
            Session::put('sformapago',$request->formapago);
            Session::put('sid_producto',$request->id_producto);
            Session::put('scosto',$request->subt);
            Session::put('sfecha',$request->fecha);





          
        

            $ventas = new ventas;
			$ventas->idv = $request->idv;
			$ventas->id_cliente = $request->id_cliente;
            $ventas->id_mesero = $request->id_mesero;
            $ventas->id_mesa = $request->id_mesa;


            $ventas->tipodeorden = $request->tipodeorden;
            $ventas->formapago = $request->formapago;
            $ventas->id_producto = $request->id_producto;
            
            $ventas->costo = $request->subt;



			$ventas->fecha =$request->fecha;
			$ventas->save();

            
            $ventadetalles = new ventadetalles;
            $ventadetalles->idv = $request->idv;
            $ventadetalles->id_producto = $request->id_producto;
            $ventadetalles->cantidad = $request->cantidad;
            $ventadetalles->costo = $request->subt / $request->cantidad;
            $ventadetalles->observaciones = $request->observaciones;
             $ventadetalles->id_mesero = $request->id_mesero;

             $ventadetalles->id_cliente = $request->id_cliente;
                        $ventadetalles->fecha =$request->fecha;



            $ventadetalles->save();
           
        }
        else
        {

            $ventadetalles = new ventadetalles;
            $ventadetalles->idv = $request->idv;
            $ventadetalles->id_producto = $request->id_producto;
            $ventadetalles->cantidad = $request->cantidad;
            $ventadetalles->observaciones = $request->observaciones;

            $ventadetalles->costo = $request->subt / $request->cantidad ;
            $ventadetalles->save();
         
        }
	$totp = $exist - $request->cantidad;
	
	$updated = \DB::update('update productos set cantidad=? 
	                       where id_producto=?',[$totp ,$request->id_producto]);

// BORRADA PÀRA EL ERROR(vd.cantidad * vd.costo)AS total
	
        $resultado=\DB::select("SELECT vd.idvd,vd.id_producto,vd.cantidad,vd.costo,vd.cantidad * vd.costo AS subt,p.nombrepro
        FROM ventadetalles AS vd
        INNER JOIN productos AS p ON p.id_producto = vd.id_producto
        WHERE vd.idv= ?",[$request->idv]);
        
        $resultado2=\DB::select("SELECT SUM(cantidad*costo)AS total,
        ROUND(SUM(cantidad*costo)/1.16,2) AS subtotal,
SUM(cantidad*costo)-ROUND(SUM(cantidad*costo)/1.16,2) AS iva
FROM ventadetalles WHERE idv = ?",[$request->idv]);
      //   echo "borraventas con clave $request->idvd con venta $idv ";

       return view ('listap')
       ->with('resultado',$resultado)
       ->with('resultado2',$resultado2[0]);
        
    }
    
    
    public function borraventas(Request $request)
    {
		$canti = $request->canti;
        $ventas = ventadetalles::where('idvd',$request->idvd)->get();

     $idv = $ventas[0]->idv;
	 $id_producto = $ventas[0]->id_producto;

	  $productos = productos::where('id_producto',$id_producto)->get();
	  $exist = $productos[0]->cantidad;

	  
	 $updated = \DB::update('update productos set cantidad=cantidad +? where id_producto=?',[$canti ,$id_producto]);


	 
         ventadetalles::find($request->idvd)->delete();
         ////////////////////////////
     echo "borraventas con clave $request->idvd con venta $idv ";
    $resultado=\DB::select("SELECT vd.idvd,vd.id_producto,vd.cantidad,vd.costo,vd.cantidad * vd.costo AS subt,p.nombrepro
        FROM ventadetalles AS vd
        INNER JOIN productos AS p ON p.id_producto = vd.id_producto
        WHERE vd.idv= ?",[$idv]);
        
        $resultado2=\DB::select("SELECT SUM(cantidad*costo)AS total,ROUND(SUM(cantidad*costo)/1.16,2) AS subtotal,
SUM(cantidad*costo)-ROUND(SUM(cantidad*costo)/1.16,2) AS iva
FROM ventadetalles WHERE idv = ?",[$idv]);
    
       return view ('listap')
       ->with('resultado',$resultado)
       ->with('resultado2',$resultado2[0]);
    }
     public function pago_realizado()
     {

         $ventas = new pagos;
            $ventas->idv = Session::get("sidv");
            $ventas->id_cliente = Session::get("sid_cliente");
            $ventas->id_mesero = Session::get("sid_mesero");
            $ventas->id_mesa = Session::get("sid_mesa");


            $ventas->tipodeorden = Session::get("stipodeorden");
            $ventas->formapago = Session::get("sformapago");
            $ventas->id_producto = Session::get("sid_producto");
            
            $ventas->costo = Session::get("scosto");;



            $ventas->fecha = Session::get("sfecha");
            $ventas->save();  

        Session::forget('sidv');
       Session::forget('sid_cliente');
       Session::forget('sid_mesero');
        Session::forget('sid_mesa');
       Session::forget('stipodeorden');
        Session::forget('sformapago');
        Session::forget('sid_mesero');
        Session::forget('scosto');
        Session::forget('sfecha');


       Session::flush();

 
         return view('sistema.pago_realizado');



        
     }
}


























