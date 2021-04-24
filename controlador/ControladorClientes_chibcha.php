<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOClientes_chibcha.php');

class ControladorClientes_chibcha{

    private $clientes;


    public function agregarRegistro(Clientes_chibcha $nuevoRegistro)
    {
        $this->clientes=new DAOClientes_chimbcha();
        return $this->clientes->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Clientes_chibcha $registroActualizar)
    {
        $this->clientes=new DAOClientes_chimbcha();
        return $this->clientes->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->clientes=new DAOClientes_chimbcha();
        return $this->clientes->listar();
    }

    public function listarxcliente($nom_cliente)
    {
        $this->clientes=new DAOClientes_chimbcha();
        return $this->clientes->listarxcliente($nom_cliente);
    }

}