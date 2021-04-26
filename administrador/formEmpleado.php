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
                    <form id="agregarE" method="POST" class="tab-wizard wizard-circle wizard">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Empleado:</label>
                                    <input type="text" class="form-control" required id="nomE" name="nomE">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefono Empleado:</label>
                                    <input type="number" class="form-control" required id="telE" name="telE">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Nivel Empleado :</label>
                                    <select type="text" class="form-control" required id="nivelE" name="nivelE">
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
                                    <input type="cedula" class="form-control" required id="cedE" name="cedE">
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
                                    <button type="submit" onclick="agregarEmpleado()" class='btn btn-outline-success'>Agregar Empleado</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<script src="TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="TemplateAdministrador/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweet-alert.init.js"></script>

<script>
   function agregarEmpleado() {
        
        nom_empleado = $('#nomE').val();
        cedula = $('#cedE').val();
        tel_empleado = $('#telE').val();
        cod_nivel = $('#nivelE').val();

        var dataString =  '&nomE=' + nom_empleado + '&cedE=' + cedula +'&telE='+ tel_empleado +'&nivelE=' + cod_nivel;
        $.ajax({
            type: "POST",
            data: dataString,
            url: "agregar_empleado.php",

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