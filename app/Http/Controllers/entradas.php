<?php

namespace App\Http\Controllers;

use App\ventas;
use App\pagos;
use App\ventadetalles;
use DB;


use Illuminate\Http\Request;

class entradas extends Controller
{
   


    public function reporteentrada(){

        $entrada = pagos::select('pagos.*')
            ->distinct()

    ->select('pagos.*')
    ->orderBy('id_pago','asc')
    ->get();




        return view('reporteentrada',compact('entrada'));






    }
    public function buscarreporte($idv){

       $ventadetalles = ventadetalles::select('ventadetalles')
            ->distinct()
            
            ->join('productos','ventadetalles.id_producto','=','productos.id_producto')
      



    ->select('ventadetalles.*','productos.nombrepro')


    ->orderBy('idv','asc')

            ->where('ventadetalles.idv','=',$idv)
            ->get();


        $costo = ventadetalles::where('idv', '=',$idv)->sum('costo');
        $cc = ventadetalles::select('costo','cantidad')->where('idv', '=', $idv)->get();
        $resultado2=\DB::select("SELECT SUM(cantidad*costo)AS totalr from ventadetalles where idv=$idv");


    



        return view('reportetabla',compact('ventadetalles','costo','cc','resultado2'));

    }















    public function criterioreporte(Request $request){
        $fecha = $request->fecha;
        if($fecha == null){

         $entrada = pagos::select('pagos,*')
            ->distinct()
                ->where('pagos.fecha','=',$fecha)

    ->select('pagos.*')
    ->orderBy('idv','asc')
    ->get();


            return view('busquedareporte',compact('pagos'));
        }


        else{




   $entrada = pagos::select('pagos,*')
            ->distinct()
                ->where('pagos.fecha','=',$fecha)

    ->select('pagos.*')
    ->orderBy('idv','asc')
    ->get();


            return view('busquedareporte',compact('entrada'));

        }
    }
}
