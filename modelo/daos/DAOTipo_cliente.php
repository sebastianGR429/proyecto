<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Paquete.php');
//include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/controlador/EnviarCorreo.php');

class DAOTipo_cliente extends DB implements dao_interface
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Tipo_cliente $nuevoRegistro)
    {
        $query = "INSERT INTO TIPO_CLIENTE VALUES (cod_tipo_cliente=?,nom_tipo_cliente=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_tipo_cliente(), 
                $nuevoRegistro->getNom_tipo_cliente()
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Tipo_cliente $registroActualizar)
    {
        $query = "UPDATE TIPO_CLIENTE SET cod_tipo_cliente=?,nom_tipo_cliente=? WHERE cod_tipo_cliente=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_tipo_cliente(), 
                $registroActualizar->getNom_tipo_cliente()
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from TIPO_CLIENTE";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Tipo_cliente($key[0], $key[1]);
        }
        return $usuarios;
    }

      
}