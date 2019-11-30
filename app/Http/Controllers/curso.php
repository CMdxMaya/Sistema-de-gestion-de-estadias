<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\zonas;
use App\mesas;
use Session;
use DB;

class curso extends Controller
{
 
    public function altamesa()
    {
        if(Session::get('sesionidu')!=""){

        $clavequesigue = mesas::withTrashed()->orderBy('id_mesa','desc')
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

    else
    {
        Session::flash('error','Es necesario logearse para continuar');
    }
    return redirect()->route('login');
        
    }
    public function guardamesa(Request $request)
    {
        

       
        $maest = new mesas;
        $maest ->id_mesa = $request ->id_mesa;
        $maest ->numero_de_personas = $request ->numero_de_personas;
        $maest ->id_zona = $request ->id_zona;

    $this->validate($request,[

          
            'numero_de_personas' => 'required|numeric|max:50',
        

        ]);




        $maest->save();
        $proceso = "ALTA DE MESA";
        $mensaje = "Mesa guardada correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);
        
        
    }

     public function reportemesa()
    {

        if(Session::get('sesionidu')!=""){


       $mesas=DB::table('mesas')
                                    ->join('zonas','zonas.id_zona','=','mesas.id_zona','inner')
                                    ->select('mesas.*','zonas.zona')
                                ->orderBy('id_mesa','asc')
                                    ->get();

            
    return view('sistema.reportemesa',compact('mesas')); 


        }

    else
    {
        Session::flash('error','Es necesario logearse para continuar');
    }
    return redirect()->route('login');
    }

   public function eliminamesa($id_mesa) {
   mesas::withTrashed()->where('id_mesa',$id_mesa)->forceDelete();
            $proceso = "Eliminar Mesa";
            $mensaje = "La Mesa ha sido borrado correctamente";
            return view('sistema.mensaje')
            ->with('proceso',$proceso)
            ->with('mensaje',$mensaje);
        }




        public function eliminamesa1($id_mesa){
        //echo "Elimina $num_folio";
        mesas::find($id_mesa)->delete();
        $proceso = "Elimina Mesa";
        $mensaje = "La mesa se elimino Correctamente";
        return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    public function restaurarmesa($id_mesa){
        mesas::withTrashed()->where('id_mesa',$id_mesa)->restore();
        $proceso = "Restaurar Mesa";
        $mensaje = "La Mesa se restauro correctamente";
        return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
    }

    public function modificam($id_mesa)
    {
$infom= mesas::withTrashed()->where('id_mesa','=',$id_mesa)->get();
            $id_zona = $infom [0]->id_zona;

            $zonas = zonas::where('id_zona','=',$id_zona)->get();
            $todas = zonas::where('id_zona','!=',$id_zona)->get();

            return view ('sistema.modificamesa')
            
            ->with('infom',$infom[0])
            ->with('id_zona',$id_zona)
            ->with('zonas',$zonas[0]->zona)
            ->with('todas',$todas);





   }
   public function guardaedicionm(Request $request)
   {
     
        $id_mesa = $request->id_mesa;
        $numero_de_personas = $request->numero_de_personas;
        $id_zona = $request->id_zona;
       

 $this->validate($request,[

          
            'numero_de_personas' => 'required|numeric|max:50',
        

        ]);
    
        
            $maest = mesas::find($id_mesa);
            $maest->numero_de_personas = $request->numero_de_personas;
            $maest->id_zona = $request->id_zona;
           
            


            $maest->save();
             $proceso = "MODIFICAGION DE MESA";
        $mensaje = "MESA actualizado correctamente";
        return view ("sistema.mensaje")
        ->with('proceso',$proceso)
        ->with('mensaje',$mensaje);

       
   }
    
}

