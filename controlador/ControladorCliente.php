<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOCliente.php');

class ControladorCliente{



    public function agregarRegistro(Object $nuevoRegistro)
    {
        $this->Clientes=new DAOCliente();
        return $this->Clientes->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Cliente $registroActualizar)
    {
        $this->Clientes=new DAOCliente();
        return $this->Clientes->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Clientes=new DAOCliente();
        return $this->Clientes->listar();
    }

    public function devolverCliente($cod_cliente)
    {
        $this->Clientes=new DAOCliente();
        return $this->Clientes->devolverCliente($cod_cliente);
    }

    public function darCliente_x_Codusuario($cod_usuario)
    {
        $this->Clientes=new DAOCliente();
        return $this->Clientes->darCliente_x_Codusuario($cod_usuario);
    }
    
    public function actualizarCantDominios($cantidad,$cod_cliente)
    {
        $this->clientes=new DAOCliente();
        return $this->clientes->actualizarCantDominios($cantidad,$cod_cliente);
    }

    public function actualizarCategoria($cod_tipo,$cod_cliente)
    {
        $this->clientes=new DAOCliente();
        return $this->clientes->actualizarCategoria($cod_tipo,$cod_cliente);
    }

}