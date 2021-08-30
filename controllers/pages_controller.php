<?php
class PagesController
{
    public function inicio()
    {
        include_once("views/pages/inicio.php");
    }
    
    public function sistema()
    {
        include_once("views/pages/sistema.php");
    }

    public function tailwindcss()
    {
        include_once("views/pages/tailwindcss.php");
    }

    public function error()
    {
        include_once("views/pages/error.php");
    }
}
