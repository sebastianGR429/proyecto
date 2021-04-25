<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/user_Sesion.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Cliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPaquete.php');


$userSession = new UserSession();
$controladorR=new ControladorRegistro();
$controladorC=new ControladorCliente();

if(isset($_SESSION['user'])){
    $usuario=$controladorR->darUsuario($userSession->getCurrentUser());
    $tipo=$usuario->getCod_tipo_usuario();
    if($tipo==1){
        header('location: empleado/index.php');
    }else if($tipo==2){
        header('location: administrador/index.php');
    }else{
        echo "entra a cliente";
        $cliente=$controladorC->darCliente_x_Codusuario($usuario->getCod_usuario());
        if($cliente->getCod_tipo_cliente()==1)
        {
            echo ("entro a cliente");
            header('location: cliente/index.php');
        }else{
            header('location: distribuidor/index.php');
        }
    }
    include_once 'login.php';
}
include("head.php");

$conPaq=new ControladorPaquete();
$paq1=$conPaq->paquetexcod(1);
$paq2=$conPaq->paquetexcod(2);
$paq3=$conPaq->paquetexcod(3);
?>
<!DOCTYPE html>
<html lang="en">
<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">contacto@chibchaweb.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +57 305 705 4858
      </div>  
    </div>
  </section>

  <?php
		include("menu.php");
	?>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Unete y conoce la verdadera velocidad</h1>
      <h2>Los mejores planes de hosting para ti y tu negocio.</h2>
      <a href="#about" class="btn-get-started scrollto">Conocenos</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>Servidores web en múltiples ubicaciones.</h3>
            <p class="fst-italic">
            El tiempo de implementación de nuevos servidores ronda los 10 minutos. Tenemos un proceso de arranque (bootstrap) totalmente automático: Se oprime el botón de encendido, se conectan los cables de red, se activa la automatización (kickstart, ansible) y el servidor se conecta.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> Todos los datos almacenados tienen protección superior con varios niveles de seguridad anti fallos, RAID-10, y copias de seguridad diarias o semanales.</li>
              <li><i class="bi bi-check-circle"></i> Nos hacemos cargo de mantener lo servidores y la infraestructura completamente operativa. Nuestros ingenieros están siempre alerta en Pageduty y tenemos tiempos de respuesta casi inmediatos frente a incidentes. Y tenemos monitoreo predictivo mediante Prometheus que nos ayuda a prevenir inconvenientes sin que hayan ocurrido.</li> 
            </ul>
            <p>
            Chibcha Web es el mejor servicio de hosting para Colombia con millones de usuarios inteligentes, quienes realmente aman ahorrar sin perder características Premium, es ideal para crear páginas web.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Servicios</span>
          <h2>Servicios</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Facilidad de uso</a></h4>
              <p>Nuestro panel de control es muy amigable con el usuario. Tanto personas con poca experiencia en desarrollo web como avanzados pueden utilizarlo sin inconvenientes.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Velocidad sin igual</a></h4>
              <p>El tiempo de implementación de nuevos servidores ronda los 10 minutos. Tenemos un proceso de arranque (bootstrap) totalmente automático: Se oprime el botón de encendido, se conectan los cables de red, se activa la automatización (kickstart, ansible) y el servidor se conecta.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Hostings Data Centers</a></h4>
              <p>Centros de datos en 7 países: Reino Unido, EEUU, Brasil, Holanda, Singapur, Indonesia y Lituania (próximamente). ofrecemos la latencia más baja con alta confiabilidad gracias a los centros de datos Tier-3 conectados globalmente.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
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

</body>

</html>