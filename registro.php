
<!DOCTYPE html>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Inicio- ChibchaWeb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="layout/styles/style.css" rel="stylesheet" type="text/css" media="all">

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
 
    <section class="form-register">
      <h3>Registro de cuenta</h3>
      <div class="sep"></div>
      
      
          <div id="datosP" >
            <td><p>Ingresa tus datos personales.</p></td>
          
            <input class="controls" type="text" name="nombres" id="nombres" placeholder="Nombre completo">
            <input class="controls" type="text" name="apellidos" id="apellidos" placeholder="Cedula">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Telefono">
          </div>
      
          <div id="datosU">
            <p>Crea un perfil.</p>
            <br>
            <input class="controls" type="email" name="correo" id="correo" placeholder="Correo">
            <input class="controls" type="email" name="correo" id="correo" placeholder="Usuario">
            <input class="controls" type="password" name="correo" id="correo" placeholder="Contraseña">
            <input class="controls" type="password" name="correo" id="correo" placeholder="Confirmar Contraseña">
          </div>

          <input class="botons" type="submit" value="Registrar">
          <p><a href="login.php">¿Ya tengo Cuenta?</a></p>
    </section>

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