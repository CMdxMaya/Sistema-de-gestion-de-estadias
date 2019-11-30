
@extends('sistema.principal')

  @section('contenido')


  <div class="mon">
<form  class="formulario" action ="{{route('guardazona')}}" method = 'POST'  aling="center">


		<div class="contenedor">
		<h2 class="title"> REGISTRO ZONA</h2>
{{csrf_field()}}


@if($errors->first('id_zona'))
<i> {{ $errors->first('id_zona') }} </i>
@endif <br>
<p class="sub">Clave:</p> <input align="center"  class="input48" type = 'text' name = 'id_zona' value="{{$idms}}" readonly = 'readonly'>


	@if($errors->first('zona')) 
		<i> {{ $errors->first('zona') }} </i> 
		@endif

			<p class="sub">Zona: </p><input  class="input48" type = 'text' name = 'zona' value="{{old('zona')}}">
	
	@if($errors->first('descripcion')) 
		<i> {{ $errors->first('descripcion') }} </i> 
		@endif	

		<p class="sub">Descripcion:</p> <input  class="input48" type = 'text' name = 'descripcion' value="{{old('descripcion')}}">
		<br>
		<br>

			@if($errors->first('activo')) 
		<i> {{ $errors->first('activo') }} </i> 
		@endif	
	</div>
<label for="terms"><p ">Activo</p>SI<input   type="checkbox" name="activo" id="activo" value="Si" >		
NO<input   type="checkbox" name="activo" id=activo" value="No" ></label>
	

		<br>
<br>



		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
@stop