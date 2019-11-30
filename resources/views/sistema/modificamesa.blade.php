


	@extends('sistema.principal')

  @section('contenido')
<form class="formulario" action ="{{route('guardaedicionm')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

				@if($errors->first('id_mesa'))
		        <i> {{ $errors->first('id_mesa') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_mesa">Clave:</label>
				<input type="text" placeholder="Clave" class="form-control" name="id_mesa" value="{{$infom->id_mesa}}" readonly='readonly'><br>
				</div>

@if($errors->first('id_mesa'))
<i> {{ $errors->first('id_mesa') }} </i>
@endif <br>



@if($errors->first('numero_de_personas')) 
		<i> {{ $errors->first('numero_de_personas') }} </i> 
		@endif	<br>
		Numero de personas: <input type = 'text' class="form-control"  name = 'numero_de_personas' value="{{$infom->numero_de_personas}}">





<br>	Zona<select name="id_zona" class="form-control">
					<option class="form-control" value='{{$id_zona}}'>{{$zonas}}</option>
					@foreach($todas as $td)
					<option class="form-control" value='{{$td->id_zona}}'>{{$td->zona}}</option>
					@endforeach
				</select>
				<br>
<br>






		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
	</form>
</div>
@stop