<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Sugerencias.php');
//include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DAOSugerencias extends DB implements dao_interface
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Sugerencias $nuevoRegistro)
    {
        $query = "INSERT INTO SUGERENCIAS VALUES (cod_sugerencias=?,cod_cliente=?,descripcion_sugerencia=?,estado_sugerencia=?,fecha=?,nivel=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_sugerencia(), 
                $nuevoRegistro->getCod_cliente(),
                $nuevoRegistro->getDescripcion_sugerencia(),
                $nuevoRegistro->getEstado_sugerencia(),
                $nuevoRegistro->getFecha(),
                $nuevoRegistro->getNivel(),
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Sugerencias $registroActualizar)
    {
        $query = "UPDATE SUGERENCIAS SET cod_sugerencias=?,cod_cliente=?,descripcion_sugerencia=?,estado_sugerencia=?,fecha=?,nivel=?
        WHERE cod_sugerencia=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_sugerencia(), 
                $registroActualizar->getCod_cliente()(),
                $registroActualizar->getDescripcion_sugerencia(),
                $registroActualizar->getEstado_sugerencia(),
                $registroActualizar->getFecha(),
                $registroActualizar->getNivel()
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from SUGERENCIAS";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Sugerencias($key[0], $key[1], $key[2], $key[3], $key[4],$key[5]);
        }
        return $usuarios;
    }

      
}