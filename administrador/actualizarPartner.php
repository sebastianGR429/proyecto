
<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/Controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Partner.php');
print_r($_POST);
$datos=array(
    $_POST["nom_partner"],
    $_POST["correo_partner"],      
    $_POST["tel_partner"],
    $_POST["cod_partner"]
 
);

$controlador = new ControladorPartner();

echo($controlador->actualizarPartner($datos[0],$datos[1],$datos[2],$datos[3]));

?>