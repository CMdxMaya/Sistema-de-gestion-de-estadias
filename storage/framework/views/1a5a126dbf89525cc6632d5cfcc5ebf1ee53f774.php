

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet"/>

		<script type="text/javascript">

$(document).ready(function() {
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="date" placeholder="Buscar'+title+'" />' );

    } );
 
 
    var table = $('#example').DataTable({
"language": {
        date: 'Buscar:',
        "lengthMenu": "Mostrando _MENU_ registros por pagina",
        "zeroRecords": "Sin datos",
        "info": "Mostrando _PAGE_ de _PAGES_",
        "infoEmpty": "Sin registros",
        "infoFiltered": "(filtrados de _MAX_)",
paginate: {
    first: 'Primero',
    previous: 'Anterior',
    next: 'Siguiente',
    last: 'Último',
  }
    }
});
    table.columns().every( function () {
        var that = this;
 
        $( 'date', this.footer() ).on( 'keyup change', function () {
            if ( that.date() !== this.$ma ) {
                that
                    .date( this.$ma )
                    .draw();
            }
        } );
    } );
} );



		</script>




		<h2 class="titlea"> REPORTE DE VENTAS</h2>
        <br>

                <h4 class="titlea"> Ingresa el criterio de ventas</h4>





<table  id="example" border= 1   width="100%" cellspacing="0"border="1">
	<thead>

	<tr>

	<td>ID</td><td>Fecha</td><td>Nombre Cliente</td><td>Nombre Mesero</td><td>Forma de pago</td><td>Opciones</td>


	</tr>	
	</thead>

	<?php foreach($ventas as $ma): ?>
		<tr>

		<td> <?php echo e($ma->idv); ?> </td>
		<td> <?php echo e($ma->fecha); ?> </td>

		<td><?php echo e($ma->nombre); ?></td>
		<td><?php echo e($ma->nombree); ?></td>
		<td  ><?php echo e($ma->formapago); ?></td>
        <th><a href="<?php echo e(URL::action('m_reporteventa@muestraReporJui', ['idv'=>$ma->idv])); ?>"><b style="color:black;">Ver<b></a></th>

	
	
</tr>
<?php endforeach; ?>
</table>
</div>
