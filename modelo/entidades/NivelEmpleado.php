<?php
class NivelEmpleado{

    private $cod_nivel;
    private $nom_nivel;

    public function __construct($cod_nivel,  $nom_nivel)
    {
        $this->cod_nivel = $cod_nivel;
        $this->nom_nivel = $nom_nivel;
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
     * Get the value of nom_nivel
     */ 
    public function getNom_nivel()
    {
        return $this->nom_nivel;
    }

    /**
     * Set the value of nom_nivel
     *
     * @return  self
     */ 
    public function setNom_nivel($nom_nivel)
    {
        $this->nom_nivel = $nom_nivel;

        return $this;
    }
}

?>