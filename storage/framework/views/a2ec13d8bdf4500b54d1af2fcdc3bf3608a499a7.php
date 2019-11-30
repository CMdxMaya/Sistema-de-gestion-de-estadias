


	

  <?php $__env->startSection('contenido'); ?>
<form class="formulario" action ="<?php echo e(route('guardaedicionm')); ?>" method = 'POST' enctype='multipart/form-data'>
<?php echo e(csrf_field()); ?>


				<?php if($errors->first('id_mesa')): ?>
		        <i> <?php echo e($errors->first('id_mesa')); ?> </i>
		        <?php endif; ?> <br>
		        <div class="form-group">
		        	<label for="id_mesa">Clave:</label>
				<input type="text" placeholder="Clave" class="form-control" name="id_mesa" value="<?php echo e($infom->id_mesa); ?>" readonly='readonly'><br>
				</div>

<?php if($errors->first('id_mesa')): ?>
<i> <?php echo e($errors->first('id_mesa')); ?> </i>
<?php endif; ?> <br>



<?php if($errors->first('numero_de_personas')): ?> 
		<i> <?php echo e($errors->first('numero_de_personas')); ?> </i> 
		<?php endif; ?>	<br>
		Numero de personas: <input type = 'text' class="form-control"  name = 'numero_de_personas' value="<?php echo e($infom->numero_de_personas); ?>">





<br>	Zona<select name="id_zona" class="form-control">
					<option class="form-control" value='<?php echo e($id_zona); ?>'><?php echo e($zonas); ?></option>
					<?php foreach($todas as $td): ?>
					<option class="form-control" value='<?php echo e($td->id_zona); ?>'><?php echo e($td->zona); ?></option>
					<?php endforeach; ?>
				</select>
				<br>
<br>






		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>