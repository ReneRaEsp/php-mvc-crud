<?php

class Empleado
{

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id, $nombre, $correo)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public static function crear($nombre, $correo)
    {
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("INSERT INTO empleados(nombre, correo) VALUES(?, ?)");
        $sql->execute(array($nombre, $correo));
    }

    public static function consultar(){
        $listaEmpleados = [];
        $conexionBD = BD::crearInstancia();
        $sql = $conexionBD->query("SELECT * FROM empleados");

        foreach($sql->fetchAll() as $empleado){
            $listaEmpleados[] = new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
        }
        return $listaEmpleados;
    }

    public static function buscar($id){
        
        $conexionBD = BD::crearInstancia();
        
        $sql = $conexionBD->prepare("SELECT `id`,`nombre`,`correo` FROM `empleados` WHERE `empleados`.`id` = ?");
        $sql->execute(array($id));
        $empleado = $sql->fetch();
        return new Empleado($empleado['id'], $empleado['nombre'], $empleado['correo']);
    }
    
    public static function eliminar($id)
    {
        $conexionBD = BD::crearInstancia();

        $sql = $conexionBD->prepare("DELETE FROM empleados WHERE empleados.id = ?");
        $sql->execute(array($id));
    }

    public static function editar($id, $nombre, $correo){

        $conexionBD = BD::crearInstancia();
        
        $sql = $conexionBD->prepare("UPDATE empleados SET nombre = ?, correo = ? WHERE empleados.id = ?");
        $sql->execute(array($nombre, $correo, $id));
    }
}