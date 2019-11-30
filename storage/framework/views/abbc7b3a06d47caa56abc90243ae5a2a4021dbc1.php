


<table class="table table-striped">

    <tr><th>ID Venta</th><th>Fecha</th><th>Reporte</th></tr>
    <?php foreach($entrada as $ent): ?>
        <tr>
            <td><?php echo e($ent->idv); ?></td>
            <td><?php echo e($ent->fecha); ?></td>
            <td><a href="<?php echo e(route('buscre',$ent->idv)); ?>">Ver reporte</a> </td>
        </tr>

    <?php endforeach; ?>

</table>
