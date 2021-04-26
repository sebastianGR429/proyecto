<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Partner.php');

print_r($_POST);
$datos=array(

    $_POST["nom_partner"],
    $_POST["correo_partner"],
    $_POST["tel_partner"]          
);

$controlador = new ControladorPartner();
$partner = new Partner(10,$datos[0],$datos[1], $datos[2]);

echo($controlador->agregarRegistro($partner));
?>