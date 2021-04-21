<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOSugerencias.php');

class ControladorSugerencias{

    private $Sugerencias;

    public function agregarRegistro(Sugerencias $nuevoRegistro)
    {
        $this->Sugerencias=new DAOSugerencias();
        return $this->Sugerencias->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Sugerencias $registroActualizar)
    {
        $this->Sugerencias=new DAOSugerencias();
        return $this->Sugerencias->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Sugerencias=new DAOSugerencias();
        return $this->Sugerencias->listar();
    }

}