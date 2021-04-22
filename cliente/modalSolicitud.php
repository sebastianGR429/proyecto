<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPartner.php');

$conPartner = new ControladorPartner();
$cod_partner = $_GET['codP'];
$partner=$conPartner->devolverPartner($cod_partner);

?>

<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Solicitud para:<b> <?php echo $partner->getNom_partner()?></b></h3>        
        </div>
        <div class="modal-body px-4">

            <form id="solicitud" method="POST" action="javascript:agregarReserva()">
            
                <div class="modal-body px-4">
                    <div>
                        

                    </div>
                </div>

                <input type="hidden" id="correoPartner" name="correoPartner" value="<?php echo $partner->getCorreo_partner()?>" />

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
                                toastr["success"]('Realizando tu solicitud...', "NOTIFICACIÓN");
                                window.location.href = "reservasF.php";
                            } else {
                                toastr["success"]("No se pudo realizar tu solicitud", "ERROR");
                            }
                        }
                    });

               
        }
    </script>