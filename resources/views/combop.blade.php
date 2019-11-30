
@foreach($productos as $pr)

<option value = '{{$pr->id_producto}}'>{{$pr->nombrepro}}</option>
@endforeach
           
		