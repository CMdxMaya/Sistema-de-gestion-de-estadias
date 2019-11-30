


  <?php $__env->startSection('carrito'); ?>

<head>
    <meta charset="utf-8">
    <title>Suma</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body >
<script type="text/javascript">


$(document).ready(function(){



    function trunc (x, posiciones = 0) {
  var s = x.toString()
  var l = s.length
  var $ma = $('#value').val();
  var decimalLength = s.indexOf('.') + 1
  var numStr = s.substr(0, decimalLength + posiciones)
  return Number(numStr)


}

    
    $("#id_tipodeproducto").click(function() {
         $("#id_producto").load('<?php echo e(url('comboca')); ?>' + '?id_tipodeproducto='  +this.options[this.selectedIndex].value) ;
       });
       
       
        $("#id_producto").click(function() {
       $("#detallep").load('<?php echo e(url('detallep')); ?>' + '?id_producto=' + this.options[this.selectedIndex].value) ;
       });
       
       
        $("#cantidad").keyup(function() {
            var existencia;
            var cantidad;
            existencia = parseInt($("#existencia").val());
            cantidad = parseInt($("#cantidad").val());
            if (cantidad>existencia)
            {
           $("#valida").text('No puede comprar mas Productos'); 
           $('#agrega').attr("disabled", true);
            $('#subt').val(0);
            
            }
            else
            {
           $("#valida").text(''); 
           $('#agrega').attr("disabled", false);
              $('#subt').val( $("#costo").val() *  $("#cantidad").val());
            }
            
       
       });
        $("#agrega").click(function() {

		 $("#existencia").val($("#existencia").val()-$("#cantidad").val());	
         $("#carrito").load('<?php echo e(url('carrito')); ?>' + '?' + $(this).closest('form').serialize()) ;
		
       });
       
       
        $("input[name=descuento]").click(function () {
        switch ($('input:radio[name=descuento]:checked').val()) { 
	    case '0': 
          $("#subt").val(parseInt($("#cantidad").val())*parseInt($("#costo").val()));
		break;
		case '10': 
          $("#subt").val(trunc(parseInt($("#cantidad").val())*parseInt($("#costo").val())/1.10,2));
		break;
	    case '30': 
          $("#subt").val(trunc(parseInt($("#cantidad").val())*parseInt($("#costo").val())/1.30,2));
		break;
          }
        });
        
        
});

function show1(){
  document.getElementById('mesadiv').style.display ='none';
}
function show2(){
  document.getElementById('mesadiv').style.display = 'block';
}

 // Muestra el valor de la alineación(align) del elemento con id="div1"



</script>




<form class="formulario">
  <H1 class="h4 text-gray-900 mb-2">Kikos Food Ventas</H1>
<br>
Clave venta <input type = 'text'class="form-control form-control-user" name = 'idv' id= 'idv' value = '<?php echo e($idv); ?>' readonly = 'readonly'>
<br>

    Fecha de venta<input  type = 'date' class="form-control form-control-user"  name = 'fecha' id= 'fecha'>

<br>




                <select class="form-control form-control-user" name = 'id_cliente' id= 'id_cliente'>
                          <option selected="true" disabled="disabled" >Nombre del Cliente </option>

      <?php foreach($clientes as $cli): ?>
      <option value = '<?php echo e($cli->id_cliente); ?>'><?php echo e($cli->nombre); ?> <?php echo e($cli->apellido1); ?> <?php echo e($cli->apellido2); ?></option>
      <?php endforeach; ?>
      

                      </select>
                      
<br>
 <select  class="form-control form-control-user" name = 'id_mesero' id= 'id_mesero'>
                          <option selected="true" disabled="disabled" >Nombre del Mesero </option>

      <?php foreach($empleados as $emple): ?>
      <option value = '<?php echo e($emple->id_empleado); ?>'><?php echo e($emple->nombree); ?> <?php echo e($emple->apellido1); ?> <?php echo e($emple->apellido2); ?></option>
      <?php endforeach; ?>
      
                      </select>

<br>

<div class="h6 text-gray-900 mb-2" align="left">

                      Tipo de pago:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input  type="radio" name="formapago" id="formapago" value="efectivo"> Efectivo
  <input type="radio" name="formapago" id="formapago" value="tarjeta"> Tarjeta

</div>
<br>


<div class="h6 text-gray-900 mb-2" align="left">

    Tipo de orden:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input onclick="show1();" type = 'radio' name = 'tipodeorden' id= 'tipodeorden'value = 'llevar'>LLevar


       <input onclick="show2();" type = 'radio' name = 'tipodeorden' id= 'tipodeorden'value = 'aqui' checked
       >Comer Aqui


    </div>

<br>


    <div id="mesadiv"   >             
    Seleccione Mesa<select  class="form-control form-control-user" name = 'id_mesa' id= 'id_mesa' >


        <option selected="true" disabled="disabled" >Seleccione la Mesa </option>

      <?php foreach($mesas as $mes): ?>
      <option value = '<?php echo e($mes->id_mesa); ?>'><?php echo e($mes->id_mesa); ?></option>
      <?php endforeach; ?>

                </select>
</div>


<br>




<br>

<select  class="form-control form-control-user" name = 'id_tipodeproducto' id= 'id_tipodeproducto'>
		                      <option selected="true" disabled="disabled" >Categoria del Producto </option>

			<?php foreach($tipodeproductos as $tp): ?>
			<option value = '<?php echo e($tp->id_tipodeproducto); ?>'><?php echo e($tp->nombre); ?></option>
			<?php endforeach; ?>
			
		                  </select>
		<br>

<div id='combop'>
<select class="form-control form-control-user" name = 'id_producto' id = 'id_producto'>
                          <option selected="true" disabled="disabled" >Nombre del Producto </option>

                    </select>
</div>
<BR>

<input class="form-control form-control-user" type="text" name="observaciones" id="observaciones" placeholder="Observaciones del Producto"> 
              
<br>
              

<div id='detallep' >
Existencia <input class="form-control form-control-user" type = 'text' name = 'existencia' id='existencia' readonly = 'readonly'>
<br>
Costo <input class="form-control form-control-user" type = 'text' name = 'costo' id= 'costo'readonly= 'readonly'>
<br>
</div>

 <input placeholder="Ingrse la cantidad a comprar" class="form-control form-control-user" type = 'text' name ='cantidad' id = 'cantidad'>
<br>
<div class="h6 text-gray-900 mb-2">Descuento aplicable</div>
<br>
       <input type = 'radio' value = '0' name = 'descuento' id = 'descuento1' checked>0% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type = 'radio' value = '10' name = 'descuento' id = 'descuento2'>10% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type = 'radio' value = '30' name = 'descuento' id = 'descuento3'>30% &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<br><br>
Subtotal<input placeholder="SUBTOTAL" class="form-control form-control-user" type = 'text' name ='subt' id = 'subt' class="subtoc">
<br>
<br>


<div id='valida'>
</div>
<br>
<button  type="button" class="btn btn-success btn-user btn-block" name = "agrega" id="agrega" disabled= 'false'>Agrega Carrito</button>
<script type="text/javascript">
    $(document).ready(function() {
        $('#miboton').click(function() {
            // Recargo la página
            location.reload();
        });
    });
    
</script>
<br>
<input class="btn btn-primary btn-user btn-block" id="miboton" type="button" value="Terminar pedido" />

<br>




<div id='carrito'>

	</div>




</form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>