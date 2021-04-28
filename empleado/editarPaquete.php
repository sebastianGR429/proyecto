
<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/Controlador/ControladorPaquete.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Paquete.php');
print_r($_POST);
$datos=array(
    $_POST["cod_paquete"],
    $_POST["nom_paquete"],
    $_POST["certificacion"],
    $_POST["iso"],        
    $_POST["almacenamiento"],
    $_POST["bd"],
    $_POST["correos"],
    $_POST["sitios_web"],
    $_POST["costo_paquete"]
);

$controlador = new ControladorPaquete();
$paquete=new Paquete($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6],$datos[7],(int)$datos[8]);

echo($controlador->actualizarRegistro($paquete));

?>
