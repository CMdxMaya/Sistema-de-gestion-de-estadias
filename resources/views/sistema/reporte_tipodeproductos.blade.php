@extends('sistema.principal')

@section('contenido')
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Tipo de Productos</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>	

			<tr><td>Clave</td><td>Nombre</td>@if(Session::get('sesiontipo')=="Admin")

				<td>Accion</td>	
				@endif
			</tr></thead>
			@foreach($TipAb as $ab)

			<tr><td>{{$ab->id_tipodeproducto}}</td>
				<td>{{$ab->nombre}}</td>


				<td>
					@if(Session::get('sesiontipo')=="Admin")

					
					@if($ab->deleted_at=="")
					<a href="{{URL::action('controlador_tipodeproductos@eliminatipodeproducto1', ['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">

						<button type="button" class="btn-sm btn-outline-danger">
							<span ></span>  Eliminar Logico
						</button></a>
						<br>
						<br>

						<a href="{{URL::action('controlador_tipodeproductos@modificatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">
							
							<button type="button" class="btn-sm btn-outline-primary" >
								<span ></span> Editar Registro

							</button></a>
							

							@else

							<a href="{{URL::action('controlador_tipodeproductos@restauratipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">
								
								<button type="button"  class="btn-sm btn-success">
									<span ></span> Restaurar
								</button></a>
								<br>
								<br>

								<a href="{{URL::action('controlador_tipodeproductos@eliminatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])}}">
									
									<button type="button" class="btn-sm btn-danger" >
										<span ></span> Eliminar <br>Permanentemente
									</button></a>
									
									@endif
									@endif
								</td>

							</tr>
							@endforeach
						</table>
					</div>
					@stop