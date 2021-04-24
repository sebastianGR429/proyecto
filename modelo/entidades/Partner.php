<?php
class Partner{
    
    private $cod_partner;
    private $nom_partner;
    private $correo_partner;
    private $tel_partner;

    public function __construct($cod_partner,$nom_partner,$correo_partner,$tel_partner){
        $this->cod_partner=$cod_partner;
        $this->nom_partner=$nom_partner;
        $this->correo_partner=$correo_partner;
        $this->tel_partner=$tel_partner;
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
     * Get the value of nom_partner
     */ 
    public function getNom_partner()
    {
        return $this->nom_partner;
    }

    /**
     * Set the value of nom_partner
     *
     * @return  self
     */ 
    public function setNom_partner($nom_partner)
    {
        $this->nom_partner = $nom_partner;

        return $this;
    }

    /**
     * Get the value of correo_partner
     */ 
    public function getCorreo_partner()
    {
        return $this->correo_partner;
    }

    /**
     * Set the value of correo_partner
     *
     * @return  self
     */ 
    public function setCorreo_partner($correo_partner)
    {
        $this->correo_partner = $correo_partner;

        return $this;
    }

    /**
     * Get the value of tel_partner
     */ 
    public function getTel_partner()
    {
        return $this->tel_partner;
    }

    /**
     * Set the value of tel_partner
     *
     * @return  self
     */ 
    public function setTel_partner($tel_partner)
    {
        $this->tel_partner = $tel_partner;

        return $this;
    }
}