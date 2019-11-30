


<table class="table table-striped">

    <tr><th>ID Venta</th><th>Fecha</th><th>Reporte</th></tr>
    @foreach($entrada as $ent)
        <tr>
            <td>{{$ent->idv}}</td>
            <td>{{$ent->fecha}}</td>
            <td><a href="{{route('buscre',$ent->idv)}}">Ver reporte</a> </td>
        </tr>

    @endforeach

</table>
