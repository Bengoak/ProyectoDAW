<?php

require_once __DIR__."/Controlador.php";

if(isset($_POST['enviar'])){
    switch($_POST['codigo']){
        case 1:
            Controlador::insertar_alumno($_POST);
            break;
        case 2:
            Controlador::eliminar_alumno($_POST['dni']);
            break;
    }
}


?>