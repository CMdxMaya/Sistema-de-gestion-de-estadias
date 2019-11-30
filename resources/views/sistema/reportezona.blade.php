@extends('sistema.principal')


@section('contenido')
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="{{asset('responsive_table/styles.css')}}"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Empresas</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
                <thead>
                          <tr>
                                <th>Clave</th><th>Empresa</th><th>Descripcion</th><th>Activo</th>
                                @if(Session::get('sesiontipo')=="Admin")
                                <th>Descripciòn</th>@endif	
                          </tr>
                </thead>
  @foreach($zonas as $ab)

  <tr> 
    <td>{{$ab->id_zona}}</td>
    <td>{{$ab->zona}}</td>
    <td>{{$ab->descripcion}}</td>
    <td>{{$ab->activo}}</td>

    <td>

      @if(Session::get('sesiontipo')=="Admin")

      @if($ab->deleted_at=="")
      <a href="{{URL::action('zona@eliminazona1', ['id_zona'=>$ab->id_zona])}}">

        <button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
       

        <a href="{{URL::action('zona@modificazona',['id_zona'=>$ab->id_zona])}}">

          <button type="button" class="btn-sm btn-primary" >
            <span ></span> Editar

          </button></a>


          @else

          <a href="{{URL::action('zona@restaurazona',['id_zona'=>$ab->id_zona])}}">

            <button type="button" class="btn-sm btn-success" >
             <span ></span> Restaurar
           </button></a>
         

           <a href="{{URL::action('zona@eliminazona',['id_zona'=>$ab->id_zona])}}">

            <button type="button" class="btn-sm btn-danger">
             <span ></span> Eliminar 
           </button></a>

           @endif


           @endif


         </td>

      </tr>

     


         @endforeach
           </table>
     </div>
       @stop>