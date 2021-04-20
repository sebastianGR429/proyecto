<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Administrador.php');

class DAOAdministrador extends DB 
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Administrador $nuevoRegistro)
    {
        $query = "INSERT INTO ADMINISTRADOR VALUES (cod_administrador=?,cod_usuario=?,nom_administrador=?,tel_administrador=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_administrador(), 
                $nuevoRegistro->getCod_usuario(),
                $nuevoRegistro->getNom_administrador(),
                $nuevoRegistro->getTel_administrador(),
            ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Administrador $registroActualizar)
    {
        $query = "UPDATE ADMINISTRADOR SET (cod_administrador=?,cod_usuario=?,nom_administrador=?,tel_administrador=? 
        WHERE cod_administrador=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getCod_administrador(), 
            $registroActualizar->getCod_usuario(),
            $registroActualizar->getNom_administrador(),
            $registroActualizar->getTel_administrador(),
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from ADMINISTRADOR";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $administrador = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $administrador;
    }

      
}