<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPartner.php');
$CPartner = new ControladorPartner();
$Partner = $CPartner->listar();
print_r($Partner);
?>
<div class="modal fade" id="verPartner" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Informacion Partner</h4>

				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Cerrar</span>
				</button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<p class="statusMsg"></p>
				<form role="form">
				<input type="text" class="form-control" id="cod_partner" hidden = "true"/>
					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" class="form-control" id="nom_partner" />
					</div>
					<div class="form-group">
						<label>Correo:</label>
						<input class="form-control" id="correo_partner"></input>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" class="form-control" id="tel_partner" />
					</div>
				</form>
			</div>

			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary solucionarBtn" onclick="actualizarPartner()">Actualizar Partner</button>
			</div>
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
							<h4>Partners Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Partners</a></li>
								<li class="breadcrumb-item active" aria-current="page">Listar</li>
							</ol>
						</nav>
					</div>

				</div>
			</div>

			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Partners registrados</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>Número de partner</th>
								<th>Nombre</th>
								<th>Correo</th>
								<th>Teléfono</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<?php
						foreach ($Partner as $key) {
						?>
							<tbody>

								<td><?php echo $key['cod_partner'] ?></td>
								<td><?php echo $key['nom_partner'] ?></td>
								<td><?php echo $key['correo_partner'] ?></td>
								<td><?php echo $key['tel_partner'] ?></td>
								<td>
									<button type="button" class="btn btn-success verPartner">Ver Partner</button>
								</td>


							</tbody>
						<?php
						}
						?>
					</table>
				</div>
			</div>
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
		$('.verPartner').on('click', function() {
			$('#verPartner').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function() {
				return $(this).text();
			}).get();
			$('#cod_partner').val(data[0]);
			$('#nom_partner').val(data[1]);
			$('#correo_partner').val(data[2]);
			$('#tel_partner').val(data[3]);
		})
	});

	function actualizarPartner() {
		cod_partner = $('#cod_partner').val();
		nom_partner = $('#nom_partner').val();
		correo_partner = $('#correo_partner').val();
		tel_partner = $('#tel_partner').val();

		var dataString = '&cod_partner=' + cod_partner + '&nom_partner=' + nom_partner + '&correo_partner=' + correo_partner +'&tel_partner='+ tel_partner;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "actualizarPartner.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    //toastr["error"]("Error al solucionar sugerencia", "Error :(");
                } else {
                    //toastr["success"]("Sugerencia atendida con exíto", "Genial");
                }
            }
        });
    }
</script>