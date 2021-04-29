<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');

if(isset($_POST["paquete"]))
{
$conCC=new ControladorClientes_chibcha();
echo($conCC->actualizarPaquete($_POST["paquete"],$_POST["cod_cliente_c"]));
}else{
    echo "No se pudo realizar la actualización de paquete";
}

?>