<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOPartner.php');

class ControladorPartner{

    private $Partners;


    public function agregarRegistro(Partner $nuevoRegistro)
    {
        $this->Partners=new DAOPartner();
        return $this->Partners->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Partner $registroActualizar)
    {
        $this->Partners=new DAOPartner();
        return $this->Partners->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Partners=new DAOPartner();
        return $this->Partners->listar();
    }

    public function devolverPartner($cod_partner)
    {
        $this->Partners=new DAOPartner();
        return $this->Partners->devolverPartner($cod_partner);
    }
    public function actualizarPartner($cod_partner,$nom_partner,$correo_partner,$tel_partner)
    {
        $this->Partners=new DAOPartner();
        return $this->Partners->actualizarPartner($cod_partner,$nom_partner,$correo_partner,$tel_partner);
    }

}