<?php

class EmpleadosController {

    public function inicio(){
        include_once("views/empleados/inicio.php");
    }
    public function crear(){
        if($_POST){
        }
        include_once("views/empleados/crear.php");
    }
    public function editar(){
        include_once("views/empleados/editar.php");
    }

}

?>