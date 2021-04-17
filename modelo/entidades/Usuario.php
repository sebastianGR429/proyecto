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

   

}

?>