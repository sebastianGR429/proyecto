<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Sugerencias.php');

class DAOSugerencias extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Sugerencias $nuevoRegistro)
    {
        $query = "INSERT INTO SUGERENCIAS VALUES (cod_sugerencias=?,cod_cliente=?,descripcion_sugerencia=?,estado_sugerencia=?,fecha=?,cod_empleado=?,desc_escala=?,cod_nivel=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_sugerencia(), 
                $nuevoRegistro->getCod_cliente(),
                $nuevoRegistro->getDescripcion_sugerencia(),
                $nuevoRegistro->getEstado_sugerencia(),
                $nuevoRegistro->getFecha(),
                $nuevoRegistro->getCod_empleado(),
                $nuevoRegistro->getDesc_escala(),
                $nuevoRegistro->getCod_nivel()
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
                $registroActualizar->getCod_empleado(),
                $registroActualizar->getDesc_escala(),
                $registroActualizar->getCod_nivel()
        ]);
        return $respuesta;
    }    

    public function escalarSugerencia($cod_sugerencia, $descripcion_sugerencia)
    {
        echo 'ENTRO A LA CONSULTA' ;
        echo'CONSULTA';
        $query="UPDATE SUGERENCIAS SET desc_escala= ? ,  cod_nivel = 2 WHERE cod_cliente = ? ";
        $sentencia = $this->con->prepare($query);
        $res=$sentencia->execute([$descripcion_sugerencia,$cod_sugerencia]);

        if($res){
            echo'SE HA REALIZADO LA EJEC';
        }else{
            echo'NO SE HA REALIZADO LA EJEC';
        }
        return $res;        
    }       

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
       
        $query = $this->con->prepare("SELECT * FROM SUGERENCIAS");
        $query->execute();
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    
    }

      
}