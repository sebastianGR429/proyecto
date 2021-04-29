<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorClientes_chibcha.php');

$conPartner = new ControladorClientes_chibcha();
$cod_paquete = $_GET['codP'];
?>

<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Actualización de paquete</h3>        
        </div>
        <div class="modal-body px-4">

            <form id="plan" method="POST" action="javascript:actualizarPlan()">
            
                <div class="modal-body px-4">
                    <div>
                    <p>Seleccione el tipo de dominio</p>
                    <select name="paquete" id="paquete" class="form-select" >
                        <option value="1">Chibcha-Platino</option>
                        <option value="2">Chibcha-Plata </option>
                        <option value="3">Chibcha-Oro </option>
                    </select>
                    </div>

                    <br>
                    <?php echo  ("<td><button id='botonReservar' type='submit' class='btn btn-dark' >Actualizar</button></td>");?>
                </div>
                <input type="hidden" id="cod_cliente_c" name="cod_cliente_c" value="<?php echo $cod_paquete ?>" />
            </form>
        </div>
</div>

<script>
    
        function actualizarPlan() {
            datos = $('#plan').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "actualizar_plan.php",
                        success: function(r) {

                            console.log(r);
                            if (r == 1) {
                                
                                // toastr["success"]('Realizando tu solicitud...', "NOTIFICACIÓN");
                                window.location.href = "listarPaquetes.php";
                               
                            } else {
                                
                            }
                        }
                    });

               
        }
    </script>