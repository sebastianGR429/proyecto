<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/entidades/Solicitud.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorPartner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorDominio.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorUsuario.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorSolicitud.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');

$solicitudE=array(
    $_POST["dominio"],
    $_POST["tipo"],
    $_POST["cod_partner"],
);
$conDominio=new ControladorDominio();
$verificacion=$conDominio->buscarDominioGeneral($solicitudE[0]);
$conPartner=new ControladorPartner();
$partner=$conPartner->devolverPartner($solicitudE[2]);
$conCorreo= new EnviarCorreo();
$conUsuario=new ControladorUsuario();
$usuario=$conUsuario->darUsuarioPorCodigo($_POST["cod_usuario"]);

$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($usuario->getCod_usuario());

$conSoli=new ControladorSolicitud();
    
if($solicitudE[1]=="Nuevo")
{
    if($verificacion)
    {   
        $mensaje="Un cliente desea hospedar su dominio con tu empresa, a continuacion te daremos los datos junto 
        con la información de la solicitud.";    
        $solicitud=new Solicitud(0,$cliente->getCod_cliente(),$solicitudE[2],"Nuevo",$solicitudE[0],"2021-04-24");
        echo($conSoli->agregarRegistro($solicitud));
        $ruta=$conCorreo->crearSolicitud($solicitudE[0],$usuario->getCorreo());
        $conCorreo->enviarSolicitud($partner->getNom_partner(),$partner->getCorreo_partner(),"SOLICITUD DOMINIO NUEVO",
        $mensaje,$ruta);    
    }
    
    else 
    { 
        echo "El dominio a registrar ya se encuentra en uso";
    }
}else
{
        $mensaje="Un cliente desea hospedar su dominio con tu empresa, a continuacion te daremos los datos junto 
        con la información de la solicitud.";    
        $ruta=$conCorreo->crearSolicitud($solicitudE[0],$usuario->getCorreo());
        $conCorreo->enviarSolicitud($partner->getNom_partner(),$partner->getCorreo_partner(),"SOLICITUD TRANSFERENCIA DE DOMINIO",
        $mensaje,$ruta);
        
        $solicitud=new Solicitud(0,$cliente->getCod_cliente(),$solicitudE[2],"Nuevo",$solicitudE[0],"2021-04-24");
        echo($conSoli->agregarRegistro($solicitud));
}

?>