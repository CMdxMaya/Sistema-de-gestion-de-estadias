@extends('sistema.principal')

@section('contenido')
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Mesas</h3>
                            <BR>

    <div class="">
      <table class="table-rwd">
      	<tr>
      		<th>Clave</th><th>Clave de la zona</th><th>Numero de Personas</th>

				@if(Session::get('sesiontipo')=="Admin")

				<th>Accion</th>	
				@endif
			</tr>
		<tr>

			@foreach($mesas as $ab)

			<tr><td> {{$ab->id_mesa}} </td>
				<td>{{$ab->zona}}</td>
				<td>{{$ab->numero_de_personas}}</td>


				<td>

					@if(Session::get('sesiontipo')=="Admin")

					@if($ab->deleted_at=="")

					<a href="{{URL::action('curso@eliminamesa1', ['id_mesa'=>$ab->id_mesa])}}">

						<button type="button" class="btn-sm btn-outline-danger">
							<span ></span> Desactivar
						</button></a>
						

						<a href="{{URL::action('curso@modificam',['id_mesa'=>$ab->id_mesa])}}">

							<button type="button" class="btn-sm btn-primary" >
								<span ></span> Editar

							</button></a>
							@else

							<a href="{{URL::action('curso@restaurarmesa',['id_mesa'=>$ab->id_mesa])}}">

								<button type="button" class="btn-sm btn-success" >
									<span ></span> Restaurar
								</button></a>
							

								<a href="{{URL::action('curso@eliminamesa',['id_mesa'=>$ab->id_mesa])}}">

									<button type="button" class="btn-sm btn-danger" >
										<span ></span> Eliminar 
									</button></a>

									@endif

									@endif

								</td></tr>

								@endforeach
							</table>
    </div>
  </body>
							@stop