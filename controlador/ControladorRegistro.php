<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/user_Sesion.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/daos/DAOUsuario.php');


class ControladorRegistro{

    private  $usuario;
    private $dao_usuario;

    public function __construct()
    {
        $this->dao_usuario= new DAOUsuario();
    }

    

    public function darUsuario($user_usuario){
        $variable=$this->dao_usuario->darUsuarioUser($user_usuario);
        if($variable==null){
            return null;
        }else{
            $this->usuario=$variable;
            return  $variable;
        }

    }


    /**
     * Get the value of cod_especial
     */ 
    public function getCod_especial()
    {
        return $this->cod_especial;
    }

    /**
     * Get the value of nombre_usuario
     */ 
    public function getNombre_usuario()
    {
        return $this->nombre_usuario;
    }

    /**
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Get the value of verificacion
     */ 
    public function getVerificacion()
    {
        return $this->verificacion;
    }

    /**
     * Get the value of correo_usuario
     */ 
    public function getCorreo_usuario()
    {
        return $this->correo_usuario;
    }

    /**
     * Get the value of tipo_usuario
     */ 
    public function getTipo_usuario()
    {
        return $this->tipo_usuario;
    }

    /**
     * Get the value of usuario
     */ 
    public function getUsuario()
    {
        return $this->usuario;
    }
}
?>