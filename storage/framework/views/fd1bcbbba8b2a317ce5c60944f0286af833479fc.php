

  <?php $__env->startSection('contenido'); ?>
		<h2 class="titlea"> REPORTE PRODUCTO</h2>
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

	<tr><th>ID</th><th>Imagen</th><th>Nombre</th><th>Descripcion</th><th>costo</th><th>Tipo de producto</th><!--<<td>ID.Producto</td>--><?php if(Session::get('sesiontipo')=="Admin"): ?>
<th>Opciones</th>
<?php endif; ?></tr>
</thead>


	<?php foreach($productos as $ma): ?>
		<tr><td> <?php echo e($ma->id_producto); ?> </td>
		<td><img src = "<?php echo e(asset('public/archivos/'.$ma->archivo)); ?>" height ="60" width="60"></td>
		<td><?php echo e($ma->nombrepro); ?></td>
		<td><?php echo e($ma->descripcion); ?></td>
		<td><?php echo e($ma->costo); ?></td>
		<td><?php echo e($ma->nombre); ?></td>
	

		<td>	

			<?php if(Session::get('sesiontipo')=="Admin"): ?>

		<?php if($ma->deleted_at==""): ?>
 <a href="<?php echo e(URL::action('c_productos@eliminaproductos1', ['id_producto'=>$ma->id_producto])); ?>">

		<button type="button"class="btn-sm btn-outline-danger" >
          <span ></span>  Eliminar Logico
        </button></a>
<br>
        <br>

				<a href="<?php echo e(URL::action('c_productos@modificaproductos',['id_producto'=>$ma->id_producto])); ?>">
					
		<button type="button" class="btn-sm btn-outline-primary" >
          <span ></span> Editar Registro

        </button></a>
        

        <?php else: ?>

        <a href="<?php echo e(URL::action('c_productos@restauraproductos',['id_producto'=>$ma->id_producto])); ?>">
					
		<button type="button" class="btn-sm btn-success" >
         <span ></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="<?php echo e(URL::action('c_productos@eliminaproductos',['id_producto'=>$ma->id_producto])); ?>">
					
		<button type="button" class="btn-sm btn-danger" >
         <span ></span> Eliminar Permanente <br>
        </button></a>
        
        <?php endif; ?>
                <?php endif; ?>
                </td>
</tr>

	<?php endforeach; ?>
</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>