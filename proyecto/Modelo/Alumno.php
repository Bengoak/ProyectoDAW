<?php

/**
 * Created by PhpStorm.
 * User: newuser
 * Date: 15/1/16
 * Time: 13:01
 */
class Alumno
{
    private $codigo;
    private $dni;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $fecha_nac;

    /**
     * Alumno constructor.
     * @param $codigo
     * @param $dni
     * @param $nombre
     * @param $apellido1
     * @param $apellido2
     * @param $fecha_nac
     */
    public function __construct($codigo=null, $dni=null, $nombre=null, $apellido1=null, $apellido2=null, $fecha_nac=null)
    {
        $this->codigo = $codigo;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->fecha_nac = $fecha_nac;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param mixed $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param mixed $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * @return mixed
     */
    public function getFechaNac()
    {
        return $this->fecha_nac;
    }

    /**
     * @param mixed $fecha_nac
     */
    public function setFechaNac($fecha_nac)
    {
        $this->fecha_nac = $fecha_nac;
    }
}

?>