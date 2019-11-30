<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use App\estados;
use DB;
use Session;

class controlador_empleados extends Controller
{
public function principal()
	 {
		 return view('sistema.principal');
		
	 }

	public function altaempleado(){

		if(Session::get('sesionidu')!=""){
		$estados=estados::all();


		$clavequesigue = empleados::withTrashed()->orderBy('id_empleado','desc')
		->take(1)
		->get();
		$idTipAbs = $clavequesigue[0]->id_empleado+1;

		return view ('sistema.alta_empleados')
							->with('estados',$estados)

		->with('idTipAbs',$idTipAbs);

		}

	else
	{
		Session::flash('error','Deve logearse antes de continuar');
	}
	return redirect()->route('login');

	}
	public function guardaempleado(Request $request)
	{   
		$id_empleado = $request->id_empleado;
		$nombree = $request->nombree;
		$apellido1 = $request->apellido1;
		$apellido2 = $request->apellido2;
		$puesto = $request->puesto;
		$telefono = $request->telefono;
		$email = $request->email;
		$rfc = $request->rfc;
		$calle = $request->calle;
		$numero = $request->numero;
		$colonia = $request->colonia;
		$cp = $request->cp;
			$id_estado = $request->id_estado;


		$this->validate($request,[
			'nombree'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'apellido1' => 'required|alpha|max:255',
			'apellido2' => 'required|alpha|max:255',
			'puesto' => 'required|alpha|max:255',
			'telefono'=>'required|regex:/^[0-9]{10}$/',
			'email' => 'required|email|max:255',
			'rfc'=>'required|regex:/^[0-9,A-Z]{13}$/',
			'calle' => 'required|max:255',
			'numero' => 'required|numeric|max:2000',
			'colonia'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'cp'=>'required|regex:/^[0-9]{5}$/',

		]);
	//Se mandan los datos a la base de datos
		$this->validate($request,[
		]);
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
		$TipAb = new empleados;
		$TipAb->id_empleado = $request->id_empleado;
		$TipAb->nombree = $request->nombree;
		$TipAb->apellido1 = $request->apellido1;
		$TipAb->apellido2 = $request->apellido2;
		$TipAb->puesto = $request->puesto;
		$TipAb->telefono = $request->telefono;
		$TipAb->email = $request->email;
		$TipAb->rfc = $request->rfc;
		$TipAb->calle = $request->calle;
		$TipAb->numero = $request->numero;
		$TipAb->colonia = $request->colonia;
		$TipAb->cp = $request->cp;
		$TipAb->id_estado = $request->id_estado;


		$TipAb->save();
		$proceso = "MAESTRO REGISTRADO";
			$mensaje = "Maestro registrado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
	public function reporteempleado(){


		if(Session::get('sesionidu')!=""){

	

			$cli=DB::table('empleados')		

		->join('estados','estados.id_estado','=','empleados.id_estado','inner')
		->select('empleados.*','estados.estado')
		->orderBy('id_empleado','asc')
		->get();


		return view('sistema.reporte_empleados',compact('cli')); 

		}

	else
	{
		Session::flash('error','Deve logearse antes de continuar');
	}
	return redirect()->route('login');
	}

	public function eliminaempleado($id_empleado){
   empleados::withTrashed()->where('id_empleado',$id_empleado)->forceDelete();
		$proceso = "Eliminar Maestro";
		$mensaje = "El maestro ha sido borrado correctamente";
		return view('sistema.mensaje')
		->with('proceso',$proceso)
		->with('mensaje',$mensaje);
	}

public function restauraempleado($id_empleado){
		empleados::withTrashed()->where('id_empleado',$id_empleado)->restore();
		$proceso = "Restaurar Maestro";
		$mensaje = "El Maestro se restauro correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	public function eliminaempleado1($id_empleado){
		//echo "Elimina $num_folio";
		empleados::find($id_empleado)->delete();
		$proceso = "Elimina Maestro";
		$mensaje = "El Maestro se elimino Correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	public function modificaempleado($id_empleado){
			$infom = empleados::where('id_empleado','=',$id_empleado)->get();
		
		$id_estado = $infom [0]->id_estado;

			$estados = estados::where('id_estado','=',$id_estado)->get();
			$todas = estados::where('id_estado','!=',$id_estado)->get();
		
		 return view('sistema.modificaempleado')
		 ->with('infom',$infom[0])
		 ->with('id_estado',$id_estado)
		 ->with('estados',$estados[0]->estado)
		 ->with('todas',$todas);
	}
	public function guardaedicionempleado(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
		$id_empleado = $request->id_empleado;
		$id_estado = $request->id_estado;



	$this->validate($request,[
		'nombre'=>['regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/'],
		'apellido1' => 'required|alpha|max:255',
		'apellido2' => 'required|alpha|max:255',
		'puesto' => 'required|alpha|max:255',
		'telefono'=>'required|regex:/^[0-9]{10}$/',
		'email' => 'required|email|max:255',
		'rfc'=>'required|regex:/^[0-9,A-Z]{13}$/',
		'calle' => 'required|max:255',
		'numero' => 'required|numeric|max:2000',
		'colonia'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
		'cp'=>'required|regex:/^[0-9]{5}$/',

	]);
		$this->validate($request,[
			
		]);
		$TA = empleados::find($id_empleado);
		$TA->id_empleado = $request->id_empleado;
		$TA->nombre = $request->nombre;
		$TA->apellido1 = $request->apellido1;
		$TA->apellido2 = $request->apellido2;
		$TA->puesto = $request->puesto;
		$TA->telefono = $request->telefono;
		$TA->email = $request->email;
		$TA->rfc = $request->rfc;
		$TA->calle = $request->calle;
		$TA->numero = $request->numero;
		$TA->colonia = $request->colonia;
		$TA->cp = $request->cp;
		$TA->id_estado = $request->id_estado;
		$TA->save();


empleados::withTrashed()->where('id_empleado',$id_empleado)->restore();

		$proceso = "MAESTRO ACTUALIZADO";
			$mensaje = "Maestro acutailizado correctamente";
			return view ("sistema.mensaje")
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
	}
}
