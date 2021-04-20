<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/NivelEmpleado.php');

class DAONivelEmpleado extends DB 
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(NivelEmpleado $nuevoRegistro)
    {
        $query = "INSERT INTO NIVEL_EMPLEADO VALUES (nom_nivel=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getNom_nivel()
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(NivelEmpleado $registroActualizar)
    {
        $query = "UPDATE NIVEL_EMPLEADO SET (nom_tipo_usuario=?
        WHERE cod_tipo_usuario=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getNom_nivel()
            ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from NIVEL_EMPLEADO";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $nivel_empleado = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $nivel_empleado;
    }

      
}
