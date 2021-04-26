<?php
include('Header.php');
include('menuAdmi.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOEmpleado.php');
$CEmpleados = new ControladorEmpleado();
$empleados = $CEmpleados->listar();
?>
<div class="modal fade" id="verEmpleado" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Informacion Empleado</h4>

				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Cerrar</span>
				</button>
			</div>

			<!-- Modal Body -->
			<div class="modal-body">
				<p class="statusMsg"></p>
				<form role="form">
				<input type="text" class="form-control" id="cod_empleado" hidden = "true"/>

					<div class="form-group">
						<label>Nombre:</label>
						<input type="text" class="form-control" id="nom_empleado" />
					</div>
					<div class="form-group">
						<label>Cedula:</label>
						<input class="form-control" id="cedula"></input>
					</div>
					<div class="form-group">
						<label>Telefono:</label>
						<input type="text" class="form-control" id="tel_empleado"/>
					</div>
					<div class="form-group">
						<label>Nivel:</label>
						<select class="form-control"  id="cod_nivel" name="cod_nivel">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
				</form>
			</div>

			<!-- Modal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary solucionarBtn" onclick="actualizarEmpleado()">Actualizar Empleado</button>
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
							<h4>Empleados Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Empleados</a></li>
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
					<h4 class="text-blue h4">Empleados registrados</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>Número de empleado</th>
								<th>Nombre</th>
								<th>Cedula</th>
								<th>Teléfono</th>
								<th>Nivel Empleado</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<?php
						foreach ($empleados as $key) {
						?>
							<tbody>
								<tr>
									<td><?php echo $key['cod_empleado'] ?></td>	
									<td><?php echo $key['nom_empleado'] ?></td>
									<td><?php echo $key['ced_empleado'] ?></td>
									<td><?php echo $key['tel_empleado'] ?>
									<td><?php echo $key['cod_nivel'] ?>
									<td>
										<button type="button" class="btn btn-success verEmpleado">Ver empleado</button>
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
$(document).ready(function(){
	$('.verEmpleado').on('click', function(){
		$('#verEmpleado').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();

			$('#cod_empleado').val(data[0]);
			$('#nom_empleado').val(data[1]);
			$('#cedula').val(data[2]);
			$('#tel_empleado').val(data[3]);
			$('#cod_nivel').val(data[4]);

	})
});
//Actualizar empleado
function actualizarEmpleado() {
		cod_empleado = $('#cod_empleado').val();
		nom_empleado = $('#nom_empleado').val();
		cedula = $('#cedula').val();
		tel_empleado = $('#tel_empleado').val();
		cod_nivel = $('#cod_nivel').val();

		var dataString = 'cod_empleado=' + cod_empleado + '&nom_empleado=' + nom_empleado + '&cedula=' + cedula +'&tel_empleado='+ tel_empleado +'&cod_nivel=' + cod_nivel;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "actualizarEmpleado.php",

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

