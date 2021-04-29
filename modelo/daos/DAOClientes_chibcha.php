<?php

include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/Clientes_chibcha.php');

class DAOClientes_chimbcha extends DB
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(Clientes_chibcha $nuevoRegistro)
    {
        $query = "INSERT INTO CLIENTES_CHIBCHA (cod_cliente_c,cod_cliente,cod_paquete,plan_pago,
        tipo_dominio,dominio,fecha_pago,direccion_servidor,plataforma) VALUES(?,?,?,?,?,?,now(),?,?)";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getCod_cliente_c(), 
                $nuevoRegistro->getCod_cliente(),
                $nuevoRegistro->getCod_paquete(),
                $nuevoRegistro->getPlan_pago(),
                $nuevoRegistro->getTipo_dominio(),
                $nuevoRegistro->getDominio(),
                $nuevoRegistro->getDireccion_servidor(),
                $nuevoRegistro->getPlataforma()
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(Clientes_chibcha $registroActualizar)
    {
        $query = "UPDATE CLIENTES_CHIBCHA SET cod_cliente_c=?,cod_cliente=?,cod_paquete=?,plan_pago=?,tipo_dominio=?,dominio=?,fecha_pago=?,direccion_servidor=?
        WHERE cod_cleinte_c=?";
        $respuesta = $this->con->prepare($query)->execute([ 
                $registroActualizar->getCod_cliente_c(), 
                $registroActualizar->getCod_cliente()(),
                $registroActualizar->getCod_paquete(),
                $registroActualizar->getPlan_pago(),
                $registroActualizar->getTipo_dominio(),
                $registroActualizar->getDominio(),
                $registroActualizar->getFecha_pago(),
                $registroActualizar->getDireccion_servidor()
        ]);
        return $respuesta;
    }    
    public function actualizarPaquete($cod_paquete,$cod_cliente_c)
    {
        $query = "UPDATE CLIENTES_CHIBCHA SET cod_paquete=?
        WHERE cod_cliente_c=?";
        $respuesta = $this->con->prepare($query)->execute([
            $cod_paquete,$cod_cliente_c
        ]);
        return $respuesta;
    }    
    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = $this->con->prepare("SELECT * FROM CLIENTES_CHIBCHA");
        $query->execute();
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }

    public function listarxcliente($nom_cliente)
    {
        $query = $this->con->prepare("SELECT * FROM dominios_cliente WHERE nom_cliente=?");
        $query->execute([$nom_cliente]);
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }
    
    public function listarTodos()
    {
        $query = $this->con->prepare("SELECT * FROM dominios_cliente");
        $query->execute();
        $par = array();
        while ($fila = $query->fetch()) {
            $par[] = $fila;
        }
        return $par;
    }

    public function validarTarjeta($numero, $franq)
    {
        return true;
    }

      
}