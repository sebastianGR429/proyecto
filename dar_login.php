<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/user_Sesion.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorRegistro.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/ControladorCliente.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Cliente.php');


$userSession = new UserSession();
$controladorR=new ControladorRegistro();
$controladorC=new ControladorCliente();

 if(isset($_POST["username"]))




if(isset($_POST['username']) && isset($_POST['password'])){
$usu=$controladorR->darUsuario($_POST['username']);

if($usu!=null){
    verificarIngresoUsuario($usu);

}else{
    $errorEntrada="No existe un usuario con ese correo, Puedes registrarte y empezar a usar nuestros servicios";
    header('location: login.php?respuesta='.$errorEntrada);
}
}
function verificarIngresoUsuario(Usuario $usuario){
    global $errorEntrada,$userSession,$mostrarCodigo;
    $controladorC=new ControladorCliente();
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $contraMD5=md5($passForm);
    if($usuario->getContraseña()==$contraMD5){
        
        $pasar=True;
        if($pasar){
            if($usuario->getEstado_usuario()==1){
                $userSession->setCurrentUser($userForm);
                $tipo=$usuario->getCod_tipo_usuario();
                $userSession->setTipoUsuario($tipo);

                if($tipo==1){
                    header('location: empleado/index.php');
                }else if($tipo==2){
                    header('location: administrador/index.php');
                }else{
                    echo "entra a cliente";
                    $cliente=$controladorC->darCliente_x_Codusuario($usuario->getCod_usuario());
                    if($cliente->getCod_tipo_cliente()==1)
                    {
                        header('location: cliente/index.php');
                    }else{
                        header('location: distribuidor/index.php');
                    }
                }
            }
            else{
                $errorEntrada="No puede ingresar a la plataforma, puede contactarse a ____ y enviar un correo para habilitar su usuario";
                echo $errorEntrada;
            }
        }

    }else{
        $errorEntrada="La contraseña no es correcta";
        echo $errorEntrada;

    }	
}


?>