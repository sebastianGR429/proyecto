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
include ('Header.php');
include ('menuEmpleado.php');

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);
$CEmpleado = new ControladorEmpleado();
$empleado=$CEmpleado->empleado_x_cod_usuario($usuario->getCod_usuario());
?>

<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-10">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src="TemplateAdministrador/vendors/images/banner-img.png" alt="">
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10 text-capitalize">
							Bienvenido de nuevo Empleado <?php echo $empleado->getNom_empleado()?><div class="weight-600 font-30 text-blue"></div>
						</h4>
						<p class="font-18 max-width-600">Esta es la plataforma Chibcha-Web!</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<?php
include ('Footer.php');
?>