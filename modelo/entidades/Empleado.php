<?php
class Empleado{
    
    private $cod_empleado;
    private $cod_usuario;
    private $nom_empleado;
    private $tel_empleado;
    private $cod_nivel;
    private $ced_empleado;
    

    public function __construct($cod_empleado,$cod_usuario,$nom_empleado,$tel_empleado,$cod_nivel,$ced_empleado){
        $this->cod_empleado=$cod_empleado;
        $this->cod_usuario=$cod_usuario;
        $this->nom_empleado=$nom_empleado;
        $this->tel_empleado=$tel_empleado;
        $this->cod_nivel=$cod_nivel;  
        $this->ced_empleado=$ced_empleado;    
    }

    public function getCod_empleado()
    {
        return $this->cod_empleado;
    }
    public function setCod_empleado($cod_empleado)
    {
        $this->cod_empleado = $cod_empleado;

        return $this;
    }

    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }
    public function setCod_usuario($cod_usuario)
    {
        $this->cod_usuario = $cod_usuario;

        return $this;
    }

    public function getNom_empleado()
    {
        return $this->nom_empleado;
    }
    public function setNom_empleado($nom_empleado)
    {
        $this->nom_empleado = $nom_empleado;

        return $this;
    }


    public function getTel_empleado()
    {
        return $this->tel_empleado;
    }
    public function setTel_empleado($tel_empleado)
    {
        $this->tel_empleado = $tel_empleado;

        return $this;
    }


    public function getCod_nivel()
    {
        return $this->cod_nivel;
    }
    public function setCod_nivel($cod_nivel)
    {
        $this->cod_nivel = $cod_nivel;

        return $this;
    }

    

    /**
     * Get the value of ced_empleado
     */ 
    public function getCed_empleado()
    {
        return $this->ced_empleado;
    }

    /**
     * Set the value of ced_empleado
     *
     * @return  self
     */ 
    public function setCed_empleado($ced_empleado)
    {
        $this->ced_empleado = $ced_empleado;

        return $this;
    }
}