@extends('sistema.principal')

  @section('contenido')
		  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Evidencias Subidas por Alumnos</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
	<thead>

	<tr><th>ID</th><!--<th>Imagen</th>--><th>Nombre Alumno</th><th>Descripcion Trabajo</th><th>Matricula</th><th>Tutor</th><!--<<td>ID.Producto</td>-->@if(Session::get('sesiontipo')=="Admin")
<th>Opciones</th>
@endif</tr>
</thead>


	@foreach($productos as $ma)
		<tr><td> {{$ma->id_producto}} </td>
		<!--<td><img src = "{{asset('public/archivos/'.$ma->archivo)}}" height ="60" width="60"></td>-->
		<td>{{$ma->nombrepro}}</td>
		<td>{{$ma->descripcion}}</td>
		<td>{{$ma->costo}}</td>
		<td>{{$ma->nombre}}</td>
	

		<td>	

			@if(Session::get('sesiontipo')=="Admin")

		@if($ma->deleted_at=="")
 <a href="{{URL::action('c_productos@eliminaproductos1', ['id_producto'=>$ma->id_producto])}}">

		<button type="button"class="btn-sm btn-outline-danger" >
          <span ></span>  Eliminar Logico
        </button></a>
<br>
        <br>

				<a href="{{URL::action('c_productos@modificaproductos',['id_producto'=>$ma->id_producto])}}">
					
		<button type="button" class="btn-sm btn-outline-primary" >
          <span ></span> Editar Registro

        </button></a>
        

        @else

        <a href="{{URL::action('c_productos@restauraproductos',['id_producto'=>$ma->id_producto])}}">
					
		<button type="button" class="btn-sm btn-success" >
         <span ></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="{{URL::action('c_productos@eliminaproductos',['id_producto'=>$ma->id_producto])}}">
					
		<button type="button" class="btn-sm btn-danger" >
         <span ></span> Eliminar Permanente <br>
        </button></a>
        
        @endif
                @endif
                </td>
</tr>

	@endforeach
</table>
</div>
@stop