
<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Inicio- ChibchaWeb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/login.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/correo.css" rel="stylesheet" type="text/css" media="all">
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
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/imagen_inicio.jpg');">
  <div id="pageintro" class="hoc clear"> 
    
  <div class="container">

<form id="signup">

    <div class="headerL">
    <br>

        <h3>Sign Up</h3>
        
        <p>You want to fill out this form</p>
        
    </div>
    
    <div class="sep"></div>

    <div class="inputs">
    
        <input type="email" placeholder="e-mail" autofocus />
    
        <input type="password" placeholder="Password" />
        
        <a id="submit" href="#">Iniciar sesión</a>
        
        <a href="#miModal">Olvide mi contraseña</a>
            <div id="miModal" class="modal">
            <div class="modal-contenido">
            <a href="#">x</a>
            <h2>Mi primer Modal</h2>
            <p>Este es mi primera ventana modal sin utilizar JavaScript.</p>
            </div>  
</div>
    
    </div>

</form>

</div>
  </div>
</div>

<div class="wrapper row4">
<?php
		  include("footer.php");
		?>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>