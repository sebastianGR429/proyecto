<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Empleado.php');

print_r($_POST);
$datos=array(

    $_POST["nomE"],
    $_POST["telE"],
    $_POST["nivelE"],
    $_POST["cedE"],         
);

$controlador = new ControladorEmpleado();
$empleado = new Empleado(0,0,$datos[0],$datos[1], $datos[2], $datos[3]);

echo($controlador->agregarRegistro($empleado));
?>