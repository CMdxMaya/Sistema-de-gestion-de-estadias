	@extends('sistema.principal')

  @section('contenido')

<h2 class="titlea"> MODIFICA USUARIO</h2>
			
	<div align="center" class="row">
	<form class="formulario" action ="{{route('guardaedicionusuario')}}" method = 'POST' align="center">
				{{csrf_field()}}

				@if($errors->first('id_usuario'))
		        <i> {{ $errors->first('id_usuario') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="id_usuario">Clave:</label>
				<input type="text" placeholder="Clave" class="form-control" name="id_usuario" value="{{$infom->id_usuario}}" readonly='readonly'><br>
				</div>


				@if($errors->first('nombre'))
		        <i> {{ $errors->first('nombre') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">Nombre:</label>
				<input type="text" placeholder="Nombre" class="form-control" name="nombre" value="{{$infom->nombre}}"><br>
				</div>

					@if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">Correo:</label>
				<input type="text" placeholder="Correo" class="form-control" name="correo" value="{{$infom->correo}}"><br>
				</div>

				@if($errors->first('login'))
		        <i> {{ $errors->first('login') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="login">login:</label>
				<input type="text" placeholder="login" class="form-control" name="login" value="{{$infom->login}}"><br>
				</div>

				@if($errors->first('password'))
		        <i> {{ $errors->first('password') }} </i>
		        @endif <br>
		        <div class="form-group">
		        	<label for="password">Contraseña:</label>
				   <input type="Password" placeholder="Password" class="form-control" name="password" value="{{$infom->password}}"><br>
				</div>


		
				<select name="tipo_de_usuario" class="form-control"  value="{{$infom->tipo_de_usuario}}">    
 
    <option value="Admin">Admin</option>
    <option value="Usuario_normal">Usuario Normal	</option>
    

</select>
				@if($errors->first('tipo_de_usuario'))
		        <i> {{ $errors->first('tipo_de_usuario') }} </i>
		        @endif 
		        
			

<br>

				<!--<input type="submit" value="Guardar">
				<input type="submit" value="Cancelar">-->
				<button value="Guardar"> Guardar </button>
				<button value="Cancelar"> Cancelar </button>

			</form>
			</div>
			
		@stop