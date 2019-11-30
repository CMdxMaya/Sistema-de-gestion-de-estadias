


	@extends('sistema.principal')

  @section('contenido')










	<form class="formulario" action ="{{route('guardaedicionzona')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_zona'))
		<i> {{ $errors->first('id_zona') }} </i> 
		@endif	<br>

		Clave : <input type = 'text' class="form-control" name = 'id_zona' value="{{$infom->id_zona}}" readonly = 'readonly'>
		@if($errors->first('zona')) 
		<i> {{ $errors->first('zona') }} </i> 
		@endif	<br>

		Zona: <input type = 'text' class="form-control" class="form-control" name = 'zona' value="{{$infom->zona}}">
	

@if($errors->first('descripcion')) 
		<i> {{ $errors->first('descripcion') }} </i> 
		@endif	<br>

		 Descripcion <input type = 'text' class="form-control" name = 'descripcion' value="{{$infom->descripcion}}">
		


@if($errors->first('activo')) 
		<i> {{ $errors->first('activo') }} </i> 
		@endif	
	

<label for="terms"><p ">Activo</p>SI<input class="form-control"  type="checkbox" name="activo" id="activo" value="Si" >		
NO<input   type="checkbox" class="form-control" name="activo" id=activo" value="No" ></label>
	





		<br>
		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>



	</form>
</div>
@stop