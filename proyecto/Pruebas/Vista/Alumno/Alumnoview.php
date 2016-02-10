<?php

require_once __DIR__."/../../Controlador/Controlador.php";

class Alumnoview extends View
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
        <div class="container">
            <form class="col-md-6" name="insertar" id="insertar" method="post">
                <fieldset>
                    <legend>Insertar nuevo usuario</legend>
                    <div class="form-group">
                        <label class="control-label">Dni:  </label>
                        <input id="dni" class="form-control" type="text" name="dni">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nombre:</label>
                        <input id="nom" class="form-control" type="text" name="nom">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Primer apellido: </label>
                        <input id="ape1" class="form-control" type="text" name="ape1">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Segundo apellido:</label>
                        <input id="ape2" class="form-control" type="text" name="ape2">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Fecha de nacimiento: </label>
                        <input id="fecha_nac" class="form-control" type="text" name="fecha_nac">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Insertar" name="enviar" id="enviar">
                    </div>
                    <input type="hidden" name="codigo" value="1">
                </fieldset>
            </form>
        </div>
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