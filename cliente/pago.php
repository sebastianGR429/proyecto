<!DOCTYPE html>
<html lang="en">

<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPaquete.php');
session_start();
if (!isset($_SESSION['user'])) {
 header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 3) {
 header("location: ../index.php");
}
include("head.php");

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);
$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($usuario->getCod_usuario());

$conPaquete=new ControladorPaquete();
$paquete=$conPaquete->paquetexcod($_GET["paq"]);


?>


<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <?php
		include("menu.php");
	?>
  
  <main id="main">

    <section id="pricing" class="pricing">
    <form id="factura" method="POST" action="javascript:realizarFactura()">
    <div class='container3' style="margin-left: 100px;">
        <div class='window'>
            <div class='order-info'>
            <div class='order-info-content'>
                <h2>Orden de pago</h2>
                        <div class='line'></div>
                <table class='order-table'>
                <tbody>
                    <tr>
                    <td><img src='pagos/lista.png' class='full-width'></img>
                    </td>
                      <td>
                          
                          <br> <b>Paquete <?php echo $paquete->getNom_paquete()?></b><br>
                          <span class='thin small'>Norma: <?php echo $paquete->getIso()?><br></span>
                          <span class='thin small'>Almacenamiento: <?php echo $paquete->getAlmacenamiento()?><br></span>
                          <span class='thin small'>Motor de BD: <?php echo $paquete->getBd()?><br></span>
                          <span class='thin small'>Corr. institucinales: <?php echo $paquete->getCorreos()?><br></span>
                          <span class='thin small'>Sitios web: <?php echo $paquete->getSitios_web()?><br></span>
                          <span class='thin small'>Cetificación: <?php echo $paquete->getCertificacion()?><br></span>
                      </td>
                    </tr>
                    
                    <tr>
                        
                </tbody>
                </table>
                <br>
                Tipo de dominio:
                    <select class="form-select" aria-label="Default select example" id="t_dominio" name="t_dominio">
                        <option value="Nuevo">Nuevo</option>
                        <option value="Trasferencia">Trasferencia</option>
                    </select>

                Nombre dominio:
                <div class="form__input-group">
                        <input type="text" class="form__input" id="dominio" name="dominio">
                        <div class="form__input-error-message"></div>
                </div>

                Plataforma:
                    <select class="form-select" id="plataforma" name="plataforma" aria-label="Default select example">
                        <option value="Windows">Windows</option>
                        <option value="Unix">Unix</option>
                    </select>    
              </div>
              </div>
                <div class='credit-info2'>
                <div class='credit-info-content2'>
                    <table class='half-input-table'>
                    <tr><td>Please select your card: </td><td><div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                        <div class='dropdown-select'>
                        <ul>
                        <li>Master Card</li>
                        <li>Dinners Club</li>
                        </ul></div>
                        </div>
                    </td></tr>
                    </table>
                    <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
                    Numero de tarjeta
                    <input class='input-field' id="num_tarjeta" name="num_tarjeta"></input>
                    Titular
                    <input class='input-field'></input>
                    Forma de pago
                    <select id="plan" name="plan" class="form-select2" aria-label="Default select example">
                        <option value="Mensual">Mensual</option>
                        <option value="Trimestral">Trimestral</option>
                        <option value="Semestral">Semestral</option>
                        <option value="Anual">Anual</option>
                    </select>
                    <h2>Total a pagar: <?php echo $paquete->getCosto_paquete()?></h2>
                    <input type="hidden" id="codC" name="codC" value="<?php echo $cliente->getCod_cliente() ?>" />
                    <input type="hidden" id="codP" name="codP" value="<?php echo $paquete->getCod_paquete() ?>" />
                    <input type="hidden" id="codU" name="codU" value="<?php echo $usuario->getCod_usuario() ?>" />
                    <button class='pay-btn' type="submit" >Pagar</button>

                </div>

                </div>
            </div>
        </div>
        </form>
    </section><!-- End Pricing Section -->


  </main><!-- End #main -->

  <?php
		include("footer.php");
	?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="pagos/pago.js"></script>
</body>

</html>
<script>
    
        function realizarFactura() {
            
               
            datos = $('#factura').serialize();

                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "validar_pago.php",
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