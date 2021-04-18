<?php
class Solicitud{

    private $cod_solicitud;
    private $cod_cliente;
    private $cod_partner;
    private $tipo_dominio;
    private $dominio;
    
    public function __construct($cod_solicitud, $cod_cliente,$cod_partner,$tipo_dominio,$dominio)
    {
        $this->cod_solicitud=$cod_solicitud;
        $this->cod_cliente=$cod_cliente;
        $this->cod_partner=$cod_partner;
        $this->tipo_dominio=$tipo_dominio;
        $this->dominio=$dominio;    
    }

    /**
     * Get the value of cod_solicitud
     */ 
    public function getCod_solicitud()
    {
        return $this->cod_solicitud;
    }

    /**
     * Set the value of cod_solicitud
     *
     * @return  self
     */ 
    public function setCod_solicitud($cod_solicitud)
    {
        $this->cod_solicitud = $cod_solicitud;

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
     * Get the value of cod_partner
     */ 
    public function getCod_partner()
    {
        return $this->cod_partner;
    }

    /**
     * Set the value of cod_partner
     *
     * @return  self
     */ 
    public function setCod_partner($cod_partner)
    {
        $this->cod_partner = $cod_partner;

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
}
    