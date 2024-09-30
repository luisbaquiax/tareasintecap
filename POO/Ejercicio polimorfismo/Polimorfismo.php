<?php
class Vehiculo
{
    private $nombre;
    private $marca;
    private $modelo;

    /**
     * @param $nombre
     * @param $marca
     * @param $modelo
     */
    public function __construct($nombre, $marca, $modelo)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function moverse()
    {

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
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

}
class Moto extends Vehiculo
{
    private $cilindraje;

    /**
     * @param $cilindraje
     */
    public function __construct($nombre, $marca, $modelo, $cilindraje)
    {
        parent:: __construct($nombre, $marca, $modelo);
        $this->cilindraje = $cilindraje;
    }

    /**
     * @return mixed
     */
    public function getCilindraje()
    {
        return $this->cilindraje;
    }

    /**
     * @param mixed $cilindraje
     */
    public function setCilindraje($cilindraje)
    {
        $this->cilindraje = $cilindraje;
    }

    public function moverse()
    {
       echo "La moto se mueve en dos rueda";
    }

}

class Bus extends Vehiculo
{
    private $cantidadBancos;

    public function __construct($nombre, $marca, $modelo, $cantidadBancos){
        parent:: __construct($nombre, $marca, $modelo);
        $this->cantidadBancos = $cantidadBancos;
    }

    public function moverse(){
        echo "El bus se mueve en cuatro ruedas";
    }

    /**
     * @return mixed
     */
    public function getCantidadBancos()
    {
        return $this->cantidadBancos;
    }

    /**
     * @param mixed $cantidadBancos
     */
    public function setCantidadBancos($cantidadBancos)
    {
        $this->cantidadBancos = $cantidadBancos;
    }

}
echo "<h2>Instancia de moto que extiende de Vehiculo</h2><br>";
$motoNueva = new Moto("Moto 1", "Zuzuki","2020", 5);
echo "<h3>Moto moviendose</h3><br>";
$motoNueva->moverse();
echo "<h2>Instancia de Bus que extiende de Vehiculo</h2><br>";
$bus = new Bus("Bus escolar","Honda","2024",20);
echo "<h3>Bus moviendose</h3><br>";
$bus->moverse();
