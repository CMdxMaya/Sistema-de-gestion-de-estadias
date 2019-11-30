

<?php $__env->startSection('contenido'); ?>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Tipo de Productos</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>	

			<tr><td>Clave</td><td>Nombre</td><?php if(Session::get('sesiontipo')=="Admin"): ?>

				<td>Accion</td>	
				<?php endif; ?>
			</tr></thead>
			<?php foreach($TipAb as $ab): ?>

			<tr><td><?php echo e($ab->id_tipodeproducto); ?></td>
				<td><?php echo e($ab->nombre); ?></td>


				<td>
					<?php if(Session::get('sesiontipo')=="Admin"): ?>

					
					<?php if($ab->deleted_at==""): ?>
					<a href="<?php echo e(URL::action('controlador_tipodeproductos@eliminatipodeproducto1', ['id_tipodeproducto'=>$ab->id_tipodeproducto])); ?>">

						<button type="button" class="btn-sm btn-outline-danger">
							<span ></span>  Eliminar Logico
						</button></a>
						<br>
						<br>

						<a href="<?php echo e(URL::action('controlador_tipodeproductos@modificatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])); ?>">
							
							<button type="button" class="btn-sm btn-outline-primary" >
								<span ></span> Editar Registro

							</button></a>
							

							<?php else: ?>

							<a href="<?php echo e(URL::action('controlador_tipodeproductos@restauratipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])); ?>">
								
								<button type="button"  class="btn-sm btn-success">
									<span ></span> Restaurar
								</button></a>
								<br>
								<br>

								<a href="<?php echo e(URL::action('controlador_tipodeproductos@eliminatipodeproducto',['id_tipodeproducto'=>$ab->id_tipodeproducto])); ?>">
									
									<button type="button" class="btn-sm btn-danger" >
										<span ></span> Eliminar <br>Permanentemente
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