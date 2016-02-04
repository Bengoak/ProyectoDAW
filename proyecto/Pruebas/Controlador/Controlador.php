<?php

require_once __DIR__."/../Modelo/DB/AlumnoDB.php";
require_once __DIR__."/../Vista/Vista.php";

class Controlador
{

    public static function listado_alumnos(){
        return AlumnoDB::listado();
    }

    public static function insertar_alumno($datos){
        if(AlumnoDB::insertar($datos)){
            Vista::empezar();
        }
        else{
            echo "Error";
        }
    }

    public static function eliminar_alumno($dni){
        if(AlumnoDB::eliminar($dni)){
            Vista::empezar();
        }
        else{
            echo "Error";
        }
    }
}