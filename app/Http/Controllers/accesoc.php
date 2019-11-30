<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\usuarios;
use Session;

class accesoc extends Controller
{
   public function login()
   {
	   return view ('sistema.login');
   }
   public function valida(Request $request)
   {
	  $login = $request->login;
      $password = $request->password;
	   $this->validate($request,[
	     'login'=>'required',
		   'password'=>'required',
	     ]);
	$consulta= usuarios::withTrashed()->where('login',$login)->where('password','=',$password)->get();
	if(count($consulta)==0)
	{
		 Session::flash('error', 'El usuario o password no existe');
		 return redirect()->route('login');
	}
	else
    {
		if($consulta[0]->deleted_at!="")
		{
		Session::flash('error', 'El usuario esta desactivado, favor de consultar a su administrador');
		 return redirect()->route('login');
		}
		else
		{
		  Session::put('sesionname',$consulta[0]->nombre);
		  Session::put('sesionidu',$consulta[0]->id_usuario);
		  Session::put('sesiontipo',$consulta[0]->tipo_de_usuario);
	      
		  /*$sname = Session::get('sesionname');
		  $sidu = Session::get('sesionidu');
		  $stipo = Session::get('sesiontipo');
		  echo $sname . ' '. $sidu . ' '. $stipo;*/
		   return redirect()->route('principal');
		}
	}		
		
		 
   }
   public function principal()
   { 
      if(Session::get('sesionidu')!="")
	  {
	   return view ('sistema.principal');
	  }
	  else
	  {
		  Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
		 return redirect()->route('login');
	  }
   }
   public function cerrarsesion()
   {
	    Session::forget('sesionname');
	   Session::forget('sesionidu');
	   Session::forget('sesiontipo');
	   Session::flush();
	   Session::flash('error', 'Session Cerrada Correctamente');
	   return redirect()->route('login');
   }
}









