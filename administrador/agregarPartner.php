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
                            <h4>¡Nuevo Partner!</h4>
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
                    <h4 class="text-blue h4">Formulario del partner</h4>
                </div>
                <div class="wizard-content">
                    <form id="newE" method="POST" action="javascript: agregarPartner()" class="tab-wizard wizard-circle wizard">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Partner:</label>
                                    <input type="text" class="form-control" required id="nombreP" name="nombreP">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Correo Partner:</label>
                                    <input type="email" class="form-control" required id="telefonoE" name="correoP">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefono Partner:</label>
                                    <input type="number" class="form-control" required id="telefonoE" name="telefonoE">
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
    function agregarPartner() {
        datos = $('#newE').serialize();

        $.ajax({
            type: "POST",
            data: datos,
            url: "Ac.php?action=" + "AgregarP",
            success: function(r) {

                console.log(r);
                if (r == 3) {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: '¡El correo ya existe!',
                        showConfirmButton: false,
                        timer: 2000
                    })


                } else if (r == 1) {
                    swal({
                        type: 'success',
                        title: '¡Se agregó correctamente!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    document.getElementById("newE").reset();

                } else {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: '¡No se ha podido agregar!',
                        showConfirmButton: false,
                        timer: 2000
                    })
                }
            }
        });
    }
</script>
<<script src="TemplateAdministrador/vendors/scripts/core.js"></script>
<script src="TemplateAdministrador/vendors/scripts/script.min.js"></script>
<script src="TemplateAdministrador/vendors/scripts/layout-settings.js"></script>
<script src="TemplateAdministrador/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweetalert2.all.js"></script>
<script src="TemplateAdministrador/src/plugins/sweetalert2/sweet-alert.init.js"></script>