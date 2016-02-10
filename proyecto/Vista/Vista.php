<?php
require_once __DIR__."/View.php";
class Vista extends View
{
    public static function empezar(){
        require_once __DIR__ . "/plantilla/cabecera.php";
            ?>
            <p>Hola</p>
            <?php
        require_once __DIR__ . "/plantilla/pie.php";
    }
}
?>