<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOUsuario.php');

class ControladorUsuario{
    
    private $usuario;
 
    public function darUsuarioPorCodigo($cod_usuario)
    {
        $this->usuario=new DAOUsuario();
        return $this->usuario-> darUsuarioPorCodigo($cod_usuario);
    }

    public function validarContraseña($id,$contra)
    {
        $this->usuario=new DAOUsuario();
        return $this->usuario->validarContraseña($id,$contra);
    }

    public function cambiarContraseña($cod_usu,$pass)
    {
        $this->usuario=new DAOUsuario();
        return $this->usuario->cambiarContraseña($cod_usu,$pass);
    }
    
    

}

?>