<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorDominio.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorComision.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorClientes_chibcha.php');
$datos=array(
$_POST["codC"],
$_POST["codP"],
$_POST["plan"],
$_POST["t_dominio"],
$_POST["dominio"],
$_POST["plataforma"],
$_POST["costo_paquete"]
);

$conDominio=new ControladorDominio();
$verificacion=$conDominio->buscarDominioGeneral($datos[4]);;
$conCliente=new ControladorCliente();
$cliente=$conCliente->darCliente_x_Codusuario($_POST["codU"]);
$dominios=$cliente->getCantidad_dominios();

$conCC=new ControladorClientes_chibcha();
$tarjeta=$conCC->validarTarjeta($_POST["num_tarjeta"], "");
$conCom=new ControladorComision();

//VER CATEGORIA
$categoria=false;
if($cliente->getCantidad_dominios()>100 || $cliente->getCantidad_dominios()==100 )
{
    $categoria=true;
}

if($tarjeta)
{
    if($datos[3]=="Nuevo")
    {

        if($verificacion)
            {   
                if($categoria)
                {
                    //SE REGISTRA EL DOMINIO
                    $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2010","198.232.12",$datos[5]);
                    $conCC->agregarRegistro($clienteCC);
                    //SE REGSITRA LA COMISION
                    $val_com=($datos[6]*15/100);//COMISION PREMIUM
                    $comision=new Comisiones(0,$datos[0],$val_com,"209",$datos[4],$_POST["nom_paquete"]);
                    $conCom->agregarRegistro($comision);
                    //SE ACTUALIZA CANTIDAD DE DOMINIOS
                    $dominios=$dominios+1;
                    echo($conCliente->actualizarCantDominios($dominios,$datos[0]));
                    
                }else{
                    //SE REGISTRA EL DOMINIO
                    $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2010","198.232.12",$datos[5]);
                    $conCC->agregarRegistro($clienteCC);
                    //SE REGSITRA LA COMISION
                    $val_com=($datos[6]*10/100);//COMISION BASICA
                    $comision=new Comisiones(0,$datos[0],$val_com,"209",$datos[4],$_POST["nom_paquete"]);
                    $conCom->agregarRegistro($comision);
                    //SE ACTUALIZA CANTIDAD DE DOMINIOS
                    $dominios=$dominios+1;
                    echo($conCliente->actualizarCantDominios($dominios,$datos[0]));
                }

                //DARLE CATEGORIA
                if($dominios>100 || $dominios==100)
                {
                    $conCliente->actualizarCategoria(3,$datos[0]);
                }
            }
        else 
            { 
                echo "El dominio a registrar ya se encuentra en uso";          
            }
    }else{
        
        if($categoria)
        {
                    //SE REGISTRA EL DOMINIO
                    $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2010","198.232.12",$datos[5]);
                    $conCC->agregarRegistro($clienteCC);
                    //SE REGSITRA LA COMISION
                    $val_com=($datos[6]*15/100);//COMISION PREMIUM
                    $comision=new Comisiones(0,$datos[0],$val_com,"209",$datos[4],$_POST["nom_paquete"]);
                    $conCom->agregarRegistro($comision);
                    //SE ACTUALIZA CANTIDAD DE DOMINIOS
                    $dominios=$dominios+1;
                    echo($conCliente->actualizarCantDominios($dominios,$datos[0]));
        }else{
                    //SE REGISTRA EL DOMINIO
                    $clienteCC=new Clientes_chibcha(0,$datos[0],$datos[1],$datos[2],$datos[3],$datos[4],"2010","198.232.12",$datos[5]);
                    $conCC->agregarRegistro($clienteCC);
                    //SE REGSITRA LA COMISION
                    $val_com=($datos[6]*10/100);//COMISION BASICA
                    $comision=new Comisiones(0,$datos[0],$val_com,"209",$datos[4],$_POST["nom_paquete"]);
                    $conCom->agregarRegistro($comision);
                    //SE ACTUALIZA CANTIDAD DE DOMINIOS
                    $dominios=$dominios+1;
                    echo($conCliente->actualizarCantDominios($dominios,$datos[0]));

        }

        //DARLE CATEGORIA
        if($dominios>100 || $dominios==100)
        {
            $conCliente->actualizarCategoria(3,$datos[0]);
        }
    }
}else
{
    echo "Datos de tarjeta invalidos";
}

?>