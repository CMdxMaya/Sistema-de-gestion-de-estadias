<html>
<body>
<h1>Modifica de maestros</h1>
<br>
<form action ="{{route('guardaedicionm')}}" method = 'POST' enctype='multipart/form-data'>
{{csrf_field()}}

Clave <input type = 'text' name = 'idm' value="{{$maestro->idm}}" readonly = 'readonly'>
<br>
@if($errors->first('idm'))
<i> {{ $errors->first('idm') }} </i>
@endif <br>
Nombre <input type = 'text' name = 'nombre' value="{{$maestro->nombre}}"> 
<br><br>
Edad <input type = 'text' name = 'edad' value="{{$maestro->edad}}">
<br><br>
Correo <input type = 'text' name = 'correo' value="{{$maestro->correo}}">
<br> 
@if($errors->first('correo'))
<i> {{ $errors->first('correo') }} </i>
@endif
 <br>
Codigo Postal <input type = 'text' name = 'cp' value="{{$maestro->cp}}">
<br>

Seleccione carrera<select name = 'idc'>
        <option value = '{{$idc}}'>{{$carrera}}</option>
        @foreach($todasdemas as$td)
        <option value = '{{$td->idc}}'>{{$td->nombre}}</option>
        @endforeach
      </select>
<br>
@if($errors->first('archivo'))
<i> {{ $errors->first('archivo')}}</i>
@endif <br>
<img src = "{{asset('archivos/' ,$maestro->archivo)}}"
height =150 width=150></td></td>
seleccione foto <input type ='file' name = 'archivo'>
<br>

<input type = 'submit' value = 'Guardar'>
</form>
</body>
</html>
