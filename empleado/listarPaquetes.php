<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPaquete.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOPaquete.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 1) {
    header("location: ../index.php");
}
include('Header.php');
include('menuEmpleado.php');

$CPaquete = new ControladorPaquete();
$paquete = $CPaquete->listar();
?>
<div class="modal fade" id="verPaquete" role="dialog">
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
                        <label>Nombre de paquete:</label>
						<input type="text" class="form-control" id="cod_paquete" hidden="true"/>
                        <input type="text" class="form-control" id="nom_paquete" />
                    </div>
                    <div class="form-group">
                        <label >Certificación:</label>
                        <input class="form-control" id="certificacion" ></input>
                    </div>
					<div class="form-group">
                        <label >Iso:</label>
                        <input class="form-control" id="iso" ></input>
                    </div>
                    <div class="form-group">
                        <label >Almacenamiento:</label>
                        <input class="form-control" id="almacenamiento"></input>
                    </div>
					<div class="form-group">
                        <label >Base de datos:</label>
                        <input class="form-control" id="bd"></input>
                    </div>
					<div class="form-group">
                        <label >Correos:</label>
                        <input class="form-control" id="correos"></input>
                    </div>
					<div class="form-group">
                        <label >Sitios web:</label>
                        <input class="form-control" id="sitios_web"></input>
                    </div>
					<div class="form-group">
                        <label >Costo del paquete:</label>
                        <input class="form-control" id="costo_paquete"></input>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">					
				<button type="button" class="btn btn-primary solucionarBtn" onclick="editarPaquete()">Editar paquete</button>
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
							<h4>Gestor de paquetes Chibcha-web</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Partner</a></li>
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
					<h4 class="text-blue h4">Partner registradas</h4>
				</div>
				<div class="pb-20">
					<table class="table hover multiple-select-row data-table-export nowrap">
						<thead>
							<tr>
								<th>Cod paquete</th>
								<th>Nombre paquete</th>
								<th>Certificación</th>
                                <th>Teléfono</th>
                                <th>Almacenamiento</th>
                                <th>Base de datos</th>
                                <th>Correos</th>
                                <th>Sitios Web</th>
                                <th>Costo del paquete</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<?php
							foreach ($paquete as $key) {
								
						?>
							<tbody>
								<tr> 
								
									<td> <?php echo $key['cod_paquete']?>  </td> 
									<td> <?php echo $key['nom_paquete']?>  </td> 
									<td> <?php echo $key['certificacion'];?>  </td> 
									<td> <?php echo $key['iso'];?> </td> 
                                    <td> <?php echo $key['almacenamiento'];?> </td> 
									<td> <?php echo $key['bd'];?> </td> 
									<td> <?php echo $key['correos'];?> </td> 
									<td> <?php echo $key['sitios_web'];?> </td> 
									<td> <?php echo $key['costo_paquete'];?> </td> 
									<td>
										<button type= "button" class="btn btn-success verPaquete">Ver</button>
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
function editarPaquete() {
		cod_paquete = $('#cod_paquete').val();
		nom_paquete = $('#nom_paquete').val();
		certificacion = $('#certificacion').val();
		iso = $('#iso').val();

		almacenamiento = $('#almacenamiento').val();
		bd = $('#bd').val();
		correos = $('#correos').val();
		sitios_web = $('#sitios_web').val();
		costo_paquete = $('#costo_paquete').val();

		var dataString = 'cod_paquete=' + cod_paquete + '&nom_paquete=' + nom_paquete + '&certificacion=' + certificacion+ '&iso=' + iso+ '&almacenamiento=' + almacenamiento+ '&bd=' + bd + '&correos=' + correos+ '&sitios_web=' + sitios_web+ '&costo_paquete=' + costo_paquete;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "editarPaquete.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al al completar accion ", "Error :(");
                } else {
                    toastr["success"]("Paquete editado con exito", "Genial");
                    // document.getElementById("formSugerencia").reset();
                }
            }
        });
    }
	//Funcion par la invocación del modal
$(document).ready(function(){
	$('.verPaquete').on('click', function(){
		$('#verPaquete').modal('show');

			$tr = $(this).closest('tr');

			var data = $tr.children("td").map(function(){
				return $(this).text();
			}).get();
			$('#cod_paquete').val(data[0]);
			$('#nom_paquete').val(data[1]);
			$('#certificacion').val(data[2]);
			$('#iso').val(data[3]);

			$('#almacenamiento').val(data[4]);
			$('#bd').val(data[5]);
			$('#correos').val(data[6]);
			$('#sitios_web').val(data[7]);
			$('#costo_paquete').val(data[8]);

						

	})
});


</script>