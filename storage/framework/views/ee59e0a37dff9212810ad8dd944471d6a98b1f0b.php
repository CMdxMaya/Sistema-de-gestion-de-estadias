

<?php $__env->startSection('contenido'); ?>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Mesas</h3>
                            <BR>

    <div class="">
      <table class="table-rwd">
      	<tr>
      		<th>Clave</th><th>Clave de la zona</th><th>Numero de Personas</th>

				<?php if(Session::get('sesiontipo')=="Admin"): ?>

				<th>Accion</th>	
				<?php endif; ?>
			</tr>
		<tr>

			<?php foreach($mesas as $ab): ?>

			<tr><td> <?php echo e($ab->id_mesa); ?> </td>
				<td><?php echo e($ab->zona); ?></td>
				<td><?php echo e($ab->numero_de_personas); ?></td>


				<td>

					<?php if(Session::get('sesiontipo')=="Admin"): ?>

					<?php if($ab->deleted_at==""): ?>

					<a href="<?php echo e(URL::action('curso@eliminamesa1', ['id_mesa'=>$ab->id_mesa])); ?>">

						<button type="button" class="btn-sm btn-outline-danger">
							<span ></span> Desactivar
						</button></a>
						

						<a href="<?php echo e(URL::action('curso@modificam',['id_mesa'=>$ab->id_mesa])); ?>">

							<button type="button" class="btn-sm btn-primary" >
								<span ></span> Editar

							</button></a>
							<?php else: ?>

							<a href="<?php echo e(URL::action('curso@restaurarmesa',['id_mesa'=>$ab->id_mesa])); ?>">

								<button type="button" class="btn-sm btn-success" >
									<span ></span> Restaurar
								</button></a>
							

								<a href="<?php echo e(URL::action('curso@eliminamesa',['id_mesa'=>$ab->id_mesa])); ?>">

									<button type="button" class="btn-sm btn-danger" >
										<span ></span> Eliminar 
									</button></a>

									<?php endif; ?>

									<?php endif; ?>

								</td></tr>

								<?php endforeach; ?>
							</table>
    </div>
  </body>
							<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>