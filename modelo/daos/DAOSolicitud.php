<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Paquete.php');
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
        $query = "INSERT INTO SOLICITUD VALUES (cod_solicitud=?,cod_cliente=?,cod_partner=?,tipo_dominio=?,dominio=?)";
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
        $query = "UPDATE SOLICITUD SET cod_cliente=?,cod_partner=?,tipo_dominio=?,dominio=?
        WHERE cod_solicitud=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_cliente(),
                $registroActualizar->getCod_partner(), 
                $registroActualizar->getTipo_dominio(),
                $registroActualizar->getDominio()
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
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $solicitudes;
    }
    public function eliminarRegistro($idRegistro){

    }

}