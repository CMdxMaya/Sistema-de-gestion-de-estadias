

  <?php $__env->startSection('contenido'); ?>

  

<form  class="formulario" action ="<?php echo e(route('guardamesa')); ?>" method = 'POST'  aling="center">
<?php echo e(csrf_field()); ?>


		<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO MESA</h2>
<p class="sub">ID:</p> <input class="form-control" type = 'text' name = 'id_mesa' value="<?php echo e($idms); ?>" readonly = 'readonly'>



<br>


		<?php if($errors->first('numero_de_personas')): ?> 
		<i> <?php echo e($errors->first('numero_de_personas')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user" placeholder="Ingrese Numero de Personas" type = 'text' name = 'numero_de_personas' value="<?php echo e(old('numero_de_personas')); ?>">
		



<?php if($errors->first('id_mesa')): ?>
<i> <?php echo e($errors->first('id_mesa')); ?> </i>
<?php endif; ?> <br>

<select class="form-control form-control-user"  name = 'id_zona'>
						        <option selected="true" disabled="disabled" >Seleccione Zona </option>

<?php foreach($zonas as $cr): ?>
<option  class="form-control form-control-user" id="exampleInputEmail1" placeholder="Enter email" value = '<?php echo e($cr->id_zona); ?>'><?php echo e($cr->zona); ?></option>
<?php endforeach; ?>
      </select>
<br>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>