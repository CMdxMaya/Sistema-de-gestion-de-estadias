

  <?php $__env->startSection('contenido'); ?>

<h2 class="h4 text-gray-900 mb-2" > <?php echo e($proceso); ?> </h2>
<br>
<h2 class="h4 text-gray-900 mb-2"> <?php echo e($mensaje); ?> </h2>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>