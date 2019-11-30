@extends('sistema.principal')

  @section('contenido')



	<form class="formulario" action ="{{route('guardapelicula')}}" method = 'POST' align="center">


<div class="contenedor">
		<h2 class="title"> REGISTRO PELICULA</h2>

		{{csrf_field()}}

		@if($errors->first('id_pelicula'))
		<i> {{ $errors->first('id_pelicula') }} </i> 
		@endif	
		<p class="sub">ID pelicula:</p> <input class="form-control input48" type = 'text' name = 'id_pelicula' id="" value="{{$idTipAbs}}" readonly = 'readonly'>



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	
		<p class="sub">Nombre:</p> <input class="form-control input48" placeholder="Enter nombre"  type = 'text' name = 'nombre' value="{{old('nombre')}}">


		@if($errors->first('genero')) 
		<i> {{ $errors->first('genero') }} </i> 
		@endif	
		<p class="sub">Primer genero:</p> <input class="form-control input48"  placeholder="Enter Apellido Paterno" type = 'text' name = 'genero' value="{{old('genero')}}">

		@if($errors->first('artista')) 
		<i> {{ $errors->first('artista') }} </i> 
		@endif	
		<p class="sub">Primer artista:</p> <input class="form-control input48"  placeholder="Enter Apellido Paterno" type = 'text' name = 'artista' value="{{old('artista')}}">

	
		
<br>
		






		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
@stop