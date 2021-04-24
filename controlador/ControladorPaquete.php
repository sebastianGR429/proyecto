<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOPaquete.php');

class ControladorPaquete{

    private $paquete;


    public function agregarRegistro(Paquete $nuevoRegistro)
    {
        $this->paquete=new DAOPaquete();
        return $this->paquete->agregarRegistro($nuevoRegistro);
    }

    public function actualizarRegistro(Paquete $registroActualizar)
    {
        $this->paquete=new DAOPaquete();
        return $this->paquete->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->paquete=new DAOPaquete();
        return $this->paquete->listar();
    }

}