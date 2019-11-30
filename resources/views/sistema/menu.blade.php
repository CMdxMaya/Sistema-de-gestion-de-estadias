<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registra Clientes</title>
</head>
<body>
	<table border="2" >
		<tr><td><a href="altacliente">ALTA ALTACLIENTE</a></td></tr>
		<tr><td><a href="altaempleado">ALTA EMPLEADO</a></td></tr>
		<tr><td><a href="altamesa">ALTA MESA</a></td></tr>
		<tr><td><a href="altazona">ALTA ZONA</a></td></tr>
		<tr><td><a href="altaproducto">ALTA PRODUCTO</a></td></tr>
		<tr><td><a href="altatipodeproductos">ALTA TIPO DE PRODUCTO</a></td></tr>
		<tr><td><a href="altausuario">ALTA USUARIO</a></td></tr>
	</table>
<table border="2">
		<tr><td><a href="reporteclientes">REPORTE ALTACLIENTE</a></td></tr>
		<tr><td><a href="reporteempleado">REPORTE EMPLEADO</a></td></tr>
		<tr><td><a href="reportemesa">REPORTE MESA</a></td></tr>
		<tr><td><a href="reportezona">REPORTE ZONA</a></td></tr>
		<tr><td><a href="reporteproducto">REPORTE PRODUCTO</a></td></tr>
		<tr><td><a href="reportetipodeproductos">REPORTE TIPO DE PRODUCTO</a></td></tr>
		<tr><td><a href="reporteusuario">REPORTE USUARIO</a></td></tr>
	</table>





	<h1 align="center">Registrar Clientes</h1>
	<form action ="{{route('guardacliente')}}" method = 'POST' align="center">
		{{csrf_field()}}

		@if($errors->first('id_clientes'))
		<i> {{ $errors->first('id_clientes') }} </i> 
		@endif	<br>

		Numero: <input type = 'text' name = 'id_cliente' value="{{$idTipAbs}}" readonly = 'readonly'>
		<br><br>



		@if($errors->first('nombre')) 
		<i> {{ $errors->first('nombre') }} </i> 
		@endif	<br>
		Nombre: <input type = 'text' name = 'nombre' value="{{old('nombre')}}">
		<br>
		<br>

		@if($errors->first('apellido1')) 
		<i> {{ $errors->first('apellido1') }} </i> 
		@endif	<br>
		Primer apellido: <input type = 'text' name = 'apellido1' value="{{old('apellido1')}}">
		<br>
		<br>

		@if($errors->first('apellido2')) 
		<i> {{ $errors->first('apellido2') }} </i> 
		@endif	<br>
		Segundo apellido: <input type = 'text' name = 'apellido2' value="{{old('apellido2')}}">
		<br>
		<br>

@if($errors->first('telefono')) 
		<i> {{ $errors->first('telefono') }} </i> 
		@endif	<br>
		Telefono: <input type = 'text' name = 'telefono' value="{{old('telefono')}}">
		<br>
		<br>
@if($errors->first('email')) 
		<i> {{ $errors->first('email') }} </i> 
		@endif	<br>
		Email: <input type = 'text' name = 'email' value="{{old('email')}}">
		<br>
		<br>
@if($errors->first('rfc')) 
		<i> {{ $errors->first('rfd') }} </i> 
		@endif	<br>
		RFC: <input type = 'text' name = 'rfc' value="{{old('rfc')}}">
		<br>
		<br>
@if($errors->first('calle')) 
		<i> {{ $errors->first('calle') }} </i> 
		@endif	<br>
		Calle: <input type = 'text' name = 'calle' value="{{old('calle')}}">
		<br>
		<br>

		@if($errors->first('numero')) 
		<i> {{ $errors->first('numero') }} </i> 
		@endif	<br>
		Numero: <input type = 'text' name = 'numero' value="{{old('numero')}}">
		<br>
		<br>

			@if($errors->first('colonia')) 
		<i> {{ $errors->first('colonia') }} </i> 
		@endif	<br>
		Colonia: <input type = 'text' name = 'colonia' value="{{old('colonia')}}">
		<br>
		<br>	

		@if($errors->first('c_p')) 
		<i> {{ $errors->first('c_p') }} </i> 
		@endif	<br>
		C.P: <input type = 'text' name = 'c_p' value="{{old('c_p')}}">
		<br>
		<br>

			@if($errors->first('estado')) 
		<i> {{ $errors->first('estado') }} </i> 
		@endif	<br>
		Estado: <input type = 'text' name = 'estado' value="{{old('estado')}}">
		<br>
		<br>






		<input type = 'submit' value = 'Guardar'>
		<input type = 'reset' value = 'Cancelar'>
	</form>
</body>
</html>