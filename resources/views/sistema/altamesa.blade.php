@extends('sistema.principal')

  @section('contenido')

  

<form  class="formulario" action ="{{route('guardamesa')}}" method = 'POST'  aling="center">
{{csrf_field()}}

		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO MESA</h2>
<p class="sub">ID:</p> <input class="form-control" type = 'text' name = 'id_mesa' value="{{$idms}}" readonly = 'readonly'>



<br>


		@if($errors->first('numero_de_personas')) 
		<i> {{ $errors->first('numero_de_personas') }} </i> 
		@endif	
		<input class="form-control form-control-user" placeholder="Ingrese Numero de Personas" type = 'text' name = 'numero_de_personas' value="{{old('numero_de_personas')}}">
		



@if($errors->first('id_mesa'))
<i> {{ $errors->first('id_mesa') }} </i>
@endif <br>

<select class="form-control form-control-user"  name = 'id_zona'>
						        <option selected="true" disabled="disabled" >Seleccione Zona </option>

@foreach($zonas as $cr)
<option  class="form-control form-control-user" id="exampleInputEmail1" placeholder="Enter email" value = '{{$cr->id_zona}}'>{{$cr->zona}}</option>
@endforeach
      </select>
<br>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
@stop