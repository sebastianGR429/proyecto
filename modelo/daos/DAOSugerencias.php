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
        $query = "INSERT INTO SUGERENCIAS (cod_sugerencia,cod_cliente,descripcion_sugerencia,
        estado_sugerencia,fecha,cod_empleado,desc_escala,cod_nivel) VALUES (?,?,?,?,now(),?,?,?)";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_sugerencia(), 
                $nuevoRegistro->getCod_cliente(),
                $nuevoRegistro->getDescripcion_sugerencia(),
                $nuevoRegistro->getEstado_sugerencia(),
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

    public function escalarSugerencia($cod_sugerencia, $descripcion_sugerencia, $cod_nivel)
    {
        if($cod_nivel == 1){

                $query="UPDATE SUGERENCIAS SET desc_escala= ? , estado_sugerencia= 'ESCALADO' ,cod_nivel = 2 WHERE cod_cliente = ? ";
                $sentencia = $this->con->prepare($query);
                $res=$sentencia->execute([$descripcion_sugerencia,$cod_sugerencia]);
                echo'ENTRO A CASE 1 ';
        }
        else{
            $query="UPDATE SUGERENCIAS SET desc_escala= ? , estado_sugerencia= 'ESCALADO' ,cod_nivel = 3 WHERE cod_cliente = ? ";
            $sentencia = $this->con->prepare($query);
            $res=$sentencia->execute([$descripcion_sugerencia,$cod_sugerencia]);
        }    
      

        if($res){
            echo'SE HA REALIZADO LA EJECUCIÓN DE ESCALAMIENTO  DE LA SUGERENCIA';
        }else{
            echo'NO SE HA REALIZADO LA EJECUCIÓN';
        }
        return $res;        
    }    
    public function resolverSugerencia($cod_sugerencia, $descripcion_sugerencia)
    {
        
        $query="UPDATE SUGERENCIAS SET desc_escala= ?, estado_sugerencia= 'RESUELTO'  WHERE cod_cliente = ? ";
        $sentencia = $this->con->prepare($query);
        $res=$sentencia->execute([$descripcion_sugerencia,$cod_sugerencia]);

        if($res){
            echo'SE HA REALIZADO LA EJECUCIÓN DE SOLUCION DE SUGERENCIA';
        }else{
            echo'NO SE HA REALIZADO LA EJECUCIÓN';
        }
        return $res;        
    }          

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar($Cod_nivel)
    {
       
        $query = $this->con->prepare("SELECT * FROM SUGERENCIAS WHERE cod_nivel = ?");
        $query->execute([$Cod_nivel]);
        $em = array();
        while ($fila = $query->fetch()) {
            $em[] = $fila;
        }
        return $em;
    
    }

    public function listar2()
    {
        $query = $this->con->prepare("SELECT * FROM SUGERENCIAS");
        $query->execute();
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }
    
      
}