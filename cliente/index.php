<!DOCTYPE html>
<html lang="en">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPaquete.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOPaquete.php');
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../index.php");
} else if (!$_SESSION['tipo'] == 3) {
    header("location: ../index.php");
}

$conPaq=new ControladorPaquete();

$conReg=new ControladorRegistro();
$usuario=$conReg->darUsuario($_SESSION['user']);
$paq1=$conPaq->paquetexcod(1);
$paq2=$conPaq->paquetexcod(2);
$paq3=$conPaq->paquetexcod(3);

$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($usuario->getCod_usuario());


?> 

<?php
		include("head.php");
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
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h2><b>Bienvenido <?php echo $cliente->getNom_cliente() ?></b></h2>
      <h2>Nos encanta tenerte de vuelta en nuestro sitio web.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    
  <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="../assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Hostings</span>
          <h2>Hostings</h2>
          <p>Estos son nuestros paquetes de hosting ofrecidos para ti !.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box"> 
            <h3><?php echo $paq1->getNom_paquete() ?></h3>
              <h4><sup>$</sup><?php echo $paq1->getCosto_paquete() ?><span> / mes</span></h4>
              <ul>
                <li>Norma: <?php echo $paq1->getIso()  ?></li>
                <li>Almacenamiento: <?php echo $paq1->getAlmacenamiento() ?></li>
                <li>Motor de BD: <?php echo $paq1->getBd() ?></li>
                <li>Corr. institucinales: <?php echo $paq1->getCorreos() ?></li>
                <li>Sitios web: <?php echo $paq1->getSitios_web() ?></li>
                <li>Cetificación: <?php echo $paq1->getCertificacion() ?></li>
              </ul>
              <div class="btn-wrap">
              <a <?php echo('href="pago.php?paq='.($paq1->getCod_paquete()).'"'); ?> class="btn btn-danger">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
            <h3><?php echo $paq2->getNom_paquete() ?></h3>
              <h4><sup>$</sup><?php echo $paq2->getCosto_paquete() ?><span> / mes</span></h4>
              <ul>
                <li>Norma: <?php echo $paq2->getIso()  ?></li>
                <li>Almacenamiento: <?php echo $paq2->getAlmacenamiento() ?></li>
                <li>Motor de BD: <?php echo $paq2->getBd() ?></li>
                <li>Corr. institucinales: <?php echo $paq2->getCorreos() ?></li>
                <li>Sitios web: <?php echo $paq2->getSitios_web() ?></li>
                <li>Cetificación: <?php echo $paq2->getCertificacion() ?></li>
              </ul>
              <div class="btn-wrap">
              <a <?php echo('href="pago.php?paq='.($paq2->getCod_paquete()).'"'); ?> class="btn btn-danger">Comprar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3><?php echo $paq3->getNom_paquete() ?></h3>
              <h4><sup>$</sup><?php echo $paq3->getCosto_paquete() ?><span> / mes</span></h4>
              <ul>
                <li>Norma: <?php echo $paq3->getIso()  ?></li>
                <li>Almacenamiento: <?php echo $paq3->getAlmacenamiento() ?></li>
                <li>Motor de BD: <?php echo $paq3->getBd() ?></li>
                <li>Corr. institucinales: <?php echo $paq3->getCorreos() ?></li>
                <li>Sitios web: <?php echo $paq3->getSitios_web() ?></li>
                <li>Cetificación: <?php echo $paq3->getCertificacion() ?></li>
              </ul>
              <div class="btn-wrap">
              <a <?php echo('href="pago.php?paq='.($paq3->getCod_paquete()).'"'); ?> class="btn btn-danger">Comprar</a>
              </div>
              
            </div>
          </div>

        </div>

      </div>
      <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        
              
        </div>
      </div>
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
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>

</html>
<script>
	function comp(codigoP,codigoU) {
		$('.modal-content').load('modalComprar.php?codP='+codigoP+"&codU="+codigoU) 
		$('#modal11').modal('show');
	}
</script>