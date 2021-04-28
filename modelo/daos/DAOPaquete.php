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
        $query = "UPDATE PAQUETES SET nom_paquete=?,certificacion=?,iso=?,almacenamiento=?,bd=?,correos=?,sitios_web=?,costo_paquete=? WHERE cod_paquete=?";            
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getNom_paquete(), 
            $registroActualizar->getCertificacion(),
            $registroActualizar->getIso(),
            $registroActualizar->getAlmacenamiento(),
            $registroActualizar->getBd(),
            $registroActualizar->getCorreos(),
            $registroActualizar->getSitios_web(),
            $registroActualizar->getCosto_paquete()
        ]);
        return $respuesta;
        
        
    }    

    public function listar()
    {
        $query = $this->con->prepare("SELECT * FROM PAQUETES");
        $query->execute();
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
        
    }

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function paquetexcod($cod_paquete)
    {
        $query = $this->con->prepare("SELECT * FROM PAQUETES WHERE cod_paquete=?");
        $query->execute([$cod_paquete]);
        if ($query->rowCount()) {
            $key = $query->fetchAll()[0];
            return new Paquete($key[0], $key[1], $key[2], $key[3], $key[4], $key[5], $key[6],$key[7], $key[8]);
        } else {
            return null;
        }
    }

      
}
