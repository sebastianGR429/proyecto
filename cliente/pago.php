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

    <div class='container3' style="margin-left: 100px;">
        <div class='window'>
            <div class='order-info'>
            <div class='order-info-content'>
                <h2>Order Summary</h2>
                        <div class='line'></div>
                <table class='order-table'>
                <tbody>
                    <tr>
                    <td><img src='https://dl.dropboxusercontent.com/s/sim84r2xfedj99n/%24_32.JPG' class='full-width'></img>
                    </td>
                    <td>
                        <br> <span class='thin'>Nike</span>
                        <br> Free Run 3.0 Women<br> <span class='thin small'> Color: Grey/Orange, Size: 10.5<br><br></span>
                    </td>

                    </tr>
                    <tr>
                    <td>
                        <div class='price'>$99.95</div>
                    </td>
                    </tr>
                </tbody>

                </table>
                <div class='line'></div>
                <table class='order-table'>
                <tbody>
                    <tr>
                    <td><img src='https://dl.dropboxusercontent.com/s/qbj9tsbvthqq72c/Vintage-20L-Backpack-by-Fj%C3%A4llr%C3%A4ven.jpg' class='full-width'></img>
                    </td>
                    <td>
                        <br> <span class='thin'>Fjällräven</span>
                        <br>Vintage Backpack<br> <span class='thin small'> Color: Olive, Size: 20L</span>
                    </td>
                    </tr>
                    <tr>
                    <td>
                        <div class='price'>$235.95</div>
                    </td>
                    </tr>
                </tbody>
                </table>
                <div class='line'></div>
                <table class='order-table'>
                <tbody>
                    <tr>
                    <td><img src='https://dl.dropboxusercontent.com/s/nbr4koso8dpoggs/6136C1p5FjL._SL1500_.jpg' class='full-width'></img>
                    </td>
                    <td>
                        <br> <span class='thin'>Monobento</span>
                        <br>Double Lunchbox<br> <span class='thin small'> Color: Pink, Size: Medium</span>
                    </td>

                    </tr>
                    <tr>
                    <td>
                        <div class='price'>$25.95</div>
                    </td>
                    </tr>
                </tbody>
                </table>
                <div class='line'></div>
                <div class='total'>
                <span style='float:left;'>
                    <div class='thin dense'>VAT 19%</div>
                    <div class='thin dense'>Delivery</div>
                    TOTAL
                </span>
                <span style='float:right; text-align:right;'>
                    <div class='thin dense'>$68.75</div>
                    <div class='thin dense'>$4.95</div>
                    $435.55
                </span>
                </div>
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
                    <input class='input-field'></input>
                    Titular
                    <input class='input-field'></input>
                    Cedula
                    <input class='input-field'></input>
                    
                    <select class="form-select2" aria-label="Default select example">
                        <option selected>Forma de pago</option>
                        <option value="Mensual">Mensual</option>
                        <option value="Trimestral">Trimestral</option>
                        <option value="Semestral">Semestral</option>
                        <option value="Anual">Anual</option>
                    </select>
                    <button class='pay-btn'>Pagar</button>

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
