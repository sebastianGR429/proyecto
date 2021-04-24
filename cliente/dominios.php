<!DOCTYPE html>
<html lang="en">
<?php
		 include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');
     include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOClientes_chibcha.php');
     include("head.php");

     $conCC=new ControladorClientes_chibcha();
     $lisCC=$conCC->listar();
?>

<body>

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
                <th>Nom. dominio</th>
                <th>Paquete</th>
                <th>Tipo de dominio</th>
                <th>Fecha de pago</th>
                <th>Plataforma</th>
                <th>Plan de pago</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($lisCC as $i){?>
              <tr>
                <td><?php echo $i["dominio"]?></td>
                <td><?php echo $i["cod_paquete"]?></td>
                <td><?php echo $i["tipo_dominio"]?></td>
                <td><?php echo $i["fecha_pago"]?></td>
                <td><?php echo $i["plataforma"]?></td>
                <td><?php echo $i["plan_pago"]?></td>
              </tr>
						<?php }?>
        </tbody>
    </table>

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
  <script src="../src/tabla.js"></script>

</body>

</html>
