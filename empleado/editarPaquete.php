
<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/Controlador/ControladorClientes_chibcha.php');
print_r($_POST);
$datos=array(
    $_POST["cod_paquete"],
    $_POST["nom_paquete"],

);

$controlador = new ControladorClientes_chibcha();
//$paquete=new Paquete($datos[0],$datos[1]);

echo($controlador->actualizarRegistro($paquete));

?>
