<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Comisiones.php');

class DAOComisiones extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Comisiones $nuevoRegistro)
    {
        $query = "INSERT INTO COMISIONES VALUES (cod_cliente=?,valor_comision=?,fecha_comision=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_cliente(), 
                $nuevoRegistro->getValor_comision(),
                $nuevoRegistro->getFecha_comision(),
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Comisiones $registroActualizar)
    {
        $query = "UPDATE COMISIONES SET(cod_cliente=?,valor_comision=?,fecha_comision=?)
        WHERE cod_comision=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getCod_cliente(), 
            $registroActualizar->getValor_comision(),
            $registroActualizar->getFecha_comision(),
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from COMISIONES";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $comisiones = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $comisiones;
    }

      
}
