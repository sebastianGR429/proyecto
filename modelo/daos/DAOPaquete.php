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
        
        
        
    }    

    public function listar()
    {
        $query = "select * from PAQUETES";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $usuarios = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3],$key[4], $key[5], $key[6], $key[7],$key[8]);
        }
        return $usuarios;
    }

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function paquetexcod($cod_paquete)
    {
        $query = $this->con->prepare("SELECT * FROM PAQUETES WHERE cod_paquete=?");
        $query->execute([$cod_paquete]);
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }

      
}
