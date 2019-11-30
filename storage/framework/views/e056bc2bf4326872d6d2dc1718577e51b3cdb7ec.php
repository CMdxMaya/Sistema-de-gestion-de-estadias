

  <?php $__env->startSection('contenido'); ?>

	<form class="formulario" action ="<?php echo e(route('guardatipodeproducto')); ?>" method = 'POST' align="center">
		<?php echo e(csrf_field()); ?>

		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO TIPO DE PRODUCTOS</h2>

		<?php if($errors->first('id_tipodeproducto')): ?>
		<i> <?php echo e($errors->first('id_tipodeproducto')); ?> </i> 
		<?php endif; ?>	

		<p  class="h6 text-gray-900 mb-2" >Clave:</p> <input class="form-control form-control-user"  type = 'text' name = 'id_tipodeproducto' value="<?php echo e($idTipAbs); ?>" readonly = 'readonly'>
	


		<?php if($errors->first('nombre')): ?> 
		<i> <?php echo e($errors->first('nombre')); ?> </i> 
		<?php endif; ?>	
		<p class="sub"> </p> <input class="form-control form-control-user" placeholder="Nombre de tipo de producto" type = 'text' name = 'nombre' value="<?php echo e(old('nombre')); ?>">

<?php if($errors->first('activo')): ?> 
		<i> <?php echo e($errors->first('activo')); ?> </i> 
		<?php endif; ?>	
	</div>
<label  class="h6 text-gray-900 mb-2"for="terms"><p ">Activo</p>
	SI    <input   type="radio" name="activo" id="activo" value="Si" >		
NO     <input    type="radio" name="activo" id=activo" value="No" >
</label>


<br>
	<input class="btn btn-primary btn-user btn-block"type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>