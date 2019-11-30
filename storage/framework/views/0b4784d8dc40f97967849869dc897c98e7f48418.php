

  <?php $__env->startSection('contenido'); ?>

	<form  class="formulario" action ="<?php echo e(route('guardaempleado')); ?>" method = 'POST' align="center">

		<div class="contenedor">
		<h2 class="title"> REGISTRO EMPLEADO</h2>
		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('id_clientes')): ?>
		<i> <?php echo e($errors->first('id_clientes')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Clave:</p> <input class="form-control input48" type = 'text' name = 'id_empleado' value="<?php echo e($idTipAbs); ?>" readonly = 'readonly'>
		



		<?php if($errors->first('nombree')): ?> 
		<i> <?php echo e($errors->first('nombree')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Nombre:</p> <input class="form-control input48" placeholder="Enter Nombre" type = 'text' name = 'nombree' value="<?php echo e(old('nombree')); ?>">
	

		<?php if($errors->first('apellido1')): ?> 
		<i> <?php echo e($errors->first('apellido1')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Apellido P:</p> <input class="form-control input48" placeholder="Enter Apellido Paterno"  type = 'text' name = 'apellido1' value="<?php echo e(old('apellido1')); ?>">
		


		<?php if($errors->first('apellido2')): ?> 
		<i> <?php echo e($errors->first('apellido2')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Apellido M:</p> <input class="form-control input48" placeholder="Enter Apellido Materno" type = 'text' name = 'apellido2' value="<?php echo e(old('apellido2')); ?>">
		


		<?php if($errors->first('puesto')): ?> 
		<i> <?php echo e($errors->first('puesto')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Puesto:</p> <input class="form-control input48" placeholder="Enter Puesto"  type = 'text' name = 'puesto' value="<?php echo e(old('puesto')); ?>">
		


		<?php if($errors->first('telefono')): ?> 
		<i> <?php echo e($errors->first('telefono')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Telefono:</p> <input class="form-control input48" placeholder="Enter Telefono" type = 'text' name = 'telefono' value="<?php echo e(old('telefono')); ?>">
		




		<?php if($errors->first('email')): ?> 
		<i> <?php echo e($errors->first('email')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Email:</p> <input class="form-control input48" placeholder="Enter Email" type = 'text' name = 'email' value="<?php echo e(old('email')); ?>">
	




		<?php if($errors->first('rfc')): ?> 
		<i> <?php echo e($errors->first('rfc')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">RFC:</p> <input class="form-control input48"  placeholder="Enter RFC" type = 'text' name = 'rfc' value="<?php echo e(old('rfc')); ?>">
		



		<?php if($errors->first('calle')): ?> 
		<i> <?php echo e($errors->first('calle')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Calle:</p> <input class="form-control input48"  placeholder="Enter Calle" type = 'text' name = 'calle' value="<?php echo e(old('calle')); ?>">
		




		<?php if($errors->first('numero')): ?> 
		<i> <?php echo e($errors->first('numero')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Numero:</p> <input class="form-control input48" placeholder="Enter Numero" type = 'text' name = 'numero' value="<?php echo e(old('numero')); ?>">
		


		<?php if($errors->first('colonia')): ?> 
		<i> <?php echo e($errors->first('colonia')); ?> </i> 
		<?php endif; ?>	
		<p class="sub">Colonia:</p> <input class="form-control input48" placeholder="Enter Colonia" type = 'text' name = 'colonia' value="<?php echo e(old('colonia')); ?>">
		

		<?php if($errors->first('cp')): ?> 
		<i> <?php echo e($errors->first('cp')); ?> </i> 
		<?php endif; ?>	<br>
		<p class="sub">CP:</p> <input class="form-control input48" placeholder="Enter CP" type = 'text' name = 'cp' value="<?php echo e(old('cp')); ?>">
		


	<label class="sub" for="descripcion">Selecciona Estado</label>
			<select class="form-control input48" name="id_estado">

			<?php foreach($estados as $es): ?>
				<option class="form-control" value= "<?php echo e($es->id_estado); ?>"> <?php echo e($es->estado); ?> </option>	
			<?php endforeach; ?>
			</select>

			<br>

<br>



		<input class="btn btn-primary" type = 'submit' value = 'Guardar'>
		<input class="btn btn-primary" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>