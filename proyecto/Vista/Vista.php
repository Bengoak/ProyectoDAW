<?php

require_once __DIR__."/View.php";
require_once __DIR__."/../Modelo/DB/Conexion.php";

class Vista extends Conexion
{
    public static function empezar(){

        require_once __DIR__ . "/plantilla/cabecera.php";

        $conexion = parent::conectar();

        if($conexion){
            echo "Conexion correcta";
        }
        else{
            echo "conexion incorrecta";
        }

        parent::desconectar($conexion);


        require_once __DIR__ . "/plantilla/pie.php";

    }
}

?>