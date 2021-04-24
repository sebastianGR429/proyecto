<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOSugerencias.php');

class ControladorSugerencias{

    private $Sugerencias;

    public function agregarRegistro(Sugerencias $nuevoRegistro)
    {
        $this->Sugerencias=new DAOSugerencias();
        return $this->Sugerencias->agregarRegistro($nuevoRegistro);
    }
    //Escalar sugerencia
    public function escalarSugerencia($cod_sugerencia, $desc_sugerencia)
    {
        $this->Sugerencias=new DAOSugerencias();
        return $this->Sugerencias->escalarSugerencia($cod_sugerencia, $desc_sugerencia);
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