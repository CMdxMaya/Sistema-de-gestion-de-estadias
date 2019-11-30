<!DOCTYPE html>
		<html>
		<head>
			<title>Modifica Producto</title>
		</head>


		<body>
				<center><h1> Modifica Producto</h1></center>

			
			<div align="center" class="row">
	<form action ="{{route('guardaedicionproducto')}}" method = 'POST' align="center">
				{{csrf_field()}}

				@if($errors->first('id_producto'))
		        <i> {{ $errors->first('id_producto') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_producto">Clave:</label>
				<input type="text" placeholder="Clave" name="id_producto" value="{{$infom->id_producto}}" readonly='readonly'><br>
				</div>

				@if($errors->first('nombre'))
		        <i> {{ $errors->first('nombre') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">nombre:</label>
				<input type="text" placeholder="nombre" name="nombre" value="{{$infom->nombre}}"><br>
				</div>

				@if($errors->first('descripcion'))
		        <i> {{ $errors->first('descripcion') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="descripcion">descripcion:</label>
				   <input type="text" placeholder="descripcion" name="descripcion" value="{{$infom->descripcion}}"><br>
				</div>

				@if($errors->first('precio'))
		        <i> {{ $errors->first('precio') }} </i>
		        @endif <br>
		        <div class="form-group"> 
		        	<label for="tipo_de_usuario">Precio:</label>
				<input type="text" placeholder="precio" name="precio" value="{{$infom->precio}}"><br>
				</div>
				<br>
			

				Selecciona Tipo de producto<select name="id_tipo_producto">
					<option value='{{$id_tipo_producto}}'>{{$productos}}</option>
					@foreach($todas as $td)
					<option value='{{$td->id_tipo_producto}}'>{{$td->nombre}}</option>
					@endforeach
				</select>
				<br>

					@if($errors->first('archivo'))
		        <i> {{ $errors->first('archivo') }} </i>
		        @endif <br>
		        

				Selecciona foto: <input type="file" name= "archivo"><br>
				
				<br>
<br>

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
			
		</body>
		</html>

