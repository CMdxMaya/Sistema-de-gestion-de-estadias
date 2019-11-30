

  <?php $__env->startSection('contenido'); ?>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Clientes</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
<thead>
		<tr><th>NUMERO DE CLIENTE</th><th>NOMBRE</th><th>APELLIDO MATERNO</th><th>APELLIDO PATERNO</th><th>TELEFONO</th><th>EMAIL</th><th>RFC</th><th>CALLE</th><th>NUMERO</th>	<th>COLONIA</th>	<th>C.P.</th>	<th>Estado</th>

<?php if(Session::get('sesiontipo')=="Admin"): ?>

			<th>Accion</th>			

			<?php endif; ?>
		</tr>
</thead>

		<?php foreach($cli as $ab): ?>
			<tr><td><?php echo e($ab->id_cliente); ?></td><td><?php echo e($ab->nombre); ?></td><td><?php echo e($ab->apellido1); ?></td><td><?php echo e($ab->apellido2); ?></td><td><?php echo e($ab->telefono); ?></td><td><?php echo e($ab->email); ?></td><td><?php echo e($ab->rfc); ?></td><td><?php echo e($ab->calle); ?></td><td><?php echo e($ab->numero); ?></td><td><?php echo e($ab->colonia); ?></td><td><?php echo e($ab->c_p); ?></td><td><?php echo e($ab->estado); ?></td>

				<!--<td><?php echo e($ab->estado); ?></td>-->




			<td>
			<?php if(Session::get('sesiontipo')=="Admin"): ?>
        
			 <?php if($ab->deleted_at==""): ?>
 <a href="<?php echo e(URL::action('controlador_clientes@eliminaclientes1', ['id_cliente'=>$ab->id_cliente])); ?>">

		<button class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

				<a href="<?php echo e(URL::action('controlador_clientes@modificacliente',['id_cliente'=>$ab->id_cliente])); ?>">
					
		<button type="button" class="btn-sm btn-primary">
          <span class=""></span> Editar

        </button></a>
        

        <?php else: ?>

        <a href="<?php echo e(URL::action('controlador_clientes@restauraclientes',['id_cliente'=>$ab->id_cliente])); ?>">
					
		<button type="button" class="btn-sm btn-success">
         <span ></span> Restaurar
        </button></a>
      
           <a href="<?php echo e(URL::action('controlador_clientes@eliminacliente',['id_cliente'=>$ab->id_cliente])); ?>">
					
		<button type="button" class="btn-sm btn-danger">
         <span ></span> Eliminar
        </button></a>
        
        <?php endif; ?>

        <?php endif; ?>

        




			</td></tr>






		<?php endforeach; ?>
		

	</table>
</div>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>