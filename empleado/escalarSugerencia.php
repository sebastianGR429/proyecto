
<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/Controlador/ControladorSugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Sugerencias.php');
print_r($_POST);
$datos=array(
    $_POST["cod_sugerencia"],
    $_POST["desc_escala"],
    $_POST["cod_nivel"]        
       
);

$controlador = new ControladorSugerencias();

echo($controlador->escalarSugerencia($datos[0],$datos[1],$datos[2]));

?>
