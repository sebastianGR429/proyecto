<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Partner.php');

print_r($_POST);
$datos=array(

    $_POST["nombreP"],
    $_POST["correoP"],
    $_POST["telefonoP"]          
);

$controlador = new ControladorPartner();
$partner = new Partner(10,$datos[0],$datos[1], $datos[2]);

echo($controlador->agregarRegistro($partner));
?>