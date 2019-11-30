<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;


class DateRangeController extends Controller
{
    function index()
    {
     return view('data_range');
    }

    function fetch_data(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
     
$data = DB::table('ventas')
    ->join('clientes','ventas.id_cliente','=','clientes.id_cliente')
    ->join('empleados','ventas.id_mesero','=','empleados.id_empleado')
    ->select('ventas.*','clientes.nombre','empleados.nombree')

         ->whereBetween('fecha', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {


$data = DBh::table('ventas')
    ->join('clientes','ventas.id_cliente','=','clientes.id_cliente')
    ->join('empleados','ventas.id_mesero','=','empleados.id_empleado')

    ->select('ventas.*','clientes.nombre','empleados.nombree')
    ->orderBy('idv','asc')
    ->get();






          }
      echo json_encode($data);
     }
    }
}
