
                        
                         <div class="table-responsive">
 <table border= 1 class="table table-bordered"  width="100%" cellspacing="0">

            <tr><td>Clave</td><td>Producto</td><td>Cantidad</td><td>Costo</td><td>Subtotal</td><td>Operaciones</td></Tr>
                
            @foreach($resultado as $res)
            <tr><td>{{$res->id_producto}}</td><td>{{$res->nombrepro}}</td><td>{{$res->cantidad}}</td><td>{{$res->costo}}</td><td>{{$res->subt}}</td>
           <td>
       
            <form action='' method = 'POST' enctype='application/x-www-form-urlencoded' 
name='frmdo{{$res->idvd}}' id='frmdo{{$res->idvd}}' target='_self'>
<input type = 'hidden' value = '{{$res->idvd}}' name = 'idvd' id= 'idvd'>
<input type = 'hidden' value = '{{$res->cantidad}}' name = 'canti' id= 'canti'>
<input type = 'hidden' value = '{{$resultado2->total}}' name = 'total' id= 'total'>

<input type='button'  name='borrar' class='borrar' value='borrar' />
</form>
           
            </td>
</Tr>
           @endforeach
            </tr>
            <tr><td colspan= 5>Subtotal</td><td>{{$resultado2->subtotal}}</td></tr>
            <tr><td colspan= 5>IVA</td><td>{{$resultado2->iva}}</td></tr>
            <tr><td colspan= 5 >Total</td><td>{{$resultado2->total}}</td>
            </tr>
            </table>

        </div>

            <script type="text/javascript">

$(function () {
    $('.borrar').click(
        function () {
            formulario = this.form;
            $("#carrito").load('{{url('borraventas')}}' + '?' + $(this).closest('form').serialize()) ;
        }
    );


});



</script>



<a id="produx" href="#" class="btn btn-warning btn-user btn-block producto"   precio=" " titulo="orden" role="button">REALIZAR PAGO CON TARJETA</a>




  <script src="{{asset('carritocompras/minicart.js')}}"></script>
  <script>

    // configuración inicial del carrito 
    paypal.minicart.render({
    strings:{
      button:'Pagar'
     ,buttonAlt: "Total"
     ,subtotal: 'Total:'
     ,empty: 'No hay productos en el carrito'
    }
    });
    // Eventos para agregar productos al carrito
    
     $('.producto').click(function(e){
         e.stopPropagation();
        paypal.minicart.cart.add({
      business: ' ansnnmsn@gmail.com', // Cuenta paypal para recibir el dinero
      item_name: $(this).attr("titulo"),
       amount: $(this).attr("precio"),
       currency_code: 'MXN',
      
      });
     });



$(document).ready(function()
    {
    //saco el valor accediendo al id del input = nombre
    console.log($("#total").val());

 var subko = $("#total").val();
         // alert(subko);
          $("#produx").attr('precio', subko);
          precio = $("#produx").attr('precio');
          console.log(precio);



});



</script>
<script type="text/javascript"></script>
