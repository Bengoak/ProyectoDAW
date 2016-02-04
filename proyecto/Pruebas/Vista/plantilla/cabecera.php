<?php
require_once __DIR__."/../View.php";

?>

<!DOCTYPE html>
    <html lang="es" xml:lang="es">
    <head>
    <title>Ejercicio Alumnos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo View::getUrlRaiz(); ?>/Vista/plantilla/css/style.css"
    media="screen" />
    <script language="JavaScript"
            type="text/javascript" src="<?php echo View::getUrlRaiz(); ?>/Vista/plantilla/js/validaciones.js"></script>
</head>
<body>
<header>
    <img src="<?php echo View::getUrlRaiz(); ?>/Vista/plantilla/images/logo.jpg" alt="logo egibide">
    <nav>
    <ul id="nav">
    <li><a href="<?php echo View::getUrlRaiz(); ?>/Vista/Alumno/listado.php">Listado</a></li>
    <li><a href="<?php echo View::getUrlRaiz(); ?>/Vista/Alumno/nuevo.php">Nuevo</a></li>
    <li><a href="<?php echo View::getUrlRaiz(); ?>/Vista/Alumno/eliminar.php">Eliminar</a></li>
    </ul>
    </nav>
</header>

