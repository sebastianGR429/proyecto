<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOSolicitud.php');

class ControladorSolicitud{

    private $solicitud;


    public function agregarRegistro(Solicitud $nuevoRegistro)
    {
        $this->solicitud=new DAOSolicitud();
        return $this->solicitud->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Solicitud $registroActualizar)
    {
        $this->solicitud=new DAOSolicitud();
        return $this->solicitud->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->solicitud=new DAOSolicitud();
        return $this->solicitud->listar();
    }


    public function listarxcliente($nom_cliente)
    {
        $this->solicitud=new DAOSolicitud();
        return $this->solicitud->listarxcliente($nom_cliente);
    }



}