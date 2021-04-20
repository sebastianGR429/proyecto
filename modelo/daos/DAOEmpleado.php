<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/Controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Empleado.php');

class DAOEmpleado extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $query = "INSERT INTO EMPLEADO VALUES (cod_empleado=?,cod_usuario=?,tel_empleado=?,nom_empleado=?,cod_nivel=?)";
        $respuesta = $this->con->prepare($query)->execute([

            $nuevoRegistro->getCod_empleado(),
            $nuevoRegistro->getCod_usuario(),
            $nuevoRegistro->getTel_empleado(),
            $nuevoRegistro->getNom_empleado(),
            $nuevoRegistro->getCod_nivel()
        ]);
        return $respuesta;
    }
    public function actualizarRegistro(Empleado $registroActualizar)
    {
        $query = "UPDATE EMPLEADO SET cod_usuario=?,nom_empleado=?,tel_empleado=?,cod_nivel=?
        WHERE cod_empleado=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_usuario(),
                $registroActualizar->getNom_empleado(), 
                $registroActualizar->getTel_empleado(),
                $registroActualizar->getCod_nivel()
        ]);
        return $respuesta;
    }
    public function listar()
    {
        $query = $this->con->prepare("SELECT * FROM EMPLEADO");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    }
    public function eliminarRegistro($idRegistro){

    }

}