<?php
// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorSolicitud.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Solicitud.php');

// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Clientes_chibcha.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorDominio.php');

$solicitud=array(
    $_POST["dominio"],
    $_POST["tipo"],
    $_POST["cod_partner"],
);

$conDominio=new ControladorDominio();
$verificacion=$conDominio->buscarDominioGeneral($solicitud[0]);
    if($verificacion==1)
    {   
        
        echo 1;

    }
    
    else 
    { 

    }

?>