<?php
class Sugerencias{

    private $cod_sugerencia;
    private $cod_cliente;
    private $descripcion_sugerencia;
    private $estado_sugerencia;
    private $fecha;
    private $cod_empleado;
    private $desc_escala;
    private $cod_nivel;

    public function __construct($cod_sugerencia,$cod_cliente,$descripcion_sugerencia,$estado_sugerencia, $fecha, $cod_empleado, $desc_escala, $cod_nivel)
    {
          $this->cod_sugerencia = $cod_sugerencia;
          $this->cod_cliente=$cod_cliente;
          $this->descripcion_sugerencia = $descripcion_sugerencia;
          $this->estado_sugerencia=$estado_sugerencia;
          $this->fecha=$fecha;
          $this->cod_empleado=$cod_empleado;
          $this->desc_escala=$desc_escala;
          $this->cod_nivel=$cod_nivel;
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
     * Get the value of cod_empleado
     */ 
    public function getCod_empleado()
    {
        return $this->cod_empleado;
    }

    /**
     * Set the value of cod_empleado
     *
     * @return  self
     */ 
    public function setCod_empleado($cod_empleado)
    {
        $this->cod_empleado = $cod_empleado;

        return $this;
    }

    /**
     * Get the value of cod_nivel
     */ 
    public function getCod_nivel()
    {
        return $this->cod_nivel;
    }

    /**
     * Set the value of cod_nivel
     *
     * @return  self
     */ 
    public function setCod_nivel($cod_nivel)
    {
        $this->cod_nivel = $cod_nivel;

        return $this;
    }

    /**
     * Get the value of desc_escala
     */ 
    public function getDesc_escala()
    {
        return $this->desc_escala;
    }

    /**
     * Set the value of desc_escala
     *
     * @return  self
     */ 
    public function setDesc_escala($desc_escala)
    {
        $this->desc_escala = $desc_escala;

        return $this;
    }
}

?>