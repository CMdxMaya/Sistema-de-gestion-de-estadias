@extends('sistema.principal')

  @section('contenido')

	

	<h1 align="center">Modifica TIPO DE PRODUCTO</h1>
	<form   class="formulario"  action ="{{route('guardaediciontipodeproducto')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_tipodeproducto'))
		<i> {{ $errors->first('id_tipodeproducto') }} </i> 
		@endif	<br>

		Clave : <input class="form-control" type = 'text' name = 'id_tipodeproducto' value="{{$infom->id_tipodeproducto}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>

		Nombre: <input class="form-control" type = 'text' name = 'nombre' value="{{$infom->nombre}}">
		<br>
		<br>





		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
@stop