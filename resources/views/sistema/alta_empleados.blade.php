@extends('sistema.principal')

  @section('contenido')

	<form  class="formulario" action ="{{route('guardaempleado')}}" method = 'POST' align="center">

		<div class="contenedor">
		<h2 class="title"> REGISTRO PROFESOR</h2>
		{{csrf_field()}}

		@if($errors->first('id_clientes'))
		<i> {{ $errors->first('id_clientes') }} </i> 
		@endif	
		<p class="sub">Clave:</p> <input class="form-control input48" type = 'text' name = 'id_empleado' value="{{$idTipAbs}}" readonly = 'readonly'>
		



		@if($errors->first('nombree')) 
		<i> {{ $errors->first('nombree') }} </i> 
		@endif	
		<p class="sub">Nombre:</p> <input class="form-control input48" placeholder="Enter Nombre" type = 'text' name = 'nombree' value="{{old('nombree')}}">
	

		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	
		<p class="sub">Apellido P:</p> <input class="form-control input48" placeholder="Enter Apellido Paterno"  type = 'text' name = 'apellido1' value="{{old('apellido1')}}">
		


		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	
		<p class="sub">Apellido M:</p> <input class="form-control input48" placeholder="Enter Apellido Materno" type = 'text' name = 'apellido2' value="{{old('apellido2')}}">
		


		@if($errors->first('puesto')) 
		<i> {{ $errors->first('puesto') }} </i> 
		@endif	
		<p class="sub">Puesto:</p> <input class="form-control input48" placeholder="Enter Puesto"  type = 'text' name = 'puesto' value="{{old('puesto')}}">
		


		@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	
		<p class="sub">Telefono:</p> <input class="form-control input48" placeholder="Enter Telefono" type = 'text' name = 'telefono' value="{{old('telefono')}}">
		




		@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	
		<p class="sub">Email:</p> <input class="form-control input48" placeholder="Enter Email" type = 'text' name = 'email' value="{{old('email')}}">
	




		@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	
		<p class="sub">RFC:</p> <input class="form-control input48"  placeholder="Enter RFC" type = 'text' name = 'rfc' value="{{old('rfc')}}">
		



		@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	
		<p class="sub">Calle:</p> <input class="form-control input48"  placeholder="Enter Calle" type = 'text' name = 'calle' value="{{old('calle')}}">
		




		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	
		<p class="sub">Numero:</p> <input class="form-control input48" placeholder="Enter Numero" type = 'text' name = 'numero' value="{{old('numero')}}">
		


		@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	
		<p class="sub">Colonia:</p> <input class="form-control input48" placeholder="Enter Colonia" type = 'text' name = 'colonia' value="{{old('colonia')}}">
		

		@if($errors->first('cp')) 
		<i> {{ $errors->first('cp') }} </i> 
		@endif	<br>
		<p class="sub">CP:</p> <input class="form-control input48" placeholder="Enter CP" type = 'text' name = 'cp' value="{{old('cp')}}">
		


	<label class="sub" for="descripcion">Selecciona Estado</label>
			<select class="form-control input48" name="id_estado">

			@foreach($estados as $es)
				<option class="form-control" value= "{{$es->id_estado}}"> {{$es->estado}} </option>	
			@endforeach
			</select>

			<br>

<br>



		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop