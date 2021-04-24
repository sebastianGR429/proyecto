<?php
// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorSolicitud.php');
// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Solicitud.php');

// include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorDominio.php');

$solicitud=array(
    $_POST["dominio"],
    $_POST["tipo"],
    $_POST["cod_partner"],
);

$conDominio=new ControladorDominio();
$verificacion=$conDominio->buscarDominioGeneral($solicitud[0]);
$conPartner=new ControladorPartner();
$partner=$conPartner->devolverPartner($solicitud[2]);
$conCorreo= new EnviarCorreo();
    
if($solicitud[1]=="Nuevo")
{
    if($verificacion)
    {   
        $mensaje="Un cliente desea hospedar su dominio con tu empresa, a continuacion te daremos los datos junto 
        con la información de la solicitud.";    
        $ruta=$conCorreo->crearSolicitud($solicitud[0],"sebastianguevararodriguez11@gmail.com");
        ;
    }
    
    else 
    { 
        echo "El dominio a registrar ya se encuentra en uso";
    }
}else
{
    echo "noormal";
}

?>