

  <?php $__env->startSection('contenido'); ?>



	<form class="formulario" action ="<?php echo e(route('guardacliente')); ?>" method = 'POST' align="center">


<div class="form-group">
		<h2 class="h4 text-gray-900 mb-2"> REGISTRO CLIENTE</h2>

		<?php echo e(csrf_field()); ?>


		<?php if($errors->first('id_clientes')): ?>
		<i> <?php echo e($errors->first('id_clientes')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"  placeholder="Password" type = 'text' name = 'id_cliente' id="" value="<?php echo e($idTipAbs); ?>" readonly = 'readonly'>
		<br>



		<?php if($errors->first('nombre')): ?> 
		<i> <?php echo e($errors->first('nombre')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"   placeholder="Enter nombre"  type = 'text' name = 'nombre' value="<?php echo e(old('nombre')); ?>">

		<br>

		<?php if($errors->first('apellido1')): ?> 
		<i> <?php echo e($errors->first('apellido1')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"   placeholder="Enter Apellido Paterno" type = 'text' name = 'apellido1' value="<?php echo e(old('apellido1')); ?>">
				<br>


		<?php if($errors->first('apellido2')): ?> 
		<i> <?php echo e($errors->first('apellido2')); ?> </i> 
		<?php endif; ?>	
	 <input class="form-control form-control-user"  placeholder="Enter Apellido Materno" type = 'text' name = 'apellido2' value="<?php echo e(old('apellido2')); ?>">
	 		<br>


<?php if($errors->first('telefono')): ?> 
		<i> <?php echo e($errors->first('telefono')); ?> </i> 
		<?php endif; ?>	
		 <input class="form-control form-control-user"   placeholder="Enter Telefono" type = 'text' name = 'telefono' value="<?php echo e(old('telefono')); ?>">
		 		<br>

<?php if($errors->first('email')): ?> 
		<i> <?php echo e($errors->first('email')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"   placeholder="Enter Email" type = 'text' name = 'email' value="<?php echo e(old('email')); ?>">
				<br>

<?php if($errors->first('rfc')): ?> 
		<i> <?php echo e($errors->first('rfc')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"   placeholder="Enter RFC" type = 'text' name = 'rfc' value="<?php echo e(old('rfc')); ?>">
				<br>

<?php if($errors->first('calle')): ?> 
		<i> <?php echo e($errors->first('calle')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"  placeholder="Enter Calle" type = 'text' name = 'calle' value="<?php echo e(old('calle')); ?>">
				<br>


		<?php if($errors->first('numero')): ?> 
		<i> <?php echo e($errors->first('numero')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user" "  placeholder="Enter Numero" type = 'text' name = 'numero' value="<?php echo e(old('numero')); ?>">
				<br>

		
			<?php if($errors->first('colonia')): ?> 
		<i> <?php echo e($errors->first('colonia')); ?> </i> 
		<?php endif; ?>	
		<input class="form-control form-control-user"   placeholder="Enter Colonia" type = 'text' name = 'colonia' value="<?php echo e(old('colonia')); ?>">
				<br>

			
		<?php if($errors->first('c_p')): ?> 
		<i> <?php echo e($errors->first('c_p')); ?> </i> 
		<?php endif; ?>	
<input class="form-control form-control-user"   placeholder="Enter CP" type = 'text' name = 'c_p' value="<?php echo e(old('c_p')); ?>">
	
		<br>

			<select class="form-control input48" name="id_estado">


			<?php foreach($estados as $es): ?>
				<option class="form-control form-control-user"  value= "<?php echo e($es->id_estado); ?>"> <?php echo e($es->estado); ?> </option>	
			<?php endforeach; ?>
			</select>
			
		<br>






		<input class="btn btn-primary btn-user btn-block"type = 'submit' value = 'Guardar' >

		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>