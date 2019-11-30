

	@extends('sistema.principal')

  @section('contenido')
	<h1 align="center">Modifica EMPLEADOS</h1>
	<form class="formulario" action ="{{route('guardaedicionempleado')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_empleado'))
		<i> {{ $errors->first('id_empleado') }} </i> 
		@endif	<br>

		Clave : <input class="form-control" type = 'text' name = 'id_empleado' value="{{$infom->id_empleado}}" readonly = 'readonly'>
		@if($errors->first('nombree')) 
		<i> {{ $errors->first('nombree') }} </i> 
		@endif	<br>

		Descripción del Tipo: <input type = 'text' class="form-control" name = 'nombre' value="{{$infom->nombre}}">
		


@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>

		Apellido P: <input type = 'text' class="form-control" name = 'apellido1' value="{{$infom->apellido1}}">
	
@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>

		Apellido M: <input type = 'text' class="form-control" name = 'apellido2' value="{{$infom->apellido2}}">
		


@if($errors->first('puesto')) 
		<i> {{ $errors->first('puesto') }} </i> 
		@endif	<br>

		Puesto: <input type = 'text' class="form-control" name = 'puesto' value="{{$infom->puesto}}">
		



@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>

		Telefono: <input type = 'text' class="form-control" name = 'telefono' value="{{$infom->telefono}}">
	


@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>

	Email: <input type = 'text' class="form-control" name = 'email' value="{{$infom->email}}">
		



@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	<br>

		RFC: <input type = 'text' class="form-control" name = 'rfc' value="{{$infom->rfc}}">
		



@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>

		Calle: <input type = 'text' class="form-control" name = 'calle' value="{{$infom->calle}}">
		



@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>

		Numero: <input type = 'text' class="form-control" name = 'numero' value="{{$infom->numero}}">
		




@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>

		Colonia: <input type = 'text' class="form-control" name = 'colonia' value="{{$infom->colonia}}">
		



		Selecciona Estado<select class="form-control" name="id_estado">
			<option  class="form-control" value='{{$id_estado}}'>{{$estados}}</option>
				@foreach($todas as $td)
				<option class="form-control" value='{{$td->id_estado}}'>{{$td->estado}}</option>
				@endforeach
				</select>
	





@if($errors->first('cp')) 
		<i> {{ $errors->first('cp') }} </i> 
		@endif	<br>

		CP: <input type = 'text' class="form-control" name = 'cp' value="{{$infom->cp}}">
		<br>




		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
@stop