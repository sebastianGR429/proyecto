<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOCliente.php');
$CCliente = new ControladorCliente();
$cliente = $CCliente->listar();
//print_r($cliente);
?>
<div class="modal fade" id="Cliente" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Informacion Cliente</h4>

				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Cerrar</span>
				</button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<p class="statusMsg"></p>
				<form role="form">
					<input type="text" class="form-control" id="cod_cliente" hidden="true" />

					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" class="form-control" id="nom_cliente" />
					</div>
					<div class="form-group">
						<label>Cedula:</label>
						<input class="form-control" id="cedula_cliente"></input>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" class="form-control" id="tel_cliente" />
					</div>
					<div class="form-group">
						<label>Nivel:</label>
						<input class="form-control" id="cod_tipo_cliente" />
					</div>
				</form>
			</div>

			<!-- Modal Footer -->
			
		</div>
	</div>
</div>

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Clientes Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Clientes</a></li>
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
					<h4 class="text-blue h4">Clientes registrados</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>Número de cliente</th>
								<th>Nombre</th>
								<th>Cedula</th>
								<th>Teléfono</th>
								<th>Tipo de usuario</th>
								<th>Dominios</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<?php
						foreach ($cliente as $key) {
						?>
							<tbody>
								<tr>
									<td><?php echo $key['cod_cliente'] ?></td>
									<td><?php echo $key['nom_cliente'] ?></td>
									<td><?php echo $key['cedula_cliente'] ?></td>
									<td><?php echo $key['tel_cliente'] ?>
									<td><?php echo $key['cod_tipo_cliente'] ?>
									<td><?php echo $key['cantidad_dominios'] ?>
									<td>
										<button type="button" class="btn btn-success Cliente">Ver cliente</button>
									</td>
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
	$(document).ready(function() {
		$('.Cliente').on('click', function() {
			$('#Cliente').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			}).get();

			$('#cod_cliente').val(data[0]);
			$('#nom_cliente').val(data[1]);
			$('#cedula_cliente').val(data[2]);
			$('#tel_cliente').val(data[3]);
			$('#cod_tipo_cliente').val(data[4]);
			$('#cantidad_dominios').val(data[5]);

		})
	});
</script>