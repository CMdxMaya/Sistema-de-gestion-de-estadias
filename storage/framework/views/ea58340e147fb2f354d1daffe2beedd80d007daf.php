  

  <?php $__env->startSection('contenido'); ?>

			
			<div align="center" >
			<form class="formulario" role="form" action="<?php echo e(route('guardausuarios')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 
				<?php echo e(csrf_field()); ?>

				<div class="contenedor">
		<h2 class="h4 text-gray-900 mb-2" > REGISTRO USUARIO</h2>

				<?php if($errors->first('id_usuario')): ?>
		        <i> <?php echo e($errors->first('id_usuario')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Clave" name="id_usuario" value="<?php echo e($id_usr); ?>" readonly='readonly'><br>
				</div>


					<?php if($errors->first('nombre')): ?>
		        <i> <?php echo e($errors->first('nombre')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Nombre Completo" name="nombre" value="<?php echo e(old('nombre')); ?>">
				</div>



					<?php if($errors->first('correo')): ?>
		        <i> <?php echo e($errors->first('correo')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Correo Electronico" name="correo" value="<?php echo e(old('correo')); ?>">
				</div>

				<?php if($errors->first('login')): ?>
		        <i> <?php echo e($errors->first('login')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				<input class="form-control form-control-user" type="text" placeholder="Usuario" name="login" value="<?php echo e(old('login')); ?>">
				</div>

				<?php if($errors->first('password')): ?>
		        <i> <?php echo e($errors->first('password')); ?> </i>
		        <?php endif; ?> 
		       




<form class="pure-form">
    <fieldset>

        <input type="password" class="form-control form-control-user" placeholder="Password" id="password"  name="password" value="<?php echo e(old('password')); ?>"> <br>


        <input type="password" class="form-control form-control-user" placeholder="Confirme Password" id="confirm_password"  name="confirm_password" value="<?php echo e(old('confirm_password')); ?>"> <br>

       

    </fieldset>
</form>
				

				<?php if($errors->first('tipo_de_usuario')): ?>
		        <i> <?php echo e($errors->first('tipo_de_usuario')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">


<select name="tipo_de_usuario" class="form-control"  value="<?php echo e(old('tipo_de_usuario')); ?>">    
 
 					        <option selected="true" disabled="disabled" >Seleccione Privilegios de Administrador </option>

    <option class="btn btn-primary btn-user btn-block" value="Admin">Admin</option>
    <option class="btn btn-google btn-user btn-block"value="Usuario_Normal">Usuario Normal	</option>
    

</select>

				</div>
				<BR>
			
			
			

	
		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
	</div>
</form></div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>