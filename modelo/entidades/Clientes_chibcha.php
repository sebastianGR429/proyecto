<?php
class Clientes_chibcha{

    private $cod_cliente_c;
    private $cod_cliente;
    private $cod_paquete;
    private $plan_pago;
    private $tipo_dominio;
    private $dominio;
    private $fecha_pago;
    private $direccion_servidor;
    private $plataforma;

    public function __construct($cod_cliente_c,$cod_cliente,$cod_paquete,$plan_pago,$tipo_dominio,$dominio,$fecha_pago,$direccion_servidor,$plataforma)
  {
        $this->cod_paquete = $cod_paquete;
        $this->cod_cliente_c=$cod_cliente_c;
        $this->cod_cliente = $cod_cliente;
        $this->plan_pago=$plan_pago;
        $this->tipo_dominio=$tipo_dominio;
        $this->dominio=$dominio;
        $this->fecha_pago=$fecha_pago;
        $this->direccion_servidor=$direccion_servidor;
        $this->plataforma=$plataforma;

   }


    /**
     * Get the value of cod_cliente_c
     */ 
    public function getCod_cliente_c()
    {
        return $this->cod_cliente_c;
    }

    /**
     * Set the value of cod_cliente_c
     *
     * @return  self
     */ 
    public function setCod_cliente_c($cod_cliente_c)
    {
        $this->cod_cliente_c = $cod_cliente_c;

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
     * Get the value of cod_paquete
     */ 
    public function getCod_paquete()
    {
        return $this->cod_paquete;
    }

    /**
     * Set the value of cod_paquete
     *
     * @return  self
     */ 
    public function setCod_paquete($cod_paquete)
    {
        $this->cod_paquete = $cod_paquete;

        return $this;
    }

    /**
     * Get the value of plan_pago
     */ 
    public function getPlan_pago()
    {
        return $this->plan_pago;
    }

    /**
     * Set the value of plan_pago
     *
     * @return  self
     */ 
    public function setPlan_pago($plan_pago)
    {
        $this->plan_pago = $plan_pago;

        return $this;
    }

    /**
     * Get the value of tipo_dominio
     */ 
    public function getTipo_dominio()
    {
        return $this->tipo_dominio;
    }

    /**
     * Set the value of tipo_dominio
     *
     * @return  self
     */ 
    public function setTipo_dominio($tipo_dominio)
    {
        $this->tipo_dominio = $tipo_dominio;

        return $this;
    }

    /**
     * Get the value of dominio
     */ 
    public function getDominio()
    {
        return $this->dominio;
    }

    /**
     * Set the value of dominio
     *
     * @return  self
     */ 
    public function setDominio($dominio)
    {
        $this->dominio = $dominio;

        return $this;
    }

    /**
     * Get the value of fecha_pago
     */ 
    public function getFecha_pago()
    {
        return $this->fecha_pago;
    }

    /**
     * Set the value of fecha_pago
     *
     * @return  self
     */ 
    public function setFecha_pago($fecha_pago)
    {
        $this->fecha_pago = $fecha_pago;

        return $this;
    }

    /**
     * Get the value of direccion_servidor
     */ 
    public function getDireccion_servidor()
    {
        return $this->direccion_servidor;
    }

    /**
     * Set the value of direccion_servidor
     *
     * @return  self
     */ 
    public function setDireccion_servidor($direccion_servidor)
    {
        $this->direccion_servidor = $direccion_servidor;

        return $this;
    }

    /**
     * Get the value of plataforma
     */ 
    public function getPlataforma()
    {
        return $this->plataforma;
    }

    /**
     * Set the value of plataforma
     *
     * @return  self
     */ 
    public function setPlataforma($plataforma)
    {
        $this->plataforma = $plataforma;

        return $this;
    }
}

?>