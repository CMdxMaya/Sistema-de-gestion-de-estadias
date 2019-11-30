
@extends('sistema.principal')

  @section('contenido')


  <div class="mon">
<form  class="formulario" action ="{{route('guardazona')}}" method = 'POST'  aling="center">


		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO EMPRESA</h2>
{{csrf_field()}}


@if($errors->first('id_zona'))
<i> {{ $errors->first('id_zona') }} </i>
@endif 

<input class="form-control form-control-user"  align="center"   type = 'text' name = 'id_zona' value="{{$idms}}" readonly = 'readonly'>

<br>

	@if($errors->first('zona')) 
		<i> {{ $errors->first('zona') }} </i> 
		@endif

			<input  class="form-control form-control-user" placeholder="Ingrese nombre de la empresa" type = 'text' name = 'zona' value="{{old('zona')}}">
	<br>
	@if($errors->first('descripcion')) 
		<i> {{ $errors->first('descripcion') }} </i> 
		@endif	
		<input   class="form-control form-control-user" placeholder="Ingrese Descripcion" type = 'text' name = 'descripcion' value="{{old('descripcion')}}">
		

			@if($errors->first('activo')) 
		<i> {{ $errors->first('activo') }} </i> 
		@endif	
	</div>



<label  class="h6 text-gray-900 mb-2"for="terms"><p ">Activo</p>
	SI    <input   type="radio" name="activo" id="activo" value="Si" >	<br>	
NO     <input    type="radio" name="activo" id=activo" value="No" >
</label>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
@stop