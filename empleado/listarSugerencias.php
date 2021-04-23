<?php
include('Header.php');
include('menuEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorSugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOSugerencias.php');
$CSugerencias = new ControladorSugerencias();
$sugerencias = $CSugerencias->listar();
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
                <form role="form">
                    <div class="form-group">
                        <label>Nombre de cliente:</label>
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
				<button type="button" class="btn btn-warning escalartBtn" onclick="escalarSugerencia(<?php ?>)">Escalar sugerencia</button>
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
								<th class="table-plus datatable-nosort">Nombre de cliente</th>
								<th>Descripción</th>
								<th>Estado</th>
                                <th>Fecha</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<?php
							foreach ($sugerencias as $key) {
						?>
							<tbody>
								<tr> 
									<td> <?php echo $key['cod_cliente']?>  </td> 
									<td> <?php echo $key['descripcion_sugerencia'];?>  </td> 
									<td> <?php echo $key['estado_sugerencia'];?> </td> 
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

			$('#cod_cliente').val(data[0]);
			$('#descripcion_sugerencia').val(data[1]);
			$('#estado_sugerencia').val(data[2]);
			$('#fecha').val(data[3]);

	})
});


</script>