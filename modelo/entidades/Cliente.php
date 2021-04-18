<?php
class Cliente{

    private $cod_cliente;
    private $cod_usuario;
    private $nom_cliente;
    private $cedula_cliente;
    private $tel_cliente;
    private $cod_tipo_cliente;
    private $cantidad_dominios;



    public function __construct($cod_cliente,  $cod_usuario, $nom_cliente, $cedula_cliente, $tel_cliente, $cod_tipo_cliente, $cantidad_dominios)
    {
        $this->cod_cliente = $cod_cliente;
        $this->cod_usuario = $cod_usuario;
        $this->nom_cliente = $nom_cliente;
        $this->cedula_cliente = $cedula_cliente;
        $this->tel_cliente = $tel_cliente;
        $this->cod_tipo_cliente = $cod_tipo_cliente;
        $this->cantidad_dominios = $cantidad_dominios;
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
     * Get the value of cod_usuario
     */ 
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Set the value of cod_usuario
     *
     * @return  self
     */ 
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    /**
     * Get the value of nom_cliente
     */ 
    public function getNom_cliente()
    {
        return $this->nom_cliente;
    }

    /**
     * Set the value of nom_cliente
     *
     * @return  self
     */ 
    public function setNom_cliente($nom_cliente)
    {
        $this->nom_cliente = $nom_cliente;

        return $this;
    }

    /**
     * Get the value of cedula_cliente
     */ 
    public function getCedula_cliente()
    {
        return $this->cedula_cliente;
    }

    /**
     * Set the value of cedula_cliente
     *
     * @return  self
     */ 
    public function setCedula_cliente($cedula_cliente)
    {
        $this->cedula_cliente = $cedula_cliente;

        return $this;
    }

    /**
     * Get the value of tel_cliente
     */ 
    public function getTel_cliente()
    {
        return $this->tel_cliente;
    }

    /**
     * Set the value of tel_cliente
     *
     * @return  self
     */ 
    public function setTel_cliente($tel_cliente)
    {
        $this->tel_cliente = $tel_cliente;

        return $this;
    }

    /**
     * Get the value of cod_tipo_cliente
     */ 
    public function getCod_tipo_cliente()
    {
        return $this->cod_tipo_cliente;
    }

    /**
     * Set the value of cod_tipo_cliente
     *
     * @return  self
     */ 
    public function setCod_tipo_cliente($cod_tipo_cliente)
    {
        $this->cod_tipo_cliente = $cod_tipo_cliente;

        return $this;
    }

    /**
     * Get the value of cantidad_dominios
     */ 
    public function getCantidad_dominios()
    {
        return $this->cantidad_dominios;
    }

    /**
     * Set the value of cantidad_dominios
     *
     * @return  self
     */ 
    public function setCantidad_dominios($cantidad_dominios)
    {
        $this->cantidad_dominios = $cantidad_dominios;

        return $this;
    }
}

?>