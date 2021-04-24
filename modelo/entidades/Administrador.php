<?php
class Administrador{

    private $cod_administrador;
    private $cod_usuario;
    private $nom_administrador;
    private $tel_administrador;
   

  public function __construct($cod_administrador,$cod_usuario,$nom_administrador,$tel_administrador)
  {
        $this->cod_administrador = $cod_administrador;
        $this->cod_usaurio = $cod_usuario;
        $this->nom_administrador = $nom_administrador;
        $this->tel_administrador = $tel_administrador;
   }
    
    public function getCod_administrador()
    {
        return $this->cod_administrador;
    }
    public function setCod_administrador($cod_administrador)
    {
        $this->cod_administrador = $cod_administrador;

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
    
    public function getNom_administrador()
    {
        return $this->nom_administrador;
    }
    public function setNom_administrador($nom_administrador)
    {
        $this->nom_administrador = $nom_administrador;

        return $this;
    }
   
  
    public function getTel_administrador()
    {
        return $this->tel_administrador;
    }

       public function setTel_administrador($tel_administrador)
    {
        $this->tel_administrador = $tel_administrador;

        return $this;
    }
}

?>