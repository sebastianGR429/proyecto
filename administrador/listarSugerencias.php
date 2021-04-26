<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorSugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOSugerencias.php');
$CSuge = new ControladorSugerencias();
$sugerencias = $CSuge->listar2();
?>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dominios Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Sugerencias</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listar</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>




			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Sugerencias realizadas por clientes</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
                                <th>Numero de sugerencia</th>
								<th>Descripcion</th>
                                <th>Estado de sugerencia</th>
                                <th>Fecha de realizacion</th>
								<th>Empleado asignado</th>
								<th>Nivel de sugerencia</th>

							</tr>
						</thead>
						<?php
						foreach ($sugerencias as $key) {
						?>
							<tbody>
								<tr>
									<td><?php echo $key['cod_sugerencia'] ?></td>	
									<td><?php echo $key['descripcion_sugerencia'] ?></td>
									<td><?php echo $key['estado_sugerencia'] ?></td>
									<td><?php echo $key['fecha'] ?>
                                    <td><?php echo $key['cod_empleado'] ?>
									<td><?php echo $key['cod_nivel'] ?>
                                    
								</tr>



							</tbody>
						<?php
						}
						?>
					</table>
				</div>
			</div>
			<!-- Export Datatable End -->
		</div>
	</div>
</div>


<script>
	function estado(cod) {
		window.location.href = 'ac.php?action=' + "estadoEm&" + "codigo=" + cod;
	}
</script>

<script src="TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="TemplateAdministrador/vendors/scripts/process.js"></script>
<script src="TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<!-- buttons for Export datatable -->
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="TemplateAdministrador/vendors/scripts/datatable-setting.js"></script>
<script>
$(document).ready(function(){
	$('.verSugerencia').on('click', function(){
		$('#verSugerencia').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();

			$('#cod_sugerencia').val(data[0]);
			$('#descripcion_sugerencia').val(data[1]);
			$('#estado_sugerencia').val(data[2]);
			$('#fecha').val(data[3]);
			$('#cod_empleado').val(data[4]);
			$('#cod_nivel').val(data[5]);

	})
});
</script>