<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tipodeproductos;
use Session;

class controlador_tipodeproductos extends Controller
{
     public function altatipodeproductos(){


if(Session::get('sesionidu')!=""){


    	$clavequesigue = tipodeproductos::withTrashed()->orderBy('id_tipodeproducto','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_tipodeproducto+1;

    	return view ('sistema.alta_tipodeproductos')
		     		->with('idTipAbs',$idTipAbs);

}

	else
	{
		Session::flash('error','Es necesario logearse para continuar');
	}
	return redirect()->route('login');

    }
    public function guardatipodeproducto(Request $request)
	{   
	$id_tipodeproducto = $request->id_tipodeproducto;
	$nombre = $request->nombre;

$this->validate($request,[
			'nombre'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',

        

    ]);

	//Se mandan los datos a la base de datos
	
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new tipodeproductos;
			$TipAb->id_tipodeproducto = $request->id_tipodeproducto;
			$TipAb->nombre = $request->nombre;
						$TipAb->activo = $request->activo;

			

			$TipAb->save();
			$proceso = "Registro tipo de productos";
			$mensaje = "Tipo de producto registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reportetipodeproductos(){



		if(Session::get('sesionidu')!=""){
		$TipAb = tipodeproductos::withTrashed()->orderBy('id_tipodeproducto','asc')->get();

		return view('sistema.reporte_tipodeproductos')
		->with('TipAb',$TipAb);

}

	else
	{
		Session::flash('error','Es necesario logearse para continuar');
	}
	return redirect()->route('login');



	}







	public function modificatipodeproducto($id_tipodeproducto){
		//echo "Tipo Abogado a modificar $id_cliente";
		$infom = tipodeproductos::where('id_tipodeproducto','=',$id_tipodeproducto)->get();
		 return view('sistema.modificatipodeproducto')
		 ->with('infom',$infom[0]);
	}
		public function guardaediciontipodeproducto(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
				$activo = $request->activo;

		$id_tipodeproducto = $request->id_tipodeproducto;





$this->validate($request,[
			'nombre'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',

        

    ]);
			$TA = tipodeproductos::find($id_tipodeproducto);
			$TA->id_tipodeproducto = $request->id_tipodeproducto;
			$TA->nombre = $request->nombre;
			
			$TA->save();
			$proceso = "TIPO DE PRODUCTO ACTUALIZADO";
			$mensaje = "Tipo de producto acutailizado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
}


public function eliminatipodeproducto($id_tipodeproducto){
	   tipodeproductos::withTrashed()->where('id_tipodeproducto',$id_tipodeproducto)->forceDelete();
		$proceso = "Eliminar Tipo de Producto";
		$mensaje = "El Tipo de Producto ha sido borrado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}

	public function eliminatipodeproducto1($id_tipodeproducto){
		//echo "Elimina $num_folio";
		tipodeproductos::find($id_tipodeproducto)->delete();
		$proceso = "Elimina Tipo de Producto";
		$mensaje = "El Tipo de Producto se elimino Correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	public function restauratipodeproducto($id_tipodeproducto){
		tipodeproductos::withTrashed()->where('id_tipodeproducto',$id_tipodeproducto)->restore();
		$proceso = "Restaurar Tipo de Producto";
		$mensaje = "El Tipo de Producto se restauro correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}


}
