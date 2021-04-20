<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Paquete.php');

class DAOPaquete extends DB 
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Paquete $nuevoRegistro)
    {
        
    }   
    public function actualizarRegistro(Paquete $registroActualizar)
    {
        $query = "UPDATE PAQUETES SET nom_paquete=?,desc_paquete=?,costo_paquete=? 
        WHERE cod_paquete=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getNom_paquete(), 
                $registroActualizar->getDesc_paquete(),
                $registroActualizar->getCosto_paquete(),
                $registroActualizar->getCod_paquete()
        ]);
        return $respuesta;
    }    

    public function listar()
    {
        $query = "select * from PAQUETES";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $usuarios;
    }

    public function eliminarRegistro($idRegistro)
    {
        
    }    


      
}
