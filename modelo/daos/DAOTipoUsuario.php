<?php
include_once('daointerface.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/controlador/db.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/proyecto/modelo/entidades/TipoUsuario.php');

class DAOTipoUsuario extends DB 
{
    private $con;

    public function __construct()
    {
        parent::__construct();
        $this->con = $this->connect();
    }

    public function agregarRegistro(TipoUsuario $nuevoRegistro)
    {
        $query = "INSERT INTO TIPO_USUARIO VALUES (nom_tipo_usuario=?) ";
        $respuesta = $this->con->prepare($query)->execute([ 
                $nuevoRegistro->getNom_tipo_usuario()
        ]);
        return $respuesta;
    }   
    public function actualizarRegistro(TipoUsuario $registroActualizar)
    {
        $query = "UPDATE TIPO_USUARIO SET (nom_tipo_usuario=?
        WHERE cod_tipo_usuario=?";
        $respuesta = $this->con->prepare($query)->execute([ 
            $registroActualizar->getNom_tipo_usuario()
        ]);
        return $respuesta;
    }    

    public function eliminarRegistro($idRegistro)
    {
        
    }    

    public function listar()
    {
        $query = "select * from TIPO_USUARIO";
        $sentencia = $this->con->prepare($query);
        $sentencia->execute([]);
        $tipo_usuario = [];
        foreach ($sentencia->fetchall() as $key) {
            $usuarios[] = new Paquete($key[0], $key[1], $key[2], $key[3]);
        }
        return $tipo_usuario;
    }

      
}
