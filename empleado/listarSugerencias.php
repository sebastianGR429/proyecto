<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorSugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOSugerencias.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 1) {
    header("location: ../index.php");
}
include("Header.php");
include("MenuEmpleado.php");


$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);

$conEmpleado=new ControladorEmpleado();
$empleado=$conEmpleado->empleado_x_cod_usuario($usuario->getCod_usuario());

$CSugerencias = new ControladorSugerencias();
$sugerencias = $CSugerencias->listar($empleado->getCod_nivel());
print_r($sugerencias);

?>
<div class="modal fade" id="verSugerencia" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
			<h4 class="modal-title" id="myModalLabel">Ver sugerencia</h4>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="formSugerencia">
				<input type="text" class="form-control" id="cod_nivel" hidden="true"/>

                    <div class="form-group">
                        <label>Nombre de cliente:</label>
						<input type="text" class="form-control" id="cod_sugerencia" hidden="true"/>
                        <input type="text" class="form-control" id="cod_cliente" readonly="readonly"/>
                    </div>
                    <div class="form-group">
                        <label >Descripción:</label>
                        <textarea  type="text" class="form-control" id="descripcion_sugerencia" readonly="readonly"></textarea>
                    </div>
                    <div class="form-group">
                        <label >Estado:</label>
                        <input class="form-control" id="estado_sugerencia" readonly="readonly"></input>
                    </div>
					<div class="form-group">
                        <label >Fecha:</label>
                        <input class="form-control" id="fecha" readonly="readonly"></input>
                    </div>
					<hr style="width:50%;text-align:left;margin-left:0">
					<div class="form-group">
                        <label >Descripción escalamiento:</label>
                        <input class="form-control" id="desc_escala"></input>
                    </div>
                </form>
            </div>

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
								<th>Cod Sugerencia</th>
								<th>Cod de cliente</th>
								<th>Descripción</th>
								<th>Estado</th>
								<th>Nivel de la sugerencia</th>
                                <th>Fecha</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<?php
							foreach ($sugerencias as $key) {
						?>
							<tbody>
								<tr> 
									<td> <?php echo $key['cod_sugerencia']?> </td> 
									<td> <?php echo $key['cod_cliente']?> </td> 
									<td> <?php echo $key['descripcion_sugerencia'];?> </td> 
									<td> <?php echo $key['estado_sugerencia'];?> </td> 
									<td> <?php echo $key['cod_nivel'];?> </td> 
									<td> <?php echo $key['fecha']; ?> </td>

									<td>
										<button type= "button" class="btn btn-success verSugerencia">Ver</button>
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
function escalarSugerencia() {
        cod_sugerencia = $('#cod_sugerencia').val();
		desc_escala = $('#desc_escala').val();
		cod_nivel = $('#cod_nivel').val();
		var dataString = 'cod_sugerencia=' + cod_sugerencia + '&desc_escala=' + desc_escala + '&cod_nivel=' + cod_nivel;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "escalarSugerencia.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al escalar sugerencia", "Error :(");
                } else {
                    toastr["success"]("Sugerencia escalada con exito", "Genial");
                }
            }
        });
    }

	function solucionarSugerencia() {
        cod_sugerencia = $('#cod_sugerencia').val();
		desc_escala = $('#desc_escala').val();

		var dataString = 'cod_sugerencia=' + cod_sugerencia + '&desc_escala=' + desc_escala;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "solucionarSugerencia.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al solucionar sugerencia", "Error :(");
                } else {
                    toastr["success"]("Sugerencia atendida con exíto", "Genial");
                }
            }
        });
    }
//Funcion par la invocación del modal
$(document).ready(function(){
	$('.verSugerencia').on('click', function(){
		$('#verSugerencia').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			$('#cod_sugerencia').val(data[0]);
			$('#cod_cliente').val(data[1]);
			$('#descripcion_sugerencia').val(data[2]);
			$('#estado_sugerencia').val(data[3]);
			$('#cod_nivel').val(data[4]);
			$('#fecha').val(data[5]);


	})
});


</script>