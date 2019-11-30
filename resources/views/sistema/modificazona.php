<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modifica Zona</title>
</head>
<body>
	<h1 align="center">Modifica Zona</h1>
	<form action ="{{route('guardaedicionzona')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_zona'))
		<i> {{ $errors->first('id_zona') }} </i> 
		@endif	<br>

		Clave : <input type = 'text' name = 'id_zona' value="{{$infom->id_zona}}" readonly = 'readonly'>
		<br><br>
		@if($errors->first('zona')) 
		<i> {{ $errors->first('zona') }} </i> 
		@endif	<br>

		Zona: <input type = 'text' name = 'zona' value="{{$infom->zona}}">
		<br>
		<br>


@if($errors->first('descripcion')) 
		<i> {{ $errors->first('descripcion') }} </i> 
		@endif	<br>

		 Descripcion <input type = 'text' name = 'descripcion' value="{{$infom->descripcion}}">
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




		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>