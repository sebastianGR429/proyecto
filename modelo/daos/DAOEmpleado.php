<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Paquete.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DAOEmpleado extends DB implements dao_interface
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $query = "INSERT INTO EMPLEADO VALUES (cod_empleado=?,cod_usuario=?,tel_empleado=?,cod_nivel=?)";
        $respuesta = $this->con->prepare($query)->execute([

            $nuevoRegistro->getCod_empleado(),
            $nuevoRegistro->getCod_usuario(),
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
        $query = "SELECT * FROM EMPLEADO";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $empleados = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $empleados;
    }
    public function eliminarRegistro($idRegistro){

    }

}