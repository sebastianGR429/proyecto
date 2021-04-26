<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Cliente.php');

print_r($_POST);
$datos=array(

  $_POST["nom_dist"],
  $_POST["ced_dist"],
  $_POST["tel_dist"],
  
);

$controlador = new ControladorCliente();
$cliente = new Cliente(10, 10, $datos[0], $datos[1], $datos[2], $datos[3], $datos[4]);

echo($controlador->agregarRegistro($cliente));
?>