
<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/Controlador/ControladorEmpleado.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Empleado.php');
print_r($_POST);
$datos=array(
    $_POST["nom_empleado"],
    $_POST["cedula"],
    $_POST["tel_empleado"],      
    $_POST["cod_nivel"],
    $_POST["cod_empleado"],

);

$controlador = new ControladorEmpleado();

echo($controlador->actualizarEmpleado($datos[0],$datos[1],$datos[2],$datos[3],$datos[4]));

?>
