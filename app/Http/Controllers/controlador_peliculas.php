<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\peliculas;

class controlador_peliculas extends Controller
{
	public function principal()
	 {
		 return view('sistema.principal');
		
	 }

     public function altapelicula(){
    	$clavequesigue = peliculas::orderBy('id_pelicula','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_pelicula+1;

    	return view ('sistema.alta_pelicula')
		     		->with('idTipAbs',$idTipAbs);
    }


    public function guardapelicula(Request $request)
	{   
	$id_pelicula = $request->id_pelicula;
	$nombre = $request->nombre;
	$genero = $request->genero;
	$artista = $request->artista;
	

	

		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new peliculas;
			$TipAb->id_pelicula = $request->id_pelicula;
			$TipAb->nombre = $request->nombre;
			$TipAb->genero = $request->genero;
			$TipAb->artista = $request->artista;
			

			$TipAb->save();
			 $proceso = "ALTA DE PELICULA";
        $mensaje = " Cliente guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);

			//$mensaje = "Cliente registrado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
	}
	
}
