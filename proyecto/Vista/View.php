<?php

/**
 * Created by PhpStorm.
 * User: newuser
 * Date: 15/1/16
 * Time: 12:01
 */
class View
{
    protected static $url_raiz = "http://192.168.33.10/ProyectoDAW/proyecto/Pruebas";

    /**
     * @return string
     */
    protected static function getUrlRaiz()
    {
        return self::$url_raiz;
    }

    /**
     * @param string $url_raiz
     */
    protected static function setUrlRaiz($url_raiz)
    {
        self::$url_raiz = $url_raiz;
    }
}