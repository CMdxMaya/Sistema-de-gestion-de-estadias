@extends('sistema.principal')

  @section('contenido')



				<center><h1> Modifica Producto</h1></center>

			
			<div align="center" class="row">
	<form  class="formulario" action ="{{route('guardaedicionproducto')}}" method = 'POST' enctype='multipart/form-data' align="center">
				{{csrf_field()}}

				@if($errors->first('id_producto'))
		        <i> {{ $errors->first('id_producto') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_producto">Clave:</label>
				<input type="text" placeholder="Clave" class="form-control" name="id_producto" value="{{$infom->id_producto}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nombrepro'))
		        <i> {{ $errors->first('nombrepro') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">Nombre:</label>
				<input type="text" placeholder="nombre" class="form-control" name="nombrepro" value="{{$infom->nombrepro}}"><br>
				</div>

				@if($errors->first('descripcion'))
		        <i> {{ $errors->first('descripcion') }} </i> 
		        @endif <br>
		        <div class="form-group">
		        	<label for="descripcion">Descripcion:</label>
				   <input type="text" placeholder="descripcion" class="form-control" name="descripcion" value="{{$infom->descripcion}}"><br>
				</div>

				@if($errors->first('precio'))
		        <i> {{ $errors->first('precio') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="tipo_de_usuario">Precio:</label>
				<input type="text" placeholder="precio" class="form-control" name="precio" value="{{$infom->precio}}"><br>
				</div>
				<br>

				@if($errors->first('img'))
		        <i> {{ $errors->first('img') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="tipo_de_usuario"></label>
				<img src="{{asset('public/archivos/'.$infom->archivo)}}" height="150" width="150"><br>
				<input type="file" name="img" class="form-control"><br>
				</div>
				<br>
			

				Selecciona Tipo de producto<select class="form-control" name="id_tipodeproducto">
					<option  class="form-control" value='{{$id_tipodeproducto}}'>{{$tipodeproductos}}</option>
					@foreach($todas as $td)
					<option class="form-control" value='{{$td->id_tipodeproducto}}'>{{$td->nombre}}</option>
					@endforeach
				</select>
				<br>

<br>

		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
@stop