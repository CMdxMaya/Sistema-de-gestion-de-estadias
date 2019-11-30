

  <?php $__env->startSection('contenido'); ?>
			<h2 class="titlea"> REPORTE PRODUCTO</h2>
		  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="<?php echo e(asset('responsive_table/styles.css')); ?>"/>
    <title></title>
  </head>
  <body>
    
                            <h3 >USUARIOS DEL SUSTEMA</h3>
                            <BR>

    <div class="table-container">
      <table class="table-rwd">
		<thead>

	<tr><th>ID</th><th>Nombre Completo</th><th>Correo</th><th>Login</th><th>Password</th><th>Tipo de Usuario</th><th>Opciones</th></th>
</thead>
	<?php foreach($usuarios as $ma): ?>
		<tr><td> <?php echo e($ma->id_usuario); ?> </td>
					<td><?php echo e($ma->nombre); ?></td>
		<td><?php echo e($ma->correo); ?></td>

		<td><?php echo e($ma->login); ?></td>
		<td><?php echo e($ma->password); ?></td>
		<td><?php echo e($ma->tipo_de_usuario); ?></td>


<td>

				<?php if(Session::get('sesiontipo')=="Admin"): ?>

		 <?php if($ma->deleted_at==""): ?>
 <a href="<?php echo e(URL::action('c_usuarios@eliminausuarios1', ['id_usuario'=>$ma->id_usuario])); ?>">

		<button type="button" class="btn-sm btn-outline-danger">
          <span ></span>  Desactivar
        </button></a>
<br>
        <br>

				<a href="<?php echo e(URL::action('c_usuarios@modificausuarios',['id_usuario'=>$ma->id_usuario])); ?>">
					
		<button type="button" class="btn-sm btn-primary">
          <span ></span> Editar 

        </button></a>
        

        <?php else: ?>

        <a href="<?php echo e(URL::action('c_usuarios@restaurausuarios',['id_usuario'=>$ma->id_usuario])); ?>">
					
		<button type="button" class="btn-sm btn-success" >
         <span ></span> Restaurar
        </button></a>
        <br>
        <br>

           <a href="<?php echo e(URL::action('c_usuarios@eliminausuarios',['id_usuario'=>$ma->id_usuario])); ?>">
					
		<button type="button" class="btn-sm btn-danger">
         <span ></span> Eliminar 
        </button></a>
        
        <?php endif; ?>
        <?php endif; ?>
	<?php endforeach; ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>