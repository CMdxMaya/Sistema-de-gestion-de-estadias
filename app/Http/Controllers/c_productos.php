<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\productos;
use App\tipodeproductos;
use Session;
use DB;

class c_productos extends Controller
{
	public function mensaje(){
		echo "hola mundo";
	}

	







	public function altaproductos(){

		if(Session::get('sesionidu')!=""){

		$clavequesigue = productos::withTrashed()->orderBy('id_producto','desc')
		->take(1)
		->get();
		$id_usr = $clavequesigue[0]->id_producto+1;


		$tipo_de_productos = tipodeproductos::where('activo','si')
		->orderBy('nombre','asc')
		->get();

		return view ('sistema.altaproductos')->with('tipo_de_productos',$tipo_de_productos)->with('id_usr',$id_usr);

	//$carreras = carreras::all();
	//return view ('sistema.altamaestro')->with('carreras',$carreras)->with('idms',$idms);
	//return $carreras;

}

	else
	{
		Session::flash('error','Es necesario logearse para continuar');
	}
	return redirect()->route('login');


	}
	public function guardaproductos(Request $request){
		$id_producto = $request->id_producto;
		$nombrepro = $request->nombrepro;
		$descripcion = $request->descripcion;
		$costo = $request->costo;
		$id_tipodeproducto = $request->id_tipodeproducto;






	if ($request->file('img')=="")
	{
		$img2 = "noimagen.jpg";
	}
	else
	{
		  
		   $file = $request->file('img');
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $img;
	 \Storage::disk('local')->put($img, \File::get($file));
	}
		


		$maest = new productos;
		$maest->id_producto = $request->id_producto;
		$maest->nombrepro = $request->nombrepro;	
		$maest->descripcion = $request->descripcion;
		$maest->costo = $request->costo;
		$maest->id_tipodeproducto = $request->id_tipodeproducto;
		$maest->archivo = $img2;

		$maest->save();
		$proceso = "ALTA EVIDENCIA";
		$mensaje = "Evidencia guardado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
		public function reporteproductos(){


			if(Session::get('sesionidu')!=""){


			 //$resultado=\DB::select("SELECT m.id_producto,m.nombre,m.descripcion,m.costo,m.archivo,c.nombre as tipodeproductos

            
        //FROM productos AS m
        //INNER JOIN tipodeproductos AS c ON c.id_tipodeproducto =  m.id_tipodeproducto");
        //return $resultado;                      
        //return view ('sistema.reporteproductos')
        //->with('productos',$resultado);

		$productos=DB::table('productos')
		->join('tipodeproductos','tipodeproductos.id_tipodeproducto','=','productos.id_tipodeproducto','inner')
		->select('productos.*','tipodeproductos.nombre')
		->orderBy('id_producto','asc')
		->get();
		
			
	return view('sistema.reporteproductos',compact('productos')); 
}

	else
	{
		Session::flash('error','Es necesario logearse para continuar');
	}
	return redirect()->route('login');
        
    }
	
		public function eliminaproductos($id_producto){
			 productos::withTrashed()->where('id_producto',$id_producto)->forceDelete();

			$proceso = "Eliminar Evidencia";
			$mensaje = "La Evidencia ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}



public function eliminaproductos1($id_producto){
		//echo "Elimina $num_folio";
		productos::find($id_producto)->delete();
		$proceso = "Elimina Evidencia";
		$mensaje = "La Evidencia se elimino Correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	public function restauraproductos($id_producto){
		productos::withTrashed()->where('id_producto',$id_producto)->restore();
		$proceso = "Restaurar Producto";
		$mensaje = "El Producto se restauro correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

		public function modificaproductos($id_producto){
			$infom= productos::where('id_producto','=',$id_producto)->get();
			$id_tipodeproducto = $infom [0]->id_tipodeproducto;

			$tipodeproductos = tipodeproductos::where('id_tipodeproducto','=',$id_tipodeproducto)->get();
			$todas = tipodeproductos::where('id_tipodeproducto','!=',$id_tipodeproducto)->get();

			return view ('sistema.modificaproductos')
			
			->with('infom',$infom[0])
			->with('id_tipodeproducto',$id_tipodeproducto)
			->with('tipodeproductos',$tipodeproductos[0]->nombre)
			->with('todas',$todas);
		}

public function guardaedicionproducto(Request $request){
		//echo $request->nombre;
	$id_producto = $request->id_producto;
		$nombrepro = $request->nombrepro;
		$descripcion = $request->descripcion;
		$costo = $request->costo;
		$id_tipodeproducto = $request->id_tipodeproducto;

		if ($request->file('img')<>"")
	{
	$file = $request->file('img');
	 $ldate = date('Ymd_His_');
	 $img = $file->getClientOriginalName();
	 $img2 = $ldate.$img;
	 \Storage::disk('local')->put($img2, \File::get($file));
	}	
		
			$maest = productos::find($id_producto);
			$maest->nombrepro = $request->nombrepro;
			$maest->descripcion = $request->descripcion;
			$maest->costo = $request->costo;
			if ($request->file('img')<>"")
					{
						$maest->archivo = $img2;
					}
			$maest->id_tipodeproducto = $request->id_tipodeproducto;
			


			$maest->save();
			 $proceso = "MODIFICAGION DE EVIDENCIA";
        $mensaje = "EVIDENCIA actualizada correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
}



}
