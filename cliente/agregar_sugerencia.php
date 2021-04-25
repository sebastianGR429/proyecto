<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Sugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorUsuario.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorSugerencias.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');



$conUsuario=new ControladorUsuario();
$usuario=$conUsuario->darUsuarioPorCodigo($_POST["codU"]);

$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($usuario->getCod_usuario());

$conSuge=new ControladorSugerencias();
    
if($_POST["des_sugerencia"])
{
    $sugerencia=new Sugerencias(0,$cliente->getCod_cliente(),$_POST["des_sugerencia"],"EN ESPERA","2020/09/20",1,null,1);
    echo ($conSuge->agregarRegistro($sugerencia));
}else
{
 echo "Complete el campo de la descripción.";
}

?>