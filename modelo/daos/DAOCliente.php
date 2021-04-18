<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Cliente.php');

class DAOCliente extends DB implements dao_interface
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Cliente $nuevoRegistro)
    {
        $query = "INSERT INTO CLIENTE VALUES (cod_usuario=?,nom_cliente=?,cedula_cliente=?,tel_cliente=?,cod_tipo_cliente=?,cantidad_dominios=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_usuario(), 
                $nuevoRegistro->getNom_cliente(),
                $nuevoRegistro->getCedula_cliente(),
                $nuevoRegistro->getTel_cliente(),
                $nuevoRegistro->getCod_tipo_cliente(),
                $nuevoRegistro->getCantidad_dominios(),
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Cliente $registroActualizar)
    {
        $query = "UPDATE CLIENTE SET (cod_usuario=?,nom_cliente=?,cedula_cliente=?,tel_cliente=?,cod_tipo_cliente=?,cantidad_dominios=? 
        WHERE cod_cliente=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getCod_usuario(), 
            $registroActualizar->getNom_cliente(),
            $registroActualizar->getCedula_cliente(),
            $registroActualizar->getTel_cliente(),
            $registroActualizar->getCod_tipo_cliente(),
            $registroActualizar->getCantidad_dominios(),
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from CLIENTE";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $clientes = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $clientes;
    }

      
}
