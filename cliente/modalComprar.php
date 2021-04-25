<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPaquete.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorCliente.php');

$cod_usuario =$_GET['codU'];

$conPaquete = new ControladorPaquete();

$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($_GET["codU"]);

$paquete=$conPaquete->paquetexcod($_GET["codP"]);

?>

<div>
        <div class="modal-header px-4" >
            <h3 class="modal-title" style="align-content:center;"  id="exampleModalCenterTitle">Compra de paquete:<b> <?php echo $paquete->getNom_paquete()?></b></h3>        
        </div>
        <div class="modal-body px-4">

            <form id="paquete" method="POST" action="javascript:realizarCompra()">
            
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
                    <?php echo  ("<td><button id='botonReservar' type='submit' class='btn btn-dark' >Continuarr</button></td>");?>
                </div>

                <input type="hidden" id="cod_paquete" name="cod_paquete" value="<?php echo $paquete->getCod_paquete() ?>" />
                <input type="hidden" id="cod_cliente" name="cod_cliente" value="<?php echo $cliente->getCod_cliente(); ?>" />

            </form>
        </div>
</div>

<script>
    
        function realizarCompra() {
            
               
            datos = $('#paquete').serialize();

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