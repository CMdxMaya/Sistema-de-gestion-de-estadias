<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\zonas;
use Session;


class zona extends Controller
{
 
    public function altazona()
    {

        if(Session::get('sesionidu')!=""){


  $zonas = zonas::where('activo','Si')
        ->orderBy('zona','desc')
        ->get();

        $clavequesigue = zonas::orderBy('id_zona','desc')
        ->take(1)
        ->get();
        $idms = $clavequesigue[0]->id_zona+1;

      
        //orm eloquent  estudair sus consultas
        //return $carreras;
        return view ('sistema.altazona')->with('zonas',$zonas)->with('idms',$idms);


        }

    else
    {
        Session::flash('error','Es necesario logearse antes de continuar');
    }
    return redirect()->route('login');
        
    }
    public function guardazona(Request $request)
    {
        $zona = $request->zona;
        $descripcion = $request->descripcion;
        $activo = $request->activo;
  $this->validate($request,[
            'descripcion'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
            'zona'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
            'activo'=>'required',


        

    ]);
        //no se recibe el archivo

       
        $maest = new zonas;
        $maest ->id_zona = $request ->id_zona;
                $maest ->zona = $request ->zona;

  
        $maest ->descripcion = $request ->descripcion;
        $maest ->activo = $request ->activo;

        $maest->save();
        $proceso = "ALTA DE EMPRESA";
        $mensaje = "Empresa guardada correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }
     public function reportezona()
    {

        if(Session::get('sesionidu')!=""){

                    $zonas = zonas::withTrashed()->orderBy('id_zona','asc')->get();


        return view('sistema.reportezona')
        ->with('zonas', $zonas);


        }

    else
    {
        Session::flash('error','Es necesario logearse para continuar');
    }
    return redirect()->route('login');
    }
public function eliminazona($id_zona){
   zonas::withTrashed()->where('id_zona',$id_zona)->forceDelete();
        $proceso = "Eliminar Empresa";
        $mensaje = "La Empresa ha sido borrado correctamente";
        return view('sistema.mensaje')
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
    }




    public function eliminazona1($id_zona){
        //echo "Elimina $num_folio";
        zonas::find($id_zona)->delete();
        $proceso = "Elimina Empresa";
        $mensaje = "La Empresa se elimino Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    public function restaurazona($id_zona){
        zonas::withTrashed()->where('id_zona',$id_zona)->restore();
        $proceso = "Restaurar Empresa";
        $mensaje = "Empresa se restauro correctamente";
        return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }


        public function modificazona($id_zona){
        //echo "Tipo Abogado a modificar $id_cliente";
        $infom = zonas::where('id_zona','=',$id_zona)->get();
        return view('sistema.modificazona')
        ->with('infom',$infom[0]);
    }
    public function guardaedicionzona(Request $request){
        //echo $request->nombre;
        $zona = $request->zona;
        $id_zona = $request->id_zona;
  $this->validate($request,[
            'descripcion'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
            'zona'=>'required|regex:/^[A-Z-\s]+([a-zA-Z-áéíóúñÑ\s])+$/',
            'activo'=>'required',


        

    ]);
        $TA = zonas::find($id_zona);
        $TA->id_zona = $request->id_zona;
        $TA->zona = $request->zona;
        $TA->descripcion = $request->descripcion;
        $TA->activo = $request->activo;
       
        $TA->save();
        $proceso = "Modifica Empresa";
        $mensaje = "Empresa Actualizada correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
    }
    
    
}

