<!DOCTYPE html>
<html lang="en">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
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
?>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">chibchaw@gmail.com</a>
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
    <div class="container2" style="margin-left: 500px">
        
        <form class="form" id="login">
            
            <h1 class="form__title">Actualizar datos</h1>
            <table>
                <div class="form__message form__message--error"></div>
                <tr>
                    <td>
                    <div class="form__input-group">
                        <input type="text" name="nombre_cliente" id="nombre_cliente" class="form__input" autofocus placeholder="Nombre completo" 
                        value="<?php echo $cliente->getNom_cliente()?>">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>

                    <td>
                    <div class="form__input-group">
                        <input type="text" id="cedula_cliente" name="cedula_cliente" class="form__input" autofocus placeholder="Cedula" 
                        value="<?php echo $cliente->getCedula_cliente()?>" readonly>
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                </tr>

            </table>
                    
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Telefono" id="telefono_cliente" name="nombre_cliente"
                        value="<?php echo $cliente->getTel_cliente()?>">
                        <div class="form__input-error-message"></div>
                    </div>
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Correo" id="correo_cliente" name="nombre_cliente"
                        value="<?php echo $usuario->getCorreo()?>" readonly>
                        <div class="form__input-error-message"></div>
                    </div>
                    
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Usuario" id="usuario_cliente" name="usuario_cliente"
                        value="<?php echo $usuario->getNom_usuario()?>" readonly>
                        <div class="form__input-error-message"></div>
                    </div>

            <table>
                <tr>
                    <td>
                    <div class="form__input-group">
                        <input type="password" class="form__input" autofocus placeholder="Contraseña" id="contra_cliente" name="contra_cliente">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                    
                    <td>
                    <div class="form__input-group">
                        <input type="password" class="form__input" autofocus placeholder="Confirmar contraseña" id="ver_contra" name="ver_contra">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                </tr>
            </table>        
                    
            <center><button type="button" class="btn btn-danger">Actualizar</button></center>
            <br><br>
            
        </form>
    </div>

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

  <script src="./src/main.js"></script>
</body>

</html>