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
        $query = "INSERT INTO EMPLEADO VALUES (cod_empleado=?,cod_usuario=?,tel_empleado=?,nom_empleado=?,cod_nivel=?,ced_empleado=?)";
        $respuesta = $this->con->prepare($query)->execute([

            $nuevoRegistro->getCod_empleado(),
            $nuevoRegistro->getCod_usuario(),
            $nuevoRegistro->getTel_empleado(),
            $nuevoRegistro->getNom_empleado(),
            $nuevoRegistro->getCod_nivel(),
            $nuevoRegistro->getCed_empleado()
        ]);
        return $respuesta;
    }
    public function actualizarRegistro(Empleado $registroActualizar)
    {
        print_r("ENTRO AL METODO");
        $query = "UPDATE EMPLEADO SET cod_usuario=?,nom_empleado=?,tel_empleado=?,cod_nivel=?,ced_empleado=?
        WHERE cod_empleado=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_usuario(),
                $registroActualizar->getNom_empleado(), 
                $registroActualizar->getTel_empleado(),
                $registroActualizar->getCod_nivel(),
                $registroActualizar->getCed_empleado()
        ]);
        return $respuesta;
    }

    public function actualizarEmpleado($nom_empleado,$cedula,$tel_empleado,$cod_nivel,$cod_empleado)
    {

        $query = "UPDATE EMPLEADO SET nom_empleado=?,tel_empleado=?,cod_nivel=?,ced_empleado=?
        WHERE cod_empleado=?";        
        $sentencia = $this->con->prepare($query);
        $res=$sentencia->execute([$nom_empleado,$tel_empleado,$cod_nivel,$cedula,$cod_empleado]);

        if($res){
            echo'SE HA REALIZADO LA EJECUCIÓN DE LA SENTENCIA';
        }else{
            echo'NO SE HA REALIZADO LA EJECUCIÓN';
        }
        return $res;        
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
    public function empleado_x_cod_usuario($cod_usuario)
    {
        $query = $this->connect()->prepare('SELECT * FROM EMPLEADO WHERE cod_usuario=?');
        $query->execute([$cod_usuario]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Empleado ($key[0], $key[1], $key[2], $key[3], $key[4], $key[5]);
        } else {
            return null;
        }
    }
    public function eliminarRegistro($idRegistro){

    }

}