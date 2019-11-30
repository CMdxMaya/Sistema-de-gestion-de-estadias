@extends('sistema.principal')

  @section('contenido')

	<form class="formulario" action ="{{route('guardatipodeproducto')}}" method = 'POST' align="center">
		{{csrf_field()}}
		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO TIPO DE PRODUCTOS</h2>

		@if($errors->first('id_tipodeproducto'))
		<i> {{ $errors->first('id_tipodeproducto') }} </i> 
		@endif	

		<p  class="h6 text-gray-900 mb-2" >Clave:</p> <input class="form-control form-control-user"  type = 'text' name = 'id_tipodeproducto' value="{{$idTipAbs}}" readonly = 'readonly'>
	


		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	
		<p class="sub"> </p> <input class="form-control form-control-user" placeholder="Nombre de tipo de producto" type = 'text' name = 'nombre' value="{{old('nombre')}}">

@if($errors->first('activo')) 
		<i> {{ $errors->first('activo') }} </i> 
		@endif	
	</div>
<label  class="h6 text-gray-900 mb-2"for="terms"><p ">Activo</p>
	SI    <input   type="radio" name="activo" id="activo" value="Si" >		
NO     <input    type="radio" name="activo" id=activo" value="No" >
</label>


<br>
	<input class="btn btn-primary btn-user btn-block"type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop