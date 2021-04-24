<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Partner.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DAOPartner extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Partner $nuevoRegistro)
    {
        $query = "INSERT INTO PARTNER VALUES (cod_partner=?,nom_partner=?,correo_partner=?,tel_partner=?)";
        $respuesta = $this->con->prepare($query)->execute([

            $nuevoRegistro->getCod_partner(),
            $nuevoRegistro->getNom_partner(),
            $nuevoRegistro->getCorreo_partner(),
            $nuevoRegistro->getTel_partner()
        ]);
        return $respuesta;
    }
    public function actualizarRegistro(Partner $registroActualizar)
    {
        $query = "UPDATE PARTNER SET nom_partner=?,correo_partner=?,correo_partner=?,tel_partner=?
        WHERE cod_partner=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getNom_partner(), 
                $registroActualizar->getCorreo_partner(),
                $registroActualizar->getTel_partner()
        ]);
        return $respuesta;
    }
    public function listar()
    {
        $query = $this->con->prepare("SELECT * FROM PARTNER");
        $query->execute();
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }
    public function eliminarRegistro($idRegistro){

    }

    public function devolverPartner($cod_partner){
        $query=$this->con->prepare('SELECT * FROM PARTNER WHERE cod_partner= ?');
        $query->execute([$cod_partner]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Partner($key[0], $key[1], $key[2], $key[3]);
        } else {
            return null;
        }
    }

}