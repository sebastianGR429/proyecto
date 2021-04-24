<?php
class Comisiones{

    private $cod_comision;
    private $cod_cliente;
    private $valor_comision;
    private $fecha_comision;


    public function __construct($cod_comision,  $cod_cliente, $valor_comision, $fecha_comision)
    {
        $this->cod_comision = $cod_comision;
        $this->cod_cliente = $cod_cliente;
        $this->valor_comision = $valor_comision;
        $this->fecha_comision = $fecha_comision;
    }

 
    

    /**
     * Get the value of cod_comision
     */ 
    public function getCod_comision()
    {
        return $this->cod_comision;
    }

    /**
     * Set the value of cod_comision
     *
     * @return  self
     */ 
    public function setCod_comision($cod_comision)
    {
        $this->cod_comision = $cod_comision;

        return $this;
    }

    /**
     * Get the value of cod_cliente
     */ 
    public function getCod_cliente()
    {
        return $this->cod_cliente;
    }

    /**
     * Set the value of cod_cliente
     *
     * @return  self
     */ 
    public function setCod_cliente($cod_cliente)
    {
        $this->cod_cliente = $cod_cliente;

        return $this;
    }

    /**
     * Get the value of valor_comision
     */ 
    public function getValor_comision()
    {
        return $this->valor_comision;
    }

    /**
     * Set the value of valor_comision
     *
     * @return  self
     */ 
    public function setValor_comision($valor_comision)
    {
        $this->valor_comision = $valor_comision;

        return $this;
    }

    /**
     * Get the value of fecha_comision
     */ 
    public function getFecha_comision()
    {
        return $this->fecha_comision;
    }

    /**
     * Set the value of fecha_comision
     *
     * @return  self
     */ 
    public function setFecha_comision($fecha_comision)
    {
        $this->fecha_comision = $fecha_comision;

        return $this;
    }
}

?>