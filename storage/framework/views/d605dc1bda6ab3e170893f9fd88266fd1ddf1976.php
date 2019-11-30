
<?php foreach($productos as $pr): ?>

<option value = '<?php echo e($pr->id_producto); ?>'><?php echo e($pr->nombrepro); ?></option>
<?php endforeach; ?>
           
		