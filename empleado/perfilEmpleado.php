<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOEmpleado.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 1) {
    header("location: ../index.php");
}
include('Header.php');
include('menuEmpleado.php');

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);
$CEmpleado = new ControladorEmpleado();
$empleado=$CEmpleado->empleado_x_cod_usuario($usuario->getCod_usuario());
?>
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Perfil Empleado Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
								<li class="breadcrumb-item active" aria-current="page">Perfil</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<!-- Checkbox select Datatable End -->
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Datos de perfil</h4>
				</div>
				<div class="pb-20">
					<table class="" style="width:100%">
						<thead>
							<tr>
                                <th >Nombre partner</th>
								<th>Correo</th>
                                <th>Teléfono</th>
							</tr>
						</thead>
					</table>
				</div>
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


</script>