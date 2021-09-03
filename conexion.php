<?php

class BD
{
    private static $instancia=null;

    public static function crearInstancia()
    {
        if (!isset(self::$instancia)) {
            $opcionesPDO[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;

            //self::$instancia = new PDO('mysql:host=localhost;dbname=empleados', 'root', '', $opcionesPDO);
            self::$instancia = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_8d9e722ab58ceb6', 'b0526ccb9ea09d', '337b8657', $opcionesPDO);
            //echo "conexion realizada";
        }
        return self::$instancia;
    }
}
