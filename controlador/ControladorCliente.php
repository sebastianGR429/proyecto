<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOCliente.php');

class ControladorCliente{

    private $Partners;


    public function agregarRegistro(Cliente $nuevoRegistro)
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

}