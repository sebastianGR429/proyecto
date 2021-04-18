
<!DOCTYPE html>
<html lang="">
<head>
<title>Inicio- ChibchaWeb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="far fa-envelope rgtspace-5"></i> chibchaw@gmail.com</li>
      </ul>
      
    </div>
    <div class="fl_right"> 
      
      <ul class="nospace">
        <li><a href="index.php"><i class="fas fa-home"></i></a></li>
      </ul>      
    </div>
  </div>
</div>
<div class="wrapper row1">
    <?php
		  include("menu.php");
		?>
</div>
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/imagen_inicio.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <article>
      <h3 class="heading">Bienvenido Sebastian Guevara R</h3>
      
      
    </article>
    
  </div>
</div>
<div class="wrapper row2">
  <section id="introblocks" class="hoc container clear"> 
    <ul class="nospace group">
      <li class="one_third first">
        <article><a href="#"><i class="fas fa-hand-peace"></i></a>
          <h6 class="heading underline">Chincha-Platino</h6>
          <p>Exclusivo de CHIBCHA-WEB.</p>
          <hr>
          <p>Calidad certificada ISO 9001.</p>
          <hr>
          <p>20 GB de espacio.</p>
          <hr>
          <p>20 correos corporativos.</p>
          <hr>
          <p>10 Base de Datos MySQL.</p>
          <hr>
          <p>Certificado SSL (https).</p>
          <br>
          <li><a class="btn" href="pago.php">Empieza tu orden</a></li>

        </article>
      </li>
      <li class="one_third">
        <article class="active"><a href="#"><i class="fas fa-microphone"></i></a>
          <h6 class="heading underline">Chibcha-Plata</h6>
          <p>Exclusivo de CHIBCHA-WEB.</p>
          <hr>
          <p>Calidad certificada ISO 9001.</p>
          <hr>
          <p>40 GB de espacio.</p>
          <hr>
          <p>25 correos corporativos.</p>
          <hr>
          <p>12 Base de Datos MySQL.</p>
          <hr>
          <p>Certificado SSL (https).</p>
          
          <br>
          <li><a class="btn" href="pago.php">Empieza tu orden</a></li>
        </article>

      </li>
      <li class="one_third">
        <article><a href="#"><i class="fas fa-moon"></i></a>
          <h6 class="heading underline">Chibcha-Oro</h6>
          <p>Exclusivo de CHIBCHA-WEB.</p>
          <hr>
          <p>Calidad certificada ISO 9001.</p>
          <hr>
          <p>60 GB de espacio.</p>
          <hr>
          <p>30 correos corporativos.</p>
          <hr>
          <p>20 Base de Datos MySQL.</p>
          <hr>
          <p>Certificado SSL (https).</p>
          <br>
          <li><a class="btn" href="pago.php">Empieza tu orden</a></li>
        </article>
      </li>
    </ul>
 
  </section>
</div>



<div class="wrapper row4">
<?php
		  include("footer.php");
		?>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
