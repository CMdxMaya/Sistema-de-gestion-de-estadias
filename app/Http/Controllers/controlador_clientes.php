<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\clientes;
use App\estados;
use Session;
use DB;


class controlador_clientes extends Controller
{
	public function principal()
	 {
		 return view('sistema.principal');
		
	 }

     public function altacliente(){


	
	 
     			if(Session::get('sesionidu')!=""){
					
		$estados=estados::all();

    	$clavequesigue = clientes::orderBy('id_cliente','desc')
    								->take(1)
    								->get();
    	$idTipAbs = $clavequesigue[0]->id_cliente+1;

    	return view ('sistema.alta_clientes')
					->with('estados',$estados)
		     		->with('idTipAbs',$idTipAbs);
		     		}

	else
	{
		Session::flash('error','Deve logearse antes de continuar');
	}
	return redirect()->route('login');
    }


    public function guardacliente(Request $request)
	{   
	$id_cliente = $request->id_cliente;
	$nombre = $request->nombre;
	$apellido1 = $request->apellido1;
	$apellido2 = $request->apellido2;
	$telefono = $request->telefono;
	$email = $request->email;
	$rfc = $request->rfc;
	$calle = $request->calle;
	$numero = $request->numero;
	$colonia = $request->colonia;
	$c_p = $request->c_p;
	$id_estado = $request->id_estado;

	$this->validate($request,[

			'nombre'=>'required|regex:/^[A-Z]+/',
			'apellido1' => 'required|alpha|max:255',
			'apellido2' => 'required|alpha|max:255',
			'telefono'=>'required|regex:/^[0-9]{10}$/',
			'email' => 'required|email|max:255',
			'rfc'=>'required|regex:/^[0-9,A-Z]{13}$/',
			'calle' => 'required|max:255',
			'numero' => 'required|numeric|max:2000',
			'colonia'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'c_p'=>'required|regex:/^[0-9]{5}$/',

		]);


	//Se mandan los datos a la base de datos
	 $this->validate($request,[
	     ]);
		 //insert into tipo_abogados (id_cliente,TipoAbogado)-------
	        $TipAb = new clientes;
			$TipAb->id_cliente = $request->id_cliente;
			$TipAb->nombre = $request->nombre;
			$TipAb->apellido1 = $request->apellido1;
			$TipAb->apellido2 = $request->apellido2;
			$TipAb->telefono = $request->telefono;
			$TipAb->email = $request->email;
			$TipAb->rfc = $request->rfc;
			$TipAb->calle = $request->calle;
			$TipAb->numero = $request->numero;
			$TipAb->colonia = $request->colonia;
			$TipAb->c_p = $request->c_p;
			$TipAb->id_estado = $request->id_estado;

			$TipAb->save();
			 $proceso = "ALTA DE ALUMNO";
        $mensaje = " Alumno guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);

			//$mensaje = "Cliente registrado correctamente";
			//return view ("sistema.mensaje")
			//->with('proceso',$proceso)
			//->with('mensaje',$mensaje);
	}
	public function reportecliente(){


		if(Session::get('sesionidu')!=""){

	$cli=DB::table('clientes')
		->join('estados','estados.id_estado','=','clientes.id_estado','inner')
		->select('clientes.*','estados.estado')
		->orderBy('id_cliente','asc')
		->get();

		return view('sistema.reporte_clientes',compact('cli')); 
}

	else
	{
		Session::flash('error','Deve logearse antes de continuar');
	}
	return redirect()->route('login');

	}

	public function eliminacliente($id_cliente) {
   clientes::withTrashed()->where('id_cliente',$id_cliente)->forceDelete();
			$proceso = "Eliminar Alumno";
			$mensaje = "El alumno ha sido borrado correctamente";
			return view('sistema.mensaje')
			->with('proceso',$proceso)
			->with('mensaje',$mensaje);
		}




		public function eliminaclientes1($id_cliente){
		//echo "Elimina $num_folio";
		clientes::find($id_cliente)->delete();
		$proceso = "Elimina Alumno";
		$mensaje = "El Alumno se elimino Correctamente";
		return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}

	public function restauraclientes($id_cliente){
		clientes::withTrashed()->where('id_cliente',$id_cliente)->restore();
		$proceso = "Restaurar Alumno";
		$mensaje = "El Alumno se restauro correctamente";
		return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	}



	public function modificacliente($id_cliente){
		//echo "Tipo Abogado a modificar $id_cliente";
		$infom = clientes::where('id_cliente','=',$id_cliente)->get();
		
		$id_estado = $infom [0]->id_estado;

			$estados = estados::where('id_estado','=',$id_estado)->get();
			$todas = estados::where('id_estado','!=',$id_estado)->get();
		
		 return view('sistema.modificacliente')
		 ->with('infom',$infom[0])
		 ->with('id_estado',$id_estado)
		 ->with('estados',$estados[0]->estado)
		 ->with('todas',$todas);
	}
		public function guardaedicioncliente(Request $request){
		//echo $request->nombre;
		$nombre = $request->nombre;
		$id_cliente = $request->id_cliente;
		$id_estado = $request->id_estado;


	$this->validate($request,[

			'nombre'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'apellido1' => 'required|alpha|max:255',
			'apellido2' => 'required|alpha|max:255',
			'telefono'=>'required|regex:/^[0-9]{10}$/',
			'email' => 'required|email|max:255',
			'rfc'=>'required|regex:/^[0-9,A-Z]{13}$/',
			'calle' => 'required|max:255',
			'numero' => 'required|numeric|max:2000',
			'colonia'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
			'c_p'=>'required|regex:/^[0-9]{5}$/',

		]);
		$this->validate($request,[
	 
	     ]);
			$TA = clientes::find($id_cliente);
			$TA->id_cliente = $request->id_cliente;
			$TA->nombre = $request->nombre;
			$TA->apellido1 = $request->apellido1;
			$TA->apellido2 = $request->apellido2;
			$TA->telefono = $request->telefono;
			$TA->email = $request->email;
			$TA->rfc = $request->rfc;
			$TA->calle = $request->calle;
			$TA->numero = $request->numero;
			$TA->colonia = $request->colonia;
			$TA->c_p = $request->c_p;
			$TA->id_estado = $request->id_estado;
			$TA->save();
			clientes::withTrashed()->where('id_cliente',$id_cliente)->restore();

			$proceso = "MODIFICACION DE ALUMNO";
        $mensaje = " Alumno guardado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
}
}
