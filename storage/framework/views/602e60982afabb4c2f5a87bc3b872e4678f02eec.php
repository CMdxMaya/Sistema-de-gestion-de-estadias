

  <?php $__env->startSection('contenido'); ?>





	<form class="formulario" action ="<?php echo e(route('guardaedicioncliente')); ?>" method = 'POST' align="center">
		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('id_cliente')): ?>
		<i> <?php echo e($errors->first('id_cliente')); ?> </i> 
		<?php endif; ?>	<br>

		Clave : <input class="form-control"  type = 'text' name = 'id_cliente' value="<?php echo e($infom->id_cliente); ?>" readonly = 'readonly'>
				<?php if($errors->first('nombre')): ?> 
		<i> <?php echo e($errors->first('nombre')); ?> </i> 
		<?php endif; ?>	<br>
		Descripción del Tipo: <input class="form-control"  type = 'text' name = 'nombre' value="<?php echo e($infom->nombre); ?>">
		
		<?php if($errors->first('apellido1')): ?> 
		<i> <?php echo e($errors->first('apellido1')); ?> </i> 
		<?php endif; ?>	<br>
		Apellido P.: <input type = 'text' class="form-control"  name = 'apellido1' value="<?php echo e($infom->apellido1); ?>">
		
		<?php if($errors->first('apellido2')): ?> 
		<i> <?php echo e($errors->first('apellido2')); ?> </i> 
		<?php endif; ?>	<br>
		Apellido M.: <input type = 'text' class="form-control"  name = 'apellido2' value="<?php echo e($infom->apellido2); ?>">
		
		<?php if($errors->first('telefono')): ?> 
		<i> <?php echo e($errors->first('telefono')); ?> </i> 
		<?php endif; ?>	<br>
		Telefono: <input type = 'text' class="form-control"  name = 'telefono' value="<?php echo e($infom->telefono); ?>">
	
		<?php if($errors->first('email')): ?> 
		<i> <?php echo e($errors->first('email')); ?> </i> 
		<?php endif; ?>	<br>
		Email: <input type = 'text' class="form-control"  name = 'email' value="<?php echo e($infom->email); ?>">
	
		<?php if($errors->first('rfc')): ?> 
		<i> <?php echo e($errors->first('rfc')); ?> </i> 
		<?php endif; ?>	<br>
		RFC: <input type = 'text' class="form-control"  name = 'rfc' value="<?php echo e($infom->rfc); ?>">
		
		<?php if($errors->first('calle')): ?> 
		<i> <?php echo e($errors->first('calle')); ?> </i> 
		<?php endif; ?>	<br>
		Calle: <input type = 'text' class="form-control"  name = 'calle' value="<?php echo e($infom->calle); ?>">
		
		<?php if($errors->first('numero')): ?> 
		<i> <?php echo e($errors->first('numero')); ?> </i> 
		<?php endif; ?>	<br>
		Numero: <input type = 'text' class="form-control"  name = 'numero' value="<?php echo e($infom->numero); ?>">
		

		<?php if($errors->first('colonia')): ?> 
		<i> <?php echo e($errors->first('colonia')); ?> </i> 
		<?php endif; ?>	<br>
		Colonia: <input type = 'text' class="form-control"  name = 'colonia' value="<?php echo e($infom->colonia); ?>">
		

		<?php if($errors->first('c_p')): ?> 
		<i> <?php echo e($errors->first('c_p')); ?> </i> 
		<?php endif; ?>	<br>
		C.P.: <input type = 'text' class="form-control"  name = 'c_p' value="<?php echo e($infom->c_p); ?>">
	
	<br>
			

		Selecciona Tipo de producto<select class="form-control" name="id_estado">
			<option  class="form-control" value='<?php echo e($id_estado); ?>'><?php echo e($estados); ?></option>
				<?php foreach($todas as $td): ?>
				<option class="form-control" value='<?php echo e($td->id_estado); ?>'><?php echo e($td->estado); ?></option>
				<?php endforeach; ?>
				</select>
	<br>

		
	


		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>