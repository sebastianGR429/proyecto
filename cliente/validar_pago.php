<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorDominio.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');
$datos=array(
$_POST["codC"],
$_POST["codP"],
$_POST["plan"],
$_POST["t_dominio"],
$_POST["dominio"],
$_POST["plataforma"]
);

$conDominio=new ControladorDominio();
$verificacion=$conDominio->buscarDominioGeneral($datos[4]);;
$conCC=new ControladorClientes_chibcha();
$tarjeta=$conCC->validarTarjeta($_POST["num_tarjeta"], "");
$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($_POST["codU"]);
$dominios=$cliente->getCantidad_dominios();



if($tarjeta)
{
    if($datos[3]=="Nuevo")
    {

        if($verificacion)
            {   
                $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2010","198.232.12",$datos[5]);
                $conCC->agregarRegistro($clienteCC);
                $dominios=$dominios+1;
                echo($conCliente->actualizarCantDominios($dominios,$datos[0]));
            }
        else 
            { 
                echo "El dominio a registrar ya se encuentra en uso";          
            }
    }else{
        $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2019-09-12","198.123.82",$datos[5]);
        $conCC->agregarRegistro($clienteCC);
        $dominios=$dominios+1;
        echo($conCliente->actualizarCantDominios($dominios,$datos[0]));
    }
}else
{
    echo "Datos de tarjeta invalidos";
}

?>