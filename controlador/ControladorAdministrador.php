<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOAdministrador.php');

class ControladorAdministrador{



    public function agregarRegistro(Administrador $nuevoRegistro)
    {
        $this->Administrador=new DAOAdministrador();
        return $this->Clientes->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Administrador $registroActualizar)
    {
        $this->Administrador=new DAOAdministrador();
        return $this->Clientes->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Administrador=new DAOAdministrador();
        return $this->Administrador->listar();
    }

    public function admin_x_Codusuario($cod_usuario)
    {
        $this->Administrador=new DAOAdministrador();
        return $this->Administrador->admin_x_Codusuario($cod_usuario);
    }
    

}