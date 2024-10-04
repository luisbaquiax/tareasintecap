<?php
class Jugador
{
    private $nombre;
    private $punteo;
    private $gano;

    /**
     * @param $nombre
     * @param $punteo
     * @param $gano
     */
    public function __construct($nombre, $punteo, $gano)
    {
        $this->nombre = $nombre;
        $this->punteo = $punteo;
        $this->gano = $gano;
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
    public function getPunteo()
    {
        return $this->punteo;
    }

    /**
     * @param mixed $punteo
     */
    public function setPunteo($punteo)
    {
        $this->punteo = $punteo;
    }

    /**
     * @return mixed
     */
    public function getGano()
    {
        return $this->gano;
    }

    /**
     * @param mixed $gano
     */
    public function setGano($gano)
    {
        $this->gano = $gano;
    }

}