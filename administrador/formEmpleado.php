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
                            <h4>¡Nuevo Empleado!</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Empleado</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agregar</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>

            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <h4 class="text-blue h4">Formulario del empleado</h4>
                </div>
                <div class="wizard-content">
                    <form id="newE" method="POST" action="javascript: agregarEmpleado()" class="tab-wizard wizard-circle wizard">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Empleado:</label>
                                    <input type="text" class="form-control" required id="nomE" name="nombre">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefono Empleado:</label>
                                    <input type="number" class="form-control" required id="telE" name="telefonoE">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Nivel Empleado :</label>
                                    <select type="text" class="form-control" requiredid="nivelE" name="nivelE">
                                        <option value="value2" selected>Seleccione un nivel...</option>
                                        <option value="value1">Nivel 1 (Basico)</option>
                                        <option value="value2">Nivel 2 (Avanzado)</option>
                                        <option value="value3">Nivel 3 (Veterano)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cedula:</label>
                                    <input type="cedula" class="form-control" required id="cedE" name="cedulaE">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <br>
                                    <input type="hidden" class="form-control" required id="" name="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br>
                                    <!-- onclick="agregarCliente()" -->
                                    <button type="submit" class='btn btn-outline-success'>Agregar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
   function agregarEmpleado() {
            
               
            datos = $('#agregarE').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "agregar_empleado.php",
                        success: function(r) {

                            console.log(r);
                            if (r == 1) {
                                
                                // toastr["success"]('Realizando tu solicitud...', "NOTIFICACIÓN");
                                window.location.href = "index.php";
                               
                            } else {
                                
                            }
                        }
                    });

               
        }
</script>
<script src="TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="TemplateAdministrador/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweet-alert.init.js"></script>