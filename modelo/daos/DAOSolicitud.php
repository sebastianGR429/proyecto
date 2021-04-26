<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Paquete.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Solicitud.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DAOSolicitud extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Solicitud  $nuevoRegistro)
    {
        $query = "INSERT INTO SOLICITUD (cod_solicitud,cod_cliente,cod_partner,tipo_dominio,dominio,
        fecha ) values (?,?,?,?,?,now() )";
        $respuesta = $this->con->prepare($query)->execute([
            $nuevoRegistro->getCod_solicitud(),
            $nuevoRegistro->getCod_cliente(),
            $nuevoRegistro->getCod_partner(), 
            $nuevoRegistro->getTipo_dominio(),
            $nuevoRegistro->getDominio()
        ]);
        return $respuesta;
    }
    public function actualizarRegistro(Solicitud  $registroActualizar)
    {
        $query = "UPDATE SOLICITUD SET cod_cliente=?,cod_partner=?,tipo_dominio=?,dominio=?,fecha=?
        WHERE cod_solicitud=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_cliente(),
                $registroActualizar->getCod_partner(), 
                $registroActualizar->getTipo_dominio(),
                $registroActualizar->getDominio(),
                $registroActualizar->getFecha(),
                $registroActualizar->getCod_solicitud()
        ]);
        return $respuesta;
    }
    public function listar()
    {
        $query = "SELECT * FROM SOLICITUD";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $solicitudes = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Solicitud($key[0], $key[1], $key[2], $key[3],$key[4],$key[5]);
        }
        return $solicitudes;
    }


    public function listarxcliente($nom_cliente)
    {
        $query = "SELECT * FROM solicitudes_cliente WHERE nom_cliente=?";    
        $query = $this->con->prepare($query);
        $query->execute([$nom_cliente]);
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }
    public function eliminarRegistro($idRegistro){

    }



}