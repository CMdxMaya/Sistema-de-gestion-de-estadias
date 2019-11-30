@extends('sistema.principal')

  @section('contenido')



	<form class="formulario" action ="{{route('guardacliente')}}" method = 'POST' align="center">


<div class="form-group">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO ALUMNOS</h2>

		{{csrf_field()}}

		@if($errors->first('id_clientes'))
		<i> {{ $errors->first('id_clientes') }} </i> 
		@endif	
		<input class="form-control form-control-user"  placeholder="Password" type = 'text' name = 'id_cliente' id="" value="{{$idTipAbs}}" readonly = 'readonly'>
		<br>



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	
		<input class="form-control form-control-user"   placeholder="Enter nombre"  type = 'text' name = 'nombre' value="{{old('nombre')}}">

		<br>

		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	
		<input class="form-control form-control-user"   placeholder="Enter Apellido Paterno" type = 'text' name = 'apellido1' value="{{old('apellido1')}}">
				<br>


		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	
	 <input class="form-control form-control-user"  placeholder="Enter Apellido Materno" type = 'text' name = 'apellido2' value="{{old('apellido2')}}">
	 		<br>


@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	
		 <input class="form-control form-control-user"   placeholder="Enter Telefono" type = 'text' name = 'telefono' value="{{old('telefono')}}">
		 		<br>

@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	
		<input class="form-control form-control-user"   placeholder="Enter Email" type = 'text' name = 'email' value="{{old('email')}}">
				<br>

@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfc') }} </i> 
		@endif	
		<input class="form-control form-control-user"   placeholder="Enter RFC" type = 'text' name = 'rfc' value="{{old('rfc')}}">
				<br>

@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	
		<input class="form-control form-control-user"  placeholder="Enter Calle" type = 'text' name = 'calle' value="{{old('calle')}}">
				<br>


		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	
		<input class="form-control form-control-user" "  placeholder="Enter Numero" type = 'text' name = 'numero' value="{{old('numero')}}">
				<br>

		
			@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	
		<input class="form-control form-control-user"   placeholder="Enter Colonia" type = 'text' name = 'colonia' value="{{old('colonia')}}">
				<br>

			
		@if($errors->first('c_p')) 
		<i> {{ $errors->first('c_p') }} </i> 
		@endif	
<input class="form-control form-control-user"   placeholder="Enter CP" type = 'text' name = 'c_p' value="{{old('c_p')}}">
	
		<br>

			<select class="form-control input48" name="id_estado">


			@foreach($estados as $es)
				<option class="form-control form-control-user"  value= "{{$es->id_estado}}"> {{$es->estado}} </option>	
			@endforeach
			</select>
			
		<br>






		<input class="btn btn-primary btn-user btn-block"type = 'submit' value = 'Guardar' >

		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
</div>
@stop