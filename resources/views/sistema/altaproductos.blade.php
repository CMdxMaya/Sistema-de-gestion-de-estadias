	@extends('sistema.principal')

  @section('contenido')


			
			<form role="form"  class="formulario"  action="{{route('guardaproductos')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
		<h2 class="h4 text-gray-900 mb-2" > PORFAVOR SUBE EL DOCUMENTO INTEGRADIR SOLICITADO POR TU ACESOR ACADEMICO ESPECIFICANDO NOMBRE Y DESCRIPCION</h2>

<div class="form-group">

				{{csrf_field()}}

				@if($errors->first('id_producto'))
		        <i> {{ $errors->first('id_producto') }} </i>
		        @endif <br>
		       

				@if($errors->first('nombrepro'))
		        <i> {{ $errors->first('nombrepro') }} </i>
		        @endif 
		        <div class="form-group">
				<input type="text" class="form-control form-control-user" placeholder="Nombre del Alumno"  name="nombrepro" value="{{old('nombrepro')}}">
				</div>

				@if($errors->first('descripcion'))
		        <i> {{ $errors->first('descripcion') }} </i>
		        @endif 
		        <div class="form-group">
				   <input type="text" class="form-control form-control-user" placeholder="Descripcion" name="descripcion" value="{{old('descripcion')}}">
				</div>


				

				@if($errors->first('costo'))
		        <i> {{ $errors->first('costo') }} </i>
		        @endif 
		        <div class="form-group">
				 <input type="text" class="form-control form-control-user" placeholder="Matricula del estudiante"  name="costo" value="{{old('costo')}}">
				</div>

	@if($errors->first('img'))
		        <i> {{ $errors->first('img') }} </i>
		        @endif 
		        

				Selecciona foto: <input class="form-control form-control-user" type="file" name= "img"><br>
				
				


				<select class="form-control input48" name="id_tipodeproducto">
					        <option selected="true" disabled="disabled" >Seleccione Tutor Asignado </option>


				@foreach($tipo_de_productos as $cr)

				<option class="form-control" value= '{{$cr->id_tipodeproducto}}'> {{$cr->nombre}} 
				</option>	
					@endforeach
				</select>
			
				<br>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
</div>
</div>
@stop

