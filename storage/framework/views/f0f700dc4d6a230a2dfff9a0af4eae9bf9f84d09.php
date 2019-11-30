	

  <?php $__env->startSection('contenido'); ?>


			
			<form role="form"  class="formulario"  action="<?php echo e(route('guardaproductos')); ?>" method="POST" class="text-center" enctype="multipart/form-data"> 

<div class="form-group">
		<h2 class="h4 text-gray-900 mb-2" > REGISTRO PRODUCTO</h2>
				<?php echo e(csrf_field()); ?>


				<?php if($errors->first('id_producto')): ?>
		        <i> <?php echo e($errors->first('id_producto')); ?> </i>
		        <?php endif; ?> <br>
		       

				<?php if($errors->first('nombrepro')): ?>
		        <i> <?php echo e($errors->first('nombrepro')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				<input type="text" class="form-control form-control-user" placeholder="Nombre"  name="nombrepro" value="<?php echo e(old('nombrepro')); ?>">
				</div>

				<?php if($errors->first('descripcion')): ?>
		        <i> <?php echo e($errors->first('descripcion')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				   <input type="text" class="form-control form-control-user" placeholder="descripcion" name="descripcion" value="<?php echo e(old('descripcion')); ?>">
				</div>


				

				<?php if($errors->first('costo')): ?>
		        <i> <?php echo e($errors->first('costo')); ?> </i>
		        <?php endif; ?> 
		        <div class="form-group">
				 <input type="text" class="form-control form-control-user" placeholder="costo"  name="costo" value="<?php echo e(old('costo')); ?>">
				</div>

	<?php if($errors->first('img')): ?>
		        <i> <?php echo e($errors->first('img')); ?> </i>
		        <?php endif; ?> 
		        

				Selecciona foto: <input class="form-control form-control-user" type="file" name= "img"><br>
				
				


				<select class="form-control input48" name="id_tipodeproducto">
					        <option selected="true" disabled="disabled" >Seleccione Tipo de Producto </option>


				<?php foreach($tipo_de_productos as $cr): ?>

				<option class="form-control" value= '<?php echo e($cr->id_tipodeproducto); ?>'> <?php echo e($cr->nombre); ?> 
				</option>	
					<?php endforeach; ?>
				</select>
			
				<br>


		<input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
		<input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
	</form>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>