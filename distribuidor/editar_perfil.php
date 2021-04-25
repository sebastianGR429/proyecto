<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/ControladorUsuario.php');



$datos=array(
    $_POST["cod_cliente"],
    $_POST["cod_usuario"],
    $_POST["nombre_cliente"],
    $_POST["cedula_cliente"],
    $_POST["telefono_cliente"],
    $_POST["tipo_cliente"],
    $_POST["correo_cliente"]       
);

$conUsuario=new ControladorUsuario();
$validacion=$conUsuario->validarContraseña($datos[1],$_POST["contra_act"]);

if(count($validacion)>0)
{
    if($_POST["ver_contra"]==null and $_POST["nueva_contra"]==null)
    {
    $conCliente= new ControladorCliente();
    $cliente=new Cliente($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
    echo($conCliente->actualizarRegistro($cliente));
    }

    else if($_POST["nueva_contra"]!=null or $_POST["ver_contra"]!=null)
    {
        if($_POST["nueva_contra"]==$_POST["ver_contra"])
        {
            $conCliente= new ControladorCliente();
            $cliente=new Cliente($datos[0],$datos[1],$datos[2],$datos[3],$datos[4],$datos[5],$datos[6]);
            $conCliente->actualizarRegistro($cliente);
                        
            $conUsuario=new ControladorUsuario();
            echo($conUsuario->cambiarContraseña($datos[1],$_POST["nueva_contra"]));
        }else{
            echo("La nueva contraseña no coincide con la confirmación");
        }
    }    
}
else{
    echo("Por favor ingrese la contraseña actual para realizar cambios");
}

?>