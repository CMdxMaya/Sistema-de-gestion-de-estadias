

  <?php $__env->startSection('contenido'); ?>

	

	<h1 align="center">Modifica TIPO DE PRODUCTO</h1>
	<form   class="formulario"  action ="<?php echo e(route('guardaediciontipodeproducto')); ?>" method = 'POST' align="center">
		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('id_tipodeproducto')): ?>
		<i> <?php echo e($errors->first('id_tipodeproducto')); ?> </i> 
		<?php endif; ?>	<br>

		Clave : <input class="form-control" type = 'text' name = 'id_tipodeproducto' value="<?php echo e($infom->id_tipodeproducto); ?>" readonly = 'readonly'>
		<br><br>
		<?php if($errors->first('nombre')): ?> 
		<i> <?php echo e($errors->first('nombre')); ?> </i> 
		<?php endif; ?>	<br>

		Nombre: <input class="form-control" type = 'text' name = 'nombre' value="<?php echo e($infom->nombre); ?>">
		<br>
		<br>





		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>