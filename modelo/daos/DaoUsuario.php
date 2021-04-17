<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Usuario.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DaoUsuario extends DB implements dao_interface
{

    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Usuario $nuevoRegistro)
    {

    }   
    public function actualizarRegistro(Usuario $nuevoRegistro)
    {
        
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from USUARIO";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Usuario($key[0], $key[1], $key[2], $key[3], $key[4], $key[5]);
        }
        return $usuarios;
    }

    public function actualizarContrasena(Usuario $u){
        $query='UPDATE USUARIO SET contraseña=? where  cod_usuario=?';
        $sentencia=$this->con->prepare($query);
        $sentencia->execute([$u->getContraseña(),$u->getCod_usuario()]);
        if($sentencia->rowCount()){
            return 1;
        }
        return 0;
    }

    public function mandarCorreoRecuperacion($correo)
    {
        $cor= new EnviarCorreo();
        $nuevaContra=(rand(0,9).rand(0,9).rand(0,9).rand(0,9));
        $md5Contra=md5($nuevaContra);
        $mensaje='Con esta nueva contraseña generado aleaotoriamente podras volver a unirte a nosotros: '
        .$nuevaContra.' podras ingresar nuevamente a la pagina para que asi puedas realizar el cambio de tu contraseña.';
        $r1=$cor->enviarContraseña($correo,'Recuperación de Contraseña ChibchaWeb',$mensaje);
        
        if($r1==1){
            $query='UPDATE USUARIO SET contraseña=? WHERE correo=?';
            $sentencia=$this->con->prepare($query);
            $sentencia->execute([$md5Contra,$correo]);
            return 1;
        }else{
            return "hubo problemas con nuestro servidor de correos, por favor revise que el correo escrito
            sea con el que se registro e intenta mas tarde";
        }

    }
    
    public function darUsuario($nom_usuario)
    {
        $query='SELECT * FROM USUARIO WHERE nom_usuario=?';
        $sentencia = $this->connect()->prepare($query);
        $sentencia->execute([$nom_usuario]);
        if ($sentencia->rowCount()) {
            $key = $sentencia->fetchAll();
            return new Usuario($key[0], $key[1], $key[2], $key[3], $key[4],$key[5]);
        } else {
            return null;
        }
    }

    public function cambiarEstadoUsuario($cod_usu, $estado_usu)
    {        
        $query = "UPDATE USUARIO SET estado_usuario= ? where cod_usuario= ?";
        $respuesta = $this->con->prepare($query);
        $respuesta->execute([$estado_usu,$cod_usu]);
        return $respuesta;
    }

    public function darUsuarioPorCodigo($cod_usuario)
    {
        $query='SELECT * FROM USUARIO WHERE cod_usuario=?';
        $sentencia = $this->connect()->prepare($query);
        $sentencia->execute([$cod_usuario]);
        if ($sentencia->rowCount()) {
            $key = $sentencia->fetchAll()[0];
            return new Usuario($key[0], $key[1], $key[2], $key[3], $key[4],$key[5]);
        } else {
            return null;
        }
    }

    public function validarContraseña($id,$contra)
    { 
        $query="SELECT * from usuario where cod_usuario=? and pass_usuario=?";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([$id,md5($contra)]);
        $number_of_rows = $sentencia->fetchAll();
        return $number_of_rows;
    }

    public function cambiarContraseña($cod_usu,$pass)
    {
        $pass2 = md5($pass);
        $query="UPDATE usuario SET pass_usuario= ? WHERE cod_usuario = ? ";
        $sentencia = $this->con->prepare($query);
        $res=$sentencia->execute([$pass2,$cod_usu]);
        return $res;
    }

   

}
