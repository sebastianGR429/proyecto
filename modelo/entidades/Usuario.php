<?php
class Usuario{

    private $cod_usuario;
    private $nom_usuario;
    private $cod_tipo_usuario;
    private $contraseña;
    private $estado_usuario;
    private $correo;

  public function __construct($cod_usuario,$nom_usuario,$cod_tipo_usuario,$contraseña,$estado_usuario,$correo)
  {
        $this->cod_usuario = $cod_usuario;
        $this->nom_usuario=$nom_usuario;
        $this->cod_tipo_usuario = $cod_tipo_usuario;
        $this->contraseña=$contraseña;
        $this->estado_usuario = $estado_usuario;
        $this->correo=$correo;
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

    
    public function getNom_usuario()
    {
        return $this->nom_usuario;
    }
    public function setNom_usuario($nom_usuario)
    {
        $this->nom_usuario = $nom_usuario;

        return $this;
    }

    
    public function getCod_tipo_usuario()
    {
        return $this->cod_tipo_usuario;
    }
    public function setCod_tipo_usuario($cod_tipo_usuario)
    {
        $this->cod_tipo_usuario = $cod_tipo_usuario;

        return $this;
    }

    
    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    
    public function getEstado_usuario()
    {
        return $this->estado_usuario;
    }
    public function setEstado_usuario($estado_usuario)
    {
        $this->estado_usuario = $estado_usuario;

        return $this;
    }

    
    public function getCorreo()
    {
        return $this->correo;
    }
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }
}

?>