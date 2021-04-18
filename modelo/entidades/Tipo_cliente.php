<?php
class Tipo_cliente{

    private $cod_tipo_cliente;
    private $nom_tipo_cliente;

    public function __construct($cod_tipo_cliente,$nom_tipo_cliente)
    {
          $this->cod_tipo_cliente = $cod_tipo_cliente;
          $this->nom_tipo_cliente=$nom_tipo_cliente;
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
     * Get the value of nom_tipo_cliente
     */ 
    public function getNom_tipo_cliente()
    {
        return $this->nom_tipo_cliente;
    }

    /**
     * Set the value of nom_tipo_cliente
     *
     * @return  self
     */ 
    public function setNom_tipo_cliente($nom_tipo_cliente)
    {
        $this->nom_tipo_cliente = $nom_tipo_cliente;

        return $this;
    }
}

?>