@extends('sistema.principal')

  @section('contenido')
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Profesores</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>

		<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>PUESTO </th><th>TELEFONO </th><th>EMAIL </th><th>CALLE </th><th>NUMERO </th><th>COLONIA </th><th>ESTADO</th><th>CP</th>

@if(Session::get('sesiontipo')=="Admin")

      <th>Accion</th>	

      @endif
		</tr>
	</thead>
		@foreach($cli as $ab)

			<tr><td>{{$ab->id_empleado}}</td>
             <td>{{$ab->nombree}}</td>
              <td>{{$ab->apellido1}}</td>
               <td>{{$ab->apellido2}}</td>
                <td>{{$ab->puesto}}</td>
                 <td>{{$ab->telefono}}</td>
                  <td>{{$ab->email}}</td>
                    <td>{{$ab->calle}}</td>
                     <td>{{$ab->numero}}</td>
                      <td>{{$ab->colonia}}</td>
                       <td>{{$ab->estado}}</td>
                        <td>{{$ab->cp}}</td>

<td>
                                @if(Session::get('sesiontipo')=="Admin")

                         
 @if($ab->deleted_at=="")
 <a href="{{URL::action('controlador_empleados@eliminaempleado1', ['id_empleado'=>$ab->id_empleado])}}">

    <button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

        <a href="{{URL::action('controlador_empleados@modificaempleado',['id_empleado'=>$ab->id_empleado])}}">
          
    <button type="button" class="btn-sm btn-primary">
          <span ></span> Editar

        </button></a>
        

        @else

        <a href="{{URL::action('controlador_empleados@restauraempleado',['id_empleado'=>$ab->id_empleado])}}">
          
    <button type="button" class="btn-sm btn-success" >
         <span "></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="{{URL::action('controlador_empleados@eliminaempleado',['id_empleado'=>$ab->id_empleado])}}">
          
    <button type="button" class="btn-sm btn-danger" >
         <span ></span> Eliminar 
        </button></a>
        
        @endif


    @endif

    
  </td></tr>
		@endforeach
	</table>
@stop