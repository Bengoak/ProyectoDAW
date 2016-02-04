<?php

/**
 * Created by PhpStorm.
 * User: newuser
 * Date: 15/1/16
 * Time: 12:01
 */
class View
{
    private static $url_raiz = "http://192.168.33.10/PHP/ejer25_repaso2";

    /**
     * @return string
     */
    public static function getUrlRaiz()
    {
        return self::$url_raiz;
    }

    /**
     * @param string $url_raiz
     */
    public static function setUrlRaiz($url_raiz)
    {
        self::$url_raiz = $url_raiz;
    }
}