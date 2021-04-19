
<!DOCTYPE html>
<html lang="">
<head>
<title>Inicio- ChibchaWeb</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/pago.css" rel="stylesheet" type="text/css" media="all">
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

  <div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>COMPRA DE PAQUETE</h2>


       
       
       
        
        
          
       
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
        <div class='credit-info'>
          <div class='credit-info-content'>
            <table class='half-input-table'>
              Seleccione el tipo de tarjeta:<div class='dropdown' id='card-dropdown'><div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                <ul>
                  <li>Master Card</li>
                  <li>Diners Club</li>
                  </ul></div>
                </div>
               </td></tr>
            </table>
            <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80' class='credit-card-image' id='credit-card-image'></img>
            Numero de tarjeta
            <input class='input-field'></input>
            Titular de la tarjeta
            <input class='input-field'></input>
            
            <table>
              <tr>
                <td> Expires
                  <input class='input-field'></input>
                </td>
                <td>CVC
                  <input class='input-field'></input>
                </td>
              </tr>        
            </table>
            Plan de pago
            <input class='input-field'></input>
            <button class='pay-btn'>Comprar</button>
           

          </div>

        </div>
      </div>
</div>




  </div>
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
<script src="js/pago.js"></script>
</body>
</html>