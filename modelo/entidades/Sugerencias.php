<?php
class Sugerencias{

    private $cod_sugerencia;
    private $cod_cliente;
    private $descripcion_sugerencia;
    private $estado_sugerencia;
    private $fecha;
    private $nivel;

    public function __construct($cod_sugerencia,$cod_cliente,$descripcion_sugerencia,$estado_sugerencia, $fecha, $nivel)
    {
          $this->cod_sugerencia = $cod_sugerencia;
          $this->cod_cliente=$cod_cliente;
          $this->descripcion_sugerencia = $descripcion_sugerencia;
          $this->estado_sugerencia=$estado_sugerencia;
          $this->fecha=$fecha;
          $this->nivel=$nivel;
     }

     
    

    /**
     * Get the value of cod_sugerencia
     */ 
    public function getCod_sugerencia()
    {
        return $this->cod_sugerencia;
    }

    /**
     * Set the value of cod_sugerencia
     *
     * @return  self
     */ 
    public function setCod_sugerencia($cod_sugerencia)
    {
        $this->cod_sugerencia = $cod_sugerencia;

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
     * Get the value of descripcion_sugerencia
     */ 
    public function getDescripcion_sugerencia()
    {
        return $this->descripcion_sugerencia;
    }

    /**
     * Set the value of descripcion_sugerencia
     *
     * @return  self
     */ 
    public function setDescripcion_sugerencia($descripcion_sugerencia)
    {
        $this->descripcion_sugerencia = $descripcion_sugerencia;

        return $this;
    }

    /**
     * Get the value of estado_sugerencia
     */ 
    public function getEstado_sugerencia()
    {
        return $this->estado_sugerencia;
    }

    /**
     * Set the value of estado_sugerencia
     *
     * @return  self
     */ 
    public function setEstado_sugerencia($estado_sugerencia)
    {
        $this->estado_sugerencia = $estado_sugerencia;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of nivel
     */ 
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set the value of nivel
     *
     * @return  self
     */ 
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }
}

?>