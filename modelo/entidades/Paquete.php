<?php
class Paquete{

    private $cod_paquete;
    private $nom_paquete;
    private $desc_paquete;
    private $costo_paquete;

  public function __construct($cod_paquete,$nom_paquete,$desc_paquete,$costo_paquete)
  {
        $this->cod_paquete = $cod_paquete;
        $this->nom_paquete=$nom_paquete;
        $this->desc_paquete = $desc_paquete;
        $this->costo_paquete=$costo_paquete;
   }

    public function getCod_paquete()
    {
        return $this->cod_paquete;
    }
    public function setCod_paquete($cod_paquete)
    {
        $this->cod_paquete = $cod_paquete;

        return $this;
    }


    public function getNom_paquete()
    {
        return $this->nom_paquete;
    }
    public function setNom_paquete($nom_paquete)
    {
        $this->nom_paquete = $nom_paquete;

        return $this;
    }

    
    public function getDesc_paquete()
    {
        return $this->desc_paquete;
    }
    public function setDesc_paquete($desc_paquete)
    {
        $this->desc_paquete = $desc_paquete;

        return $this;
    }


    public function getCosto_paquete()
    {
        return $this->costo_paquete;
    }
    public function setCosto_paquete($costo_paquete)
    {
        $this->costo_paquete = $costo_paquete;

        return $this;
    }
}

?>