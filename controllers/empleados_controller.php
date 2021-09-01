<?php

include_once("models/empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class EmpleadosController
{
    public function inicio()
    {
        $empleados = Empleado::consultar();
        include_once("views/empleados/inicio.php");
    }


    public function crear()
    {
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            Empleado::crear($nombre, $correo);

            header("Location:./?controller=empleados&action=inicio");
        }
        include_once("views/empleados/crear.php");
    }

    public function eliminar()
    {
        $id = $_GET['id'];

        Empleado::eliminar($id);

        header("Location:./?controller=empleados&action=inicio");
    }

    public function editar()
    {
        if( $_POST){
            print_r('si post');
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $id = $_POST['id'];
            print_r($correo . $nombre . $id);
            Empleado::editar($id, $nombre, $correo);
            header("Location:./?controller=empleados&action=inicio");
        }
        $id = $_GET['id'];
        
        $empleado = (Empleado::buscar($id));

        include_once("views/empleados/editar.php");
    }
}
