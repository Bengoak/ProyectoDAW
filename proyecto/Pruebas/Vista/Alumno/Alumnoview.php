<?php

require_once __DIR__."/../../Controlador/Controlador.php";

class Alumnoview
{

    public static function listado(){

        require_once __DIR__.'/../plantilla/cabecera.php';

        $alumno = Controlador::listado_alumnos();


        ?>
        <table border="1">
            <?php
            foreach($alumno as $valor){
                ?>
                <tr>
                    <td><?php echo $valor->getDni()?></td>
                    <td><?php echo $valor->getNombre()?></td>
                    <td><?php echo $valor->getApellido1()?></td>
                    <td><?php echo $valor->getApellido2()?></td>
                    <td><?php echo $valor->getFechaNac()?></td>
                </tr>
                <?php
            }
            ?>
        </table>
        <?php


        require_once __DIR__."/../plantilla/pie.php";

    }


    public static function insertar(){

        require_once __DIR__."/../plantilla/cabecera.php";

        ?>

        <form name="insertar" method="post" action="<?php echo View::getUrlRaiz();?>/Controlador/Puente.php">
            <fieldset>
                <legend>Insertar nuevo usuario</legend>
                Dni: <input type="text" name="dni"><br>
                Nombre: <input type="text" name="nom"><br>
                Primer apellido: <input type="text" name="ape1"><br>
                Segundo apellido: <input type="text" name="ape2"><br>
                Fecha de nacimiento: <input type="text" name="fecha_nac"><br><br>
                <input type="submit" value="Insertar" name="enviar">
                <input type="hidden" name="codigo" value="1">
            </fieldset>
        </form>

        <?php

        require_once __DIR__."/../plantilla/pie.php";
    }


    public static function borrar(){

        require_once __DIR__."/../plantilla/cabecera.php";

        ?>

        <form name="insertar" method="post" action="<?php echo View::getUrlRaiz();?>/Controlador/Puente.php">
            <fieldset>
                <legend>Eliminar por usuario</legend>
                Dni: <input type="text" name="dni"><br><br>
                <input type="submit" value="Borrar" name="enviar">
                <input type="hidden" name="codigo" value="2">
            </fieldset>
        </form>

        <?php

        require_once __DIR__."/../plantilla/pie.php";
    }

}