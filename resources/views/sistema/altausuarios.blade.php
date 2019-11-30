  @extends('sistema.principal')

  @section('contenido')

			
			<div align="center" >
			<form class="formulario" role="form" action="{{route('guardausuarios')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
				{{csrf_field()}}
				<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2" > REGISTRO USUARIO</h2>

				@if($errors->first('id_usuario'))
		        <i> {{ $errors->first('id_usuario') }} </i>
		        @endif 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Clave" name="id_usuario" value="{{$id_usr}}" readonly='readonly'><br>
				</div>


					@if($errors->first('nombre'))
		        <i> {{ $errors->first('nombre') }} </i>
		        @endif 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Nombre Completo" name="nombre" value="{{old('nombre')}}">
				</div>



					@if($errors->first('correo'))
		        <i> {{ $errors->first('correo') }} </i>
		        @endif 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Correo Electronico" name="correo" value="{{old('correo')}}">
				</div>

				@if($errors->first('login'))
		        <i> {{ $errors->first('login') }} </i>
		        @endif 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Usuario" name="login" value="{{old('login')}}">
				</div>

				@if($errors->first('password'))
		        <i> {{ $errors->first('password') }} </i>
		        @endif 
		       




<form class="pure-form">
    <fieldset>

        <input type="password" class="form-control form-control-user" placeholder="Password" id="password"  name="password" value="{{old('password')}}"> <br>


        <input type="password" class="form-control form-control-user" placeholder="Confirme Password" id="confirm_password"  name="confirm_password" value="{{old('confirm_password')}}"> <br>

       

    </fieldset>
</form>
				

				@if($errors->first('tipo_de_usuario'))
		        <i> {{ $errors->first('tipo_de_usuario') }} </i>
		        @endif 
		        <div class="form-group">


<select name="tipo_de_usuario" class="form-control"  value="{{old('tipo_de_usuario')}}">    
 
 					        <option selected="true" disabled="disabled" >Seleccione Privilegios de Administrador </option>

    <option class="btn btn-primary btn-user btn-block" value="Admin">Admin</option>
    <option class="btn btn-google btn-user btn-block"value="Usuario_Normal">Usuario Normal	</option>
    

</select>

				</div>
				<BR>
			
			
			

	
		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
@stop