

  <?php $__env->startSection('contenido'); ?>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >Reporte Empleados</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>

		<tr><th>ID</th><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO</th><th>PUESTO </th><th>TELEFONO </th><th>EMAIL </th><th>CALLE </th><th>NUMERO </th><th>COLONIA </th><th>ESTADO</th><th>CP</th>

<?php if(Session::get('sesiontipo')=="Admin"): ?>

      <th>Accion</th>	

      <?php endif; ?>
		</tr>
	</thead>
		<?php foreach($cli as $ab): ?>

			<tr><td><?php echo e($ab->id_empleado); ?></td>
             <td><?php echo e($ab->nombree); ?></td>
              <td><?php echo e($ab->apellido1); ?></td>
               <td><?php echo e($ab->apellido2); ?></td>
                <td><?php echo e($ab->puesto); ?></td>
                 <td><?php echo e($ab->telefono); ?></td>
                  <td><?php echo e($ab->email); ?></td>
                    <td><?php echo e($ab->calle); ?></td>
                     <td><?php echo e($ab->numero); ?></td>
                      <td><?php echo e($ab->colonia); ?></td>
                       <td><?php echo e($ab->estado); ?></td>
                        <td><?php echo e($ab->cp); ?></td>

<td>
                                <?php if(Session::get('sesiontipo')=="Admin"): ?>

                         
 <?php if($ab->deleted_at==""): ?>
 <a href="<?php echo e(URL::action('controlador_empleados@eliminaempleado1', ['id_empleado'=>$ab->id_empleado])); ?>">

    <button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

        <a href="<?php echo e(URL::action('controlador_empleados@modificaempleado',['id_empleado'=>$ab->id_empleado])); ?>">
          
    <button type="button" class="btn-sm btn-primary">
          <span ></span> Editar

        </button></a>
        

        <?php else: ?>

        <a href="<?php echo e(URL::action('controlador_empleados@restauraempleado',['id_empleado'=>$ab->id_empleado])); ?>">
          
    <button type="button" class="btn-sm btn-success" >
         <span "></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="<?php echo e(URL::action('controlador_empleados@eliminaempleado',['id_empleado'=>$ab->id_empleado])); ?>">
          
    <button type="button" class="btn-sm btn-danger" >
         <span ></span> Eliminar 
        </button></a>
        
        <?php endif; ?>


    <?php endif; ?>

    
  </td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>