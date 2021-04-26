<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/proyecto/modelo/daos/DAOEmpleado.php');

class ControladorEmpleado{

    private $Empleados;


    public function agregarRegistro(Empleado $nuevoRegistro)
    {
        $this->Empleados=new DAOEmpleado();
        return $this->Empleados->agregarRegistro($nuevoRegistro);
    }


    public function actualizarRegistro(Empleado $registroActualizar)
    {
        $this->Empleados=new DAOEmpleado();
        return $this->Empleados->actualizarRegistro($registroActualizar);
    }

    public function listar()
    {
        $this->Empleados=new DAOEmpleado();
        return $this->Empleados->listar();
    }
    public function empleado_x_cod_usuario($Cod_Usuario)
    {
        $this->Empleados=new DAOEmpleado();
        return $this->Empleados->empleado_x_cod_usuario($Cod_Usuario);
    }
    public function actualizarEmpleado($nom_empleado,$cedula,$tel_empleado,$cod_nivel,$cod_empleado)
    {
        $this->Empleados=new DAOEmpleado();
        return $this->Empleados->actualizarEmpleado($nom_empleado,$cedula,$tel_empleado,$cod_nivel,$cod_empleado);
    }

}
