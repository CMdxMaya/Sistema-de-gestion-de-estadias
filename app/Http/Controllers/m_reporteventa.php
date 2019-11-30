<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ventas;
use App\clientes;
use Session;
use DB;

class m_reporteventa extends Controller
{
	public function mensaje(){
		echo "hola mundo";
	}

	
		public function reporteventas(){


		$ventas = DB::table('ventas')
    ->join('clientes','ventas.id_cliente','=','clientes.id_cliente')
    ->join('empleados','ventas.id_mesero','=','empleados.id_empleado')

    ->select('ventas.*','clientes.nombre','empleados.nombree')
    ->orderBy('idv','asc')
    ->get();
		


			
	return view('sistema.reporteventas',compact('ventas')); 
}

public function muestraReporJui($idv){
	
		
		$ventas = \DB::select("SELECT * FROM ventas WHERE idv =".$idv);
		$id_cliente = $ventas[0]->id_cliente;
		$id_mesero = $ventas[0]->id_mesero;
		$formapago = $ventas[0]->formapago;

		
	
	  return view('sistema.vista_detalle')
	  ->with('id_cliente',$id_cliente)
		->with('id_mesero',$id_mesero[0])
		->with('formapago',$formapago);
	
	
	
}
	


}
