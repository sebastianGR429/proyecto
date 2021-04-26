<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOComisiones.php');

class ControladorComision{

    private $comision;


    public function agregarRegistro(Comisiones $nuevoRegistro)
    {
        $this->comision=new DAOComisiones();
        return $this->comision->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Comisiones $registroActualizar)
    {
        $this->comision=new DAOComisiones();
        return $this->comision->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->comision=new DAOComisiones();
        return $this->comision->listar();
    }

    public function listarxdistribuidor($cod_dis)
    {
        $this->comision=new DAOComisiones();
        return $this->comision->listarxdistribuidor($cod_dis);
    }

  
}