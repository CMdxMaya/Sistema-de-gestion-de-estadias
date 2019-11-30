@extends('sistema.principal')

  @section('contenido')
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Alumnos</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
<thead>
		<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO MATERNO</th><th>APELLIDO PATERNO</th><th>TELEFONO</th><th>EMAIL</th><th>RFC</th><th>CALLE</th><th>NUMERO</th>	<th>COLONIA</th>	<th>C.P.</th>	<th>Estado</th>

@if(Session::get('sesiontipo')=="Admin")

			<th>Accion</th>			

			@endif
		</tr>
</thead>

		@foreach($cli as $ab)
			<tr><td>{{$ab->id_cliente}}</td><td>{{$ab->nombre}}</td><td>{{$ab->apellido1}}</td><td>{{$ab->apellido2}}</td><td>{{$ab->telefono}}</td><td>{{$ab->email}}</td><td>{{$ab->rfc}}</td><td>{{$ab->calle}}</td><td>{{$ab->numero}}</td><td>{{$ab->colonia}}</td><td>{{$ab->c_p}}</td><td>{{$ab->estado}}</td>

				<!--<td>{{$ab->estado}}</td>-->




			<td>
			@if(Session::get('sesiontipo')=="Admin")
        
			 @if($ab->deleted_at=="")
 <a href="{{URL::action('controlador_clientes@eliminaclientes1', ['id_cliente'=>$ab->id_cliente])}}">

		<button class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

				<a href="{{URL::action('controlador_clientes@modificacliente',['id_cliente'=>$ab->id_cliente])}}">
					
		<button type="button" class="btn-sm btn-primary">
          <span class=""></span> Editar

        </button></a>
        

        @else

        <a href="{{URL::action('controlador_clientes@restauraclientes',['id_cliente'=>$ab->id_cliente])}}">
					
		<button type="button" class="btn-sm btn-success">
         <span ></span> Restaurar
        </button></a>
      
           <a href="{{URL::action('controlador_clientes@eliminacliente',['id_cliente'=>$ab->id_cliente])}}">
					
		<button type="button" class="btn-sm btn-danger">
         <span ></span> Eliminar
        </button></a>
        
        @endif

        @endif

        




			</td></tr>






		@endforeach
		

	</table>
</div>
	@stop