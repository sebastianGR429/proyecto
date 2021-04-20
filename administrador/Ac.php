<?php

//CONTROLADORES
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/Controlador/ControladorEmpleado.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/Controlador/ControladorUsuario.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorCliente.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorPrestamoF.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorDocumento.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/controlador/ControladorAdministrador.php');


//ENTIDADES
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Empleado.php');
//include_once($_SERVER['DOCUMENT_ROOT'] . '/libreriaSoftware/modelo/entidades/Cliente.php');



if (isset($_GET['action'])) {
    switch ($_GET['action']) {

        case 'AgregarE':
            $datos = array(
                $_POST["nombre"],
                $_POST["telefono"],
                $_POST['nivel']
            );
            // FALTA EL CONTROLADOR DEL USUARIO
            $empleado = new Empleado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4]);
            $CEmpleados = new ControladorEmpleado();
            echo $CEmpleados->agregarRegistro($empleado);

            break;

        case 'AgregarP':
            $datos = array(
                $_POST["nombre"],
                $_POST["telefono"],
                $_POST['nivel']
            );
            // FALTA EL CONTROLADOR DEL USUARIO
            $empleado = new Empleado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4]);
            $CEmpleados = new ControladorEmpleado();
            echo $CEmpleados->agregarRegistro($empleado);

            break;


            // case 'AgregarC':
            //     $datos = array(
            //         $_POST["nombre"],
            //         $_POST['apellidos'],
            //         $_POST["telefono"],
            //         $_POST["correo"],
            //         $_POST["direccion"]
            //     );
            //     // FALTA EL CONTROLADOR DEL USUARIO
            //     $CCliente = new ControladorCliente();
            //     echo $CCliente->agregarCliente($datos[0], $datos[1], $datos[3], $datos[2], $datos[4]);

            //     break;

            // case 'APublicador':
            //     $CUsuarios = new ControladorUsuario();
            //     echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 4);
            //     if ($r) {
            //         header("location:TablaPublicadoresInac.php");
            //     } else {
            //         echo ($r);
            //     }
            //     break;

            // case 'rechazarPu':
            //     $CUsuarios = new ControladorUsuario();
            //     echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 6);
            //     if ($r) {
            //         header("location:TablaPublicadoresInac.php");
            //     } else {
            //         echo ($r);
            //     }
            //     break;

            // case 'aceptarDevo':
            //     $CPrestamoF = new ControladorPrestamoFisico();
            //     echo $r = $CPrestamoF->aceptarDevolucion($_GET['codigo']);
            //     if ($r) {
            //         header("location:LibrosPrestados.php");
            //     } else {
            //         echo ($r);
            //     }

            //     break;

            //     case 'aceptarDevo1':
            //         $CPrestamoF = new ControladorPrestamoFisico();
            //         echo $r = $CPrestamoF->aceptarDevolucion($_GET['codigo']);
            //         if ($r) {
            //             header("location:../empleado/LibrosPrestados.php");
            //         } else {
            //             echo ($r);
            //         }

            //         break;

            // case 'estadoPub':
            //     $CUsuarios = new ControladorUsuario();

            //     $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);
            //     if ($user->getEstado_usuario() == 4) {
            //         // InActivar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 5);
            //         if ($r) {
            //             header("location:TablaPublicadores.php");
            //         } else {
            //             echo ($r);
            //         }
            //     } else if ($user->getEstado_usuario() == 5) {
            //         //Activar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 4);
            //         if ($r) {
            //             header("location:TablaPublicadores.php");
            //         } else {
            //             echo ($r);
            //         }
            //     }
            //     break;


            // case 'reservarLxC':
            //     $datos = array(
            //         $_POST["cod_libro"],
            //         $_POST["correo_usuario"]
            //     );
            //     $CPrestamoF = new ControladorPrestamoFisico();
            //     echo $CPrestamoF->agregarPrestamoProce($datos[0],$datos[1]);

            //     // METODO PARA RESERVAR POR EL CLIENTES
            //     break;

            // case 'estadoEm':
            //     $CUsuarios = new ControladorUsuario();
            //     $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);
            //     if ($user->getEstado_usuario() == 4) {
            //         // InActivar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 5);
            //         if ($r) {
            //             header("location:TablaEmpleados.php");
            //         } else {
            //             echo ($r);
            //         }
            //     } else if ($user->getEstado_usuario() == 5) {
            //         //Activar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 4);
            //         if ($r) {
            //             header("location:TablaEmpleados.php");
            //         } else {
            //             echo ($r);
            //         }
            //     }
            //     break;


            // case 'estadoCL':
            //     $CUsuarios = new ControladorUsuario();
            //     $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);

            //     if ($user->getEstado_usuario() == 4) {
            //         // InActivar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 5);
            //         if ($r) {
            //             header("location:TablaClientes.php");
            //         } else {
            //             echo ($r);
            //         }
            //     } else if ($user->getEstado_usuario() == 5) {
            //         //Activar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 4);
            //         if ($r) {
            //             header("location:TablaClientes.php");
            //         } else {
            //             echo ($r);
            //         }
            //     }
            //     break;

            // case 'estadoCLE':
            //     $CUsuarios = new ControladorUsuario();
            //     $user = $CUsuarios->darUsuarioxCod($_GET['codigo']);

            //     if ($user->getEstado_usuario() == 4) {
            //         // InActivar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 5);
            //         if ($r) {
            //             header("location:../empleado/TablaClientes.php");
            //         } else {
            //             echo ($r);
            //         }
            //     } else if ($user->getEstado_usuario() == 5) {
            //         //Activar
            //         echo $r = $CUsuarios->cambiarEstadoPubli($_GET['codigo'], 4);
            //         if ($r) {
            //             header("location:../empleado/TablaClientes.php");
            //         } else {
            //             echo ($r);
            //         }
            //     }
            //     break;

            // case 'ALibro':
            //     $CDocumento = new ControladorDocumento();
            //     echo $r = $CDocumento->aceptarLibro($_GET['codigo']);
            //     if ($r) {
            //         header("location:TablaLibrosNew.php");
            //     } else {
            //         echo ($r);
            //     }
            // break;

            // case 'buscarC':
            //     $CCliente= new ControladorCliente();
            //     if($CCliente->devolverClientexUser($_GET['correo'])==2){
            //         echo 2;
            //     }else{
            //         echo 1;
            //     }
            // break;

            // case 'perfilE':
            //     $datos = array(
            //         $_POST["nombre"],
            //         $_POST["telefono"],
            //         $_POST["correo"],
            //         $_POST["id_usu"],
            //         $_POST["contraActual"],
            //         $_POST["repeticion"],
            //         $_POST["contraNueva"]
            //     );

            //     if($datos[4] != null){
            //         // METODO PARA CAMBIAR ALGO QUE NO SEA LA CONTRASEÑA
            //         if(($datos[6]==null and $datos[5]==null)){
            //             $CEmpleados = new ControladorEmpleados();
            //             $contraActEnc = md5($datos[4]);
            //             echo $CEmpleados->editarEmpelado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $contraActEnc);
            //         }

            //         if(($datos[5]==$datos[6]) and $datos[6]!=null){
            //             $CEmpleados = new ControladorEmpleados();
            //             $contraNuevaEnc = md5($datos[6]);
            //             echo $CEmpleados->editarEmpelado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $contraNuevaEnc);
            //         }else if(($datos[5]!=$datos[6]) and $datos[6]!=null){
            //             echo 4;
            //         } 
            //     }else{
            //         echo 45;
            //     }

            //    break;


            //    case 'perfilA':
            //     $datos = array(
            //         $_POST["nombre"],
            //         $_POST["telefono"],
            //         $_POST["correo"],
            //         $_POST["id_usu"],
            //         $_POST["contraActual"],
            //         $_POST["repeticion"],
            //         $_POST["contraNueva"]
            //     );

            //     if($datos[4] != null){
            //         // METODO PARA CAMBIAR ALGO QUE NO SEA LA CONTRASEÑA
            //         if(($datos[6]==null and $datos[5]==null)){
            //             $CEmpleados = new ControladorEmpleados();
            //             $contraActEnc = md5($datos[4]);
            //             echo $CEmpleados->editarEmpelado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $contraActEnc);
            //         }

            //         if(($datos[5]==$datos[6]) and $datos[6]!=null){
            //             $CEmpleados = new ControladorEmpleados();
            //             $contraNuevaEnc = md5($datos[6]);
            //             echo $CEmpleados->editarEmpelado($datos[0], $datos[1], $datos[2], $datos[3], $datos[4], $contraNuevaEnc);
            //         }else if(($datos[5]!=$datos[6]) and $datos[6]!=null){
            //             echo 4;
            //         } 
            //     }else{
            //         echo 45;
            //     }

            //    break;


    }
}
