<?php

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
        $query = "INSERT INTO COMISIONES (cod_comision,cod_cliente,valor_comision,fecha_comision,nom_dominio,nom_paquete) VALUES (?,?,?, now(), ?, ? )";
        $respuesta = $this->con->prepare($query)->execute([ 
            $nuevoRegistro->getCod_comision(),  
            $nuevoRegistro->getCod_cliente(),  
            $nuevoRegistro->getValor_comision(),
            $nuevoRegistro->getNom_dominio(),
            $nuevoRegistro->getNom_paquete()
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Comisiones $registroActualizar)
    {
        $query = "UPDATE COMISIONES SET(cod_cliente=?,valor_comision=?,fecha_comision=?,nom_dominio=?,nom_paquete=?)
        WHERE cod_comision=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getCod_cliente(), 
            $registroActualizar->getValor_comision(),
            $registroActualizar->getFecha_comision(),
            $registroActualizar->getNom_dominio(),
            $registroActualizar->getNom_paquete()
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
            $usuarios[] = new Comisiones($key[0], $key[1], $key[2], $key[3],$key[4],$key[5]);
        }
        return $comisiones;
    }

    public function listarxdistribuidor($cod_dis)
    {
        $query = $this->con->prepare("SELECT * FROM COMISIONES WHERE cod_cliente=?");
        $query->execute([$cod_dis]);
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }



      
}
