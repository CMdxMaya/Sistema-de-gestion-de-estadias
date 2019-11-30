


  <?php $__env->startSection('contenido'); ?>


  <div class="mon">
<form  class="formulario" action ="<?php echo e(route('guardazona')); ?>" method = 'POST'  aling="center">


		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO ZONA</h2>
<?php echo e(csrf_field()); ?>



<?php if($errors->first('id_zona')): ?>
<i> <?php echo e($errors->first('id_zona')); ?> </i>
<?php endif; ?> 

<input class="form-control form-control-user"  align="center"   type = 'text' name = 'id_zona' value="<?php echo e($idms); ?>" readonly = 'readonly'>

<br>

	<?php if($errors->first('zona')): ?> 
		<i> <?php echo e($errors->first('zona')); ?> </i> 
		<?php endif; ?>

			<input  class="form-control form-control-user" placeholder="Enter Zona" type = 'text' name = 'zona' value="<?php echo e(old('zona')); ?>">
	<br>
	<?php if($errors->first('descripcion')): ?> 
		<i> <?php echo e($errors->first('descripcion')); ?> </i> 
		<?php endif; ?>	
		<input   class="form-control form-control-user" placeholder="Enter Descripcion" type = 'text' name = 'descripcion' value="<?php echo e(old('descripcion')); ?>">
		

			<?php if($errors->first('activo')): ?> 
		<i> <?php echo e($errors->first('activo')); ?> </i> 
		<?php endif; ?>	
	</div>



<label  class="h6 text-gray-900 mb-2"for="terms"><p ">Activo</p>
	SI    <input   type="radio" name="activo" id="activo" value="Si" >		
NO     <input    type="radio" name="activo" id=activo" value="No" >
</label>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>