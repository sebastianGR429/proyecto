<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOUsuario.php');

class ControladorUsuario{
    
    private $usuario;
 
    public function darUsuarioPorCodigo($cod_usuario)
    {
        $this->usuario=new DAOUsuario();
        return $this->usuario-> darUsuarioPorCodigo($cod_usuario);
    }
}

?>