<?php

require_once __DIR__."/Conexion.php";
require_once __DIR__."/../Alumno.php";

class AlumnoDB extends Conexion
{

    private static $tabla = "alumnos";

    public static function listado(){

        $conexion = Conexion::conectar();

        $rs = mysqli_query($conexion, 'select * from egibide.alumnos');
        mysqli_set_charset($conexion, "utf-8");

       /* $objetos = array();
        while($fila = mysqli_fetch_array($rs)){
            $objetos[] = new alumno(null, $fila['dni'], $fila['nombre'], $fila['apellido1'], $fila['apellido2'], $fila['fecha_nacimiento']);
        }
*/

        $alumnos = parent::mapear($rs, "alumnos");
        Conexion::desconectar($conexion);

        return $alumnos;

    }

    public static function insertar($datos){

        $dni = $datos['dni'];
        $nombre = $datos['nom'];
        $apellido1 = $datos['ape1'];
        $apellido2 = $datos['ape2'];
        $fechanacimiento = $datos['fecha_nac'];

        $conexion = Conexion::conectar();

        $sentencia = "insert into egibide.alumnos (dni, nombre, apellido1, apellido2, fecha_nacimiento)values ('".$dni."','".$nombre."', '".$apellido1."', '".$apellido2."', '".$fechanacimiento."')";

        mysqli_query($conexion, $sentencia) or die(mysqli_error($conexion));

        if(mysqli_affected_rows($conexion) == 1){
            Conexion::desconectar($conexion);
            return true;
        }
        else{
            Conexion::desconectar($conexion);
            return false;
        }

    }



    public static function eliminar($dni){

        $conexion = Conexion::conectar();

        $sentencia = "select id from egibide.alumnos where dni = '".$dni."'";

        $rs = mysqli_query($conexion, $sentencia) or die(mysqli_error($conexion));
        $fila = mysqli_fetch_array($rs);
        $id = $fila['id'];
        $sentencia = "delete from egibide.alumnos where id = '".$id."'";

        mysqli_query($conexion, $sentencia) or die(mysqli_error($conexion));


        if(mysqli_affected_rows($conexion) == 1){
            Conexion::desconectar($conexion);
            return true;
        }
        else{
            Conexion::desconectar($conexion);
            return false;
        }
    }

}