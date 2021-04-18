<?php
class TipoUsuario{

    private $cod_tipo_usuario;
    private $nom_tipo_usuario;

    public function __construct($cod_tipo_usuario,  $nom_tipo_usuario)
    {
        $this->cod_tipo_usuario = $cod_tipo_usuario;
        $this->nom_tipo_usuario = $nom_tipo_usuario;
    }

 

 

    /**
     * Get the value of cod_tipo_usuario
     */ 
    public function getCod_tipo_usuario()
    {
        return $this->cod_tipo_usuario;
    }

    /**
     * Set the value of cod_tipo_usuario
     *
     * @return  self
     */ 
    public function setCod_tipo_usuario($cod_tipo_usuario)
    {
        $this->cod_tipo_usuario = $cod_tipo_usuario;

        return $this;
    }

    /**
     * Get the value of nom_tipo_usuario
     */ 
    public function getNom_tipo_usuario()
    {
        return $this->nom_tipo_usuario;
    }

    /**
     * Set the value of nom_tipo_usuario
     *
     * @return  self
     */ 
    public function setNom_tipo_usuario($nom_tipo_usuario)
    {
        $this->nom_tipo_usuario = $nom_tipo_usuario;

        return $this;
    }
}

?>