<?php

require_once __DIR__."/../Alumno.php";

/**
 * Created by PhpStorm.
 * User: newuser
 * Date: 15/1/16
 * Time: 13:07
 */
abstract class Conexion
{

    protected static function conectar(){

        $conexion = mysqli_connect("localhost", "root", "root", "egibide");

        return $conexion;

    }

    protected static function desconectar($conexion){
        mysqli_close($conexion);
    }

    protected static function mapear($rs, $clase){

        $objetos = array();

        switch ($clase)
        {
            case "alumnos":
                while ($fila = mysqli_fetch_array($rs))
                {
                    $objetos[] = new Alumno(null, $fila['dni'],$fila['nombre'],$fila['apellido1'],$fila['apellido2'],$fila['fecha_nacimiento']);
                }
                break;
        }

        if (mysqli_num_rows($rs) == 1)
        {
            return $objetos[0];
        }
        else
        {
            return $objetos;
        }

    }



}