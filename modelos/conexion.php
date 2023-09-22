<?php

class Conexion
{

    static public function conectar()
    {

        /*
        Parametros para la conexion por PDO+-
        PDO("nombre del servidor;nombre de la base de datos","usuario","contraseña")
        */
        $link = new PDO("mysql:host=localhost;dbname=ecorecicla", 
        "root", 
        "");

        $link->exec("set names utf8");

        return $link;
    }
}
