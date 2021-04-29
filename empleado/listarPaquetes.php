<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorClientes_chibcha.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 1) {
    header("location: ../index.php");
}
include('Header.php');
include('menuEmpleado.php');

$CPaquete = new ControladorClientes_chibcha();
$paquete = $CPaquete->listarTodos();
?>
<div class="modal fade" id="verSugerencia" role="dialog">
    <div class="modal-dialog">
            <!-- Modal Footer -->
            <div class="modal-footer">					
				<button type="button" class="btn btn-primary solucionarBtn" onclick="solucionarSugerencia()">Solucionar sugerencia</button>
				<button type="button" name = 'updateSugerencia'class="btn btn-warning escalartBtn" onclick="escalarSugerencia()">Escalar sugerencia</button>
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
							<h4>Gestor de sugerencias Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">sugerencias</a></li>
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
					<h4 class="text-blue h4">Sugerencias registradas</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>fecha de pago</th>
								<th>Cliente</th>
								<th>Paquete</th>
								<th>Plan</th>
								<th>Tipo de dominio</th>
                                <th>Dominio</th>
								<th>Plataforma</th>
								<th>Accion</th>

							</tr>
						</thead>
						<?php
							foreach ($paquete as $key) {
						?>
							<tbody>
								<tr> 
									<td> <?php echo $key['fecha_pago']; ?> </td>
									<td> <?php echo $key['nom_cliente']?> </td> 
									<td> <?php echo $key['nom_paquete']?> </td> 
									<td> <?php echo $key['plan_pago'];?> </td> 
									<td> <?php echo $key['tipo_dominio'];?> </td> 
									<td> <?php echo $key['dominio'];?> </td> 
									<td> <?php echo $key['plataforma']; ?> </td>
									
									<?php echo "<td><button type='button' class='btn btn-dark' onclick='act_plan(" . '"' . $key["cod_cliente_c"] . '"'. ")'>Actualizar</button></td>" ?>
									
								</tr>
							</tbody>
							<?php
							}
							?>
					</table>

					<div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						
							
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- Export Datatable End -->
		</div>
	</div>
</div>

<script src="TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="TemplateAdministrador/vendors/scripts/process.js"></script>

<script src="TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

<!-- buttons for Export datatable -->
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/vfs_fonts.js"></script>
<link rel="stylesheet" href="assetsCliente/plugins/toastr/toastr.min.css"/>
<link rel="stylesheet" href="assetsCliente/plugins/toastr/toastr.min.css"/>

<!-- Datatable Setting js -->
<script src="TemplateAdministrador/vendors/scripts/datatable-setting.js"></script>
<script>
//Funcion para escalar sugerencias
function act_plan(codigoPlan) {
		$('.modal-content').load('modal_plan.php?codP='+codigoPlan) 
		$('#modal11').modal('show');
	}
</script>