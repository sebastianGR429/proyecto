<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPartner.php');

$conPartner = new ControladorPartner();
$cod_partner = $_GET['codP'];
$cod_usuario =$_GET['codU'];

$partner=$conPartner->devolverPartner($cod_partner);

?>

<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Solicitud para:<b> <?php echo $partner->getNom_partner()?></b></h3>        
        </div>
        <div class="modal-body px-4">

            <form id="solicitud" method="POST" action="javascript:realizarSolicitud()">
            
                <div class="modal-body px-4">
                    <div>
                    <p>Seleccione el tipo de dominio</p>
                    <select name="tipo" id="tipo" class="form-select" >
                        <option value="Nuevo">Nuevo</option>
                        <option value="Trasferencia">Trasferencia</option>
                        
                    </select>
                    </div>

                    <div>
                    <br>
                    <p>Nombre de dominio</p>
                    <input name="dominio" id="dominio" type="text" class="form__input" autofocus placeholder="Dominio">
                    </div>

                    <br>
                    <?php echo  ("<td><button id='botonReservar' type='submit' class='btn btn-dark' >Enviar</button></td>");?>
                </div>

                <input type="hidden" id="cod_partner" name="cod_partner" value="<?php echo $cod_partner ?>" />
                <input type="hidden" id="cod_usuario" name="cod_usuario" value="<?php echo $cod_usuario ?>" />

            </form>
        </div>
</div>

<script>
    
        function realizarSolicitud() {
            
               
            datos = $('#solicitud').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "agregar_solicitud.php",
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