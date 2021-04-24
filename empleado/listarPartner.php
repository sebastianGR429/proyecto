<?php
include('Header.php');
include('menuEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOPartner.php');
$CPartner = new ControladorPartner();
$partner = $CPartner->listar();
?>
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Gestor de Partner Chibcha-web</h4>
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
								<th>Nombre partner</th>
								<th>Correo</th>
                                <th>Teléfono</th>
							</tr>
						</thead>
						<?php
							foreach ($partner as $key) {
						?>
							<tbody>
								<tr> 
									<td> <?php echo $key['nom_partner']?>  </td> 
									<td> <?php echo $key['correo_partner'];?>  </td> 
									<td> <?php echo $key['tel_partner'];?> </td> 
													
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
        cod_cliente = $('#cod_cliente').val();
		desc_escala = $('#desc_escala').val();
		var dataString = 'cod_cliente=' + cod_cliente + '&desc_escala=' + desc_escala;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "escalarSugerencia.php",

            success: function(r) {
                console.log(r);
                if (r == 1) {
                    toastr["error"]("Error al subir autor", "Error :(");
                } else {
                    toastr["success"]("Sugerencia escalada con exito", "Genial");
                    // document.getElementById("formSugerencia").reset();
                }
            }
        });
    }


</script>