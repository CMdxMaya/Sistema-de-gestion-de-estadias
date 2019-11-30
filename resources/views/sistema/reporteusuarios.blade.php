@extends('sistema.principal')

  @section('contenido')
			<h2 class="titlea"> REPORTE PRODUCTO</h2>
		  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >USUARIOS DEL SUSTEMA</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>

	<tr><th>ID</th><th>Nombre Completo</th><th>Correo</th><th>Login</th><th>Password</th><th>Tipo de Usuario</th><th>Opciones</th></th>
</thead>
	@foreach($usuarios as $ma)
		<tr><td> {{$ma->id_usuario}} </td>
					<td>{{$ma->nombre}}</td>
		<td>{{$ma->correo}}</td>

		<td>{{$ma->login}}</td>
		<td>{{$ma->password}}</td>
		<td>{{$ma->tipo_de_usuario}}</td>


<td>

				@if(Session::get('sesiontipo')=="Admin")

		 @if($ma->deleted_at=="")
 <a href="{{URL::action('c_usuarios@eliminausuarios1', ['id_usuario'=>$ma->id_usuario])}}">

		<button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

				<a href="{{URL::action('c_usuarios@modificausuarios',['id_usuario'=>$ma->id_usuario])}}">
					
		<button type="button" class="btn-sm btn-primary">
          <span ></span> Editar 

        </button></a>
        

        @else

        <a href="{{URL::action('c_usuarios@restaurausuarios',['id_usuario'=>$ma->id_usuario])}}">
					
		<button type="button" class="btn-sm btn-success" >
         <span ></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="{{URL::action('c_usuarios@eliminausuarios',['id_usuario'=>$ma->id_usuario])}}">
					
		<button type="button" class="btn-sm btn-danger">
         <span ></span> Eliminar 
        </button></a>
        
        @endif
        @endif
	@endforeach
</table>
@stop