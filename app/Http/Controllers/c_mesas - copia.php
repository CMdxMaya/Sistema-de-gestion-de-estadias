<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\zonas;
use App\mesas;

class c_mesas extends Controller
{
 
    public function altamesa()
    {
        $clavequesigue = mesas::orderBy('id_mesa','desc')
        ->take(1)
        ->get();
        $idms = $clavequesigue[0]->id_mesa+1;

        $zonas = zonas::where('activo','Si')
        ->orderBy('zona','desc')
        ->get();
        //orm eloquent  estudair sus consultas
        //return $carreras;
        return view ('sistema.altamesa')->with('zonas',$zonas)->with('idms',$idms);
        
    }
    public function guardamesa(Request $request)
    {
        $numero_de_personas = $request->nombre;
        $id_zona = $request->edad;
        //no se recibe el archivo



       
        $maest = new mesas;
        $maest ->id_mesa = $request ->id_mesa;
        $maest ->numero_de_personas = $request ->numero_de_personas;

        $maest ->id_zona = $request ->id_zona;
        $maest->save();
        $proceso = "ALTA DE MESA";
        $mensaje = "Mesa guardado correctamente";
        return view ("sistema.mensaje")
        return back();

        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }
     public function reportemesa()
    {
        $mesas = mesas::orderBy('id_zona','desc')->get();
        return view('sistema.reportemesa')
        ->with('mesas', $mesas);
    }

    public function eliminamesa($id_mesa)
    {
        mesas::find($id_mesa)->delete();
        $proceso = "ELIMINA MESA";
        $mensaje = "La mesa haa sido borrada correctamente";
        return view ('sistema.mensaje')
        ->with('proceso', $proceso)
        ->with('mensaje', $mensaje);
    }
    public function modificam($id_mesa)
    {
    $mesas= mesas::where('id_mesa','=',$id_mesa)->get();
    $id_zona =$mesas[0]->id_zona;

    $zonas = zonas::where('id_zona','=',$id_zona)->get();

    $todasdemas = zonas::where('id_zona','!=',$id_zona)->get();

    return view ('sistema.modificamesa')
    ->with('mesas', $mesas[0])
    ->with('id_zona',$id_zona)
    ->with('zonas',$zonas[0]->zona)
    ->with('todasdemas', $todasdemas);

   }
   public function guardaedicionm(Request $request)
   {
      $id_zona = $request->id_zona;
        $edad = $request->edad;
        $correo = $request->correo;
        $idm = $request->idm;
        $cp = $request->cp;
        //no se recibe el archivo

        $this->validate($request,[
            'id_mesa'=>'required|numeric',
            'id_zona'=>'required|numeric',
            
        ]);

       
        $maest -> idm = $request ->idm;
        $maest -> nombre = $request ->nombre;
        $maest -> edad = $request ->edad;
        $maest -> correo = $request ->correo;
        $maest -> cp = $request ->cp;
        $maest -> idc = $request ->idc;
        $maest->save();
        $proceso = "MODIFICAGION DE MAESTRO";
        $mensaje = "Maestro actualizado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
       
   }
    
}

