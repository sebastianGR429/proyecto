<?php
include('Header.php');
include('menuAdmi.php');
?>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>¡Nuevo Distribuidor!</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Distribuidor</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Formulario del distribuidor</h4>
                </div>
                <div class="wizard-content">
                    <form id="agregarE" method="POST" class="tab-wizard wizard-circle wizard">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Distribuidor:</label>
                                    <input type="text" class="form-control" required id="nom_dist" >
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cedula Distribuidor:</label>
                                    <input type="number" class="form-control" required id="ced_dist" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label>Telefono Distribuidor:</label>
                                    <input type="cedula" class="form-control" required id="tel_dist" >
                                </div>
                            </div>
                        </div>                        
                    </form>
                    <div class="row">                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br>
                                    <!-- onclick="agregarCliente()" -->
                                    <button type="submit" onclick="agregarDistribuidor()" class='btn btn-outline-success'>Agregar Empleado</button>
                                </div>
                            </div>
                    </div>
                </div>
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
<!-- buttons for Export datatable -->
<script src="TemplateAdministrador/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="TemplateAdministrador/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->

<script>
   function agregarDistribuidor() {
        
        nom_cliente = $('#nom_dist').val();
        cedula_cliente = $('#ced_dist').val();
        tel_cliente= $('#tel_dist').val();
        
        var dataString =  '&nom_dist=' + nom_cliente + '&ced_dist=' + cedula_cliente +'&tel_dist='+ tel_cliente;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "agregarDistribuidor.php",

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