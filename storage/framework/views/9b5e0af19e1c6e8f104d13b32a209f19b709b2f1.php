


<?php $__env->startSection('contenido'); ?>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Zona</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
                <thead>
                          <tr>
                                <th>Clave</th><th>Zona</th><th>Descripcion</th><th>Activo</th>
                                <?php if(Session::get('sesiontipo')=="Admin"): ?>
                                <th>Descripciòn</th><?php endif; ?>	
                          </tr>
                </thead>
  <?php foreach($zonas as $ab): ?>

  <tr> 
    <td><?php echo e($ab->id_zona); ?></td>
    <td><?php echo e($ab->zona); ?></td>
    <td><?php echo e($ab->descripcion); ?></td>
    <td><?php echo e($ab->activo); ?></td>

    <td>

      <?php if(Session::get('sesiontipo')=="Admin"): ?>

      <?php if($ab->deleted_at==""): ?>
      <a href="<?php echo e(URL::action('zona@eliminazona1', ['id_zona'=>$ab->id_zona])); ?>">

        <button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
       

        <a href="<?php echo e(URL::action('zona@modificazona',['id_zona'=>$ab->id_zona])); ?>">

          <button type="button" class="btn-sm btn-primary" >
            <span ></span> Editar

          </button></a>


          <?php else: ?>

          <a href="<?php echo e(URL::action('zona@restaurazona',['id_zona'=>$ab->id_zona])); ?>">

            <button type="button" class="btn-sm btn-success" >
             <span ></span> Restaurar
           </button></a>
         

           <a href="<?php echo e(URL::action('zona@eliminazona',['id_zona'=>$ab->id_zona])); ?>">

            <button type="button" class="btn-sm btn-danger">
             <span ></span> Eliminar 
           </button></a>

           <?php endif; ?>


           <?php endif; ?>


         </td>

      </tr>

     


         <?php endforeach; ?>
           </table>
     </div>
       <?php $__env->stopSection(); ?>>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>