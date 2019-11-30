@extends('sistema.principal')

  @section('contenido')





	<form class="formulario" action ="{{route('guardaedicioncliente')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_cliente'))
		<i> {{ $errors->first('id_cliente') }} </i> 
		@endif	<br>

		Clave : <input class="form-control"  type = 'text' name = 'id_cliente' value="{{$infom->id_cliente}}" readonly = 'readonly'>
				@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Descripción del Tipo: <input class="form-control"  type = 'text' name = 'nombre' value="{{$infom->nombre}}">
		
		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>
		Apellido P.: <input type = 'text' class="form-control"  name = 'apellido1' value="{{$infom->apellido1}}">
		
		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>
		Apellido M.: <input type = 'text' class="form-control"  name = 'apellido2' value="{{$infom->apellido2}}">
		
		@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>
		Telefono: <input type = 'text' class="form-control"  name = 'telefono' value="{{$infom->telefono}}">
	
		@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>
		Email: <input type = 'text' class="form-control"  name = 'email' value="{{$infom->email}}">
	
		@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	<br>
		RFC: <input type = 'text' class="form-control"  name = 'rfc' value="{{$infom->rfc}}">
		
		@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>
		Calle: <input type = 'text' class="form-control"  name = 'calle' value="{{$infom->calle}}">
		
		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>
		Numero: <input type = 'text' class="form-control"  name = 'numero' value="{{$infom->numero}}">
		

		@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>
		Colonia: <input type = 'text' class="form-control"  name = 'colonia' value="{{$infom->colonia}}">
		

		@if($errors->first('c_p')) 
		<i> {{ $errors->first('c_p') }} </i> 
		@endif	<br>
		C.P.: <input type = 'text' class="form-control"  name = 'c_p' value="{{$infom->c_p}}">
	
	<br>
			

		Selecciona Tipo de producto<select class="form-control" name="id_estado">
			<option  class="form-control" value='{{$id_estado}}'>{{$estados}}</option>
				@foreach($todas as $td)
				<option class="form-control" value='{{$td->id_estado}}'>{{$td->estado}}</option>
				@endforeach
				</select>
	<br>

		
	


		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
@stop