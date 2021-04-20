<!DOCTYPE html>
<html lang="en">

  <?php
		include("head.php");
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
    <div class="container2" style="margin-left: 500px">
        <form class="form" id="login">
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Usuario">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Contraseña">
                <div class="form__input-error-message"></div>
            </div>
            <center><button type="button" class="btn btn-danger">Ingresar</button></center>
            <br><br>
            <p class="form__text">
                <a href="#" class="form__link">Olvidaste tu contraseña?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="./" id="linkCreateAccount">No tienes cuenta? Crea una</a>
            </p>
        </form>
        <form class="form form--hidden" id="createAccount">
            <h1 class="form__title">Crear Cuenta</h1>
            <table>
                <div class="form__message form__message--error"></div>
                <tr>
                    <td>
                    <div class="form__input-group">
                        <input type="text" id="nombre_cliente" class="form__input" autofocus placeholder="Nombre completo">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>

                    <td>
                    <div class="form__input-group">
                        <input type="text" id="cedula_cliente" class="form__input" autofocus placeholder="Cedula">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                </tr>

            </table>
                    
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Telefono">
                        <div class="form__input-error-message"></div>
                    </div>
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Correo">
                        <div class="form__input-error-message"></div>
                    </div>
                    
                    <div class="form__input-group">
                        <input type="text" class="form__input" autofocus placeholder="Usuario">
                        <div class="form__input-error-message"></div>
                    </div>

            <table>
                <tr>
                    <td>
                    <div class="form__input-group">
                        <input type="password" class="form__input" autofocus placeholder="Contraseña">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                    
                    <td>
                    <div class="form__input-group">
                        <input type="password" class="form__input" autofocus placeholder="Confirmar contraseña">
                        <div class="form__input-error-message"></div>
                    </div>
                    </td>
                </tr>
            </table>        
                    
            <center><button type="button" class="btn btn-danger">Registrar</button></center>
            <br><br>
            <p class="form__text">
                <a class="form__link" href="./" id="linkLogin">Ya tienes una cuenta? Ingresar</a>
            </p>
        </form>
    </div>

    </section><!-- End Pricing Section -->


  </main><!-- End #main -->

  <?php
		include("footer.php");
	?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="./src/main.js"></script>
</body>

</html>
