<!DOCTYPE html>
<html lang="en">
<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorRegistro.php');
session_start();
  if (!isset($_SESSION['user'])) {
      header("location: ../index.php");
  } else if (!$_SESSION['tipo'] == 3) {
      header("location: ../index.php");
  }

	include("head.php");

  $conPar=new ControladorPartner();
  $lisPar=$conPar->listar();
  $conReg=new ControladorRegistro();
  $usuario=$conReg->darUsuario($_SESSION['user']);
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

    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre de partner</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lisPar as $i){?>
              <tr>
                <td><?php echo $i["nom_partner"]?></td>
                <td><?php echo $i["correo_partner"]?></td>
                <td><?php echo $i["tel_partner"]?></td>
                <?php echo "<td><button type='button' class='btn btn-dark' onclick='soli(" . '"' . $i['cod_partner'] . '",'.'"' . $usuario->getCod_usuario() . '"' . ")'>Solicitar</button></td>" ?>
              </tr>
						<?php }?>
            
        </tbody>
    </table>

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
	function soli(codigoP,codigoU) {
		$('.modal-content').load('modalSolicitud.php?codP='+codigoP+"&codU="+codigoU) 
		$('#modal11').modal('show');
	}
</script>