<?php
class Dispositivo
{
    protected $marca;

    /**
     * @param $marca
     */
    public function __construct($marca)
    {
        $this->marca = $marca;
    }

    public function encender()
    {
        echo "El dispositivo ".$this->marca." está encendido ahora.<br>";
    }

    public function apagar(){
        echo "EL dispositivo ".$this->marca." se ha apagado.<br>";
    }
}
class Computadora extends Dispositivo
{
    public function __construct($marca){
        parent::__construct($marca);
    }
    public function encender(){
        echo "La computadora <strong>".$this->marca."</strong> se ha encendido ahora.<br>";
    }
    public function apagar(){
        echo "La computadora <strong>".$this->marca."</strong> se ha apagado ahora.<br>";
    }

    public function programar(){
        echo "La computadora <strong>".$this->marca."</strong> tiene un editor de codigo para programar, y está listo para programar.<br>";
    }

    public function crerDocumento()
    {
        echo "La computadora <strong>".$this->marca."</strong> ha creado el documento.<br>";
    }
}
class Tablet extends Dispositivo
{
    public function __construct($marca)
    {
        parent::__construct($marca);
    }
    public function encender(){
        echo "La tablet <strong>".$this->marca."</strong> está encendido ahora.<br>";
    }
    public function apagar(){
        echo "La tablet <strong>".$this->marca."</strong> se ha apagado ahora.<br>";
    }

    public function dibujar($dibujo){
        echo "La tablet <strong>".$this->marca."</strong> ha dibujado: ${dibujo} .<br>";
    }

    public function navegar()
    {
        echo "La tablet <strong>".$this->marca."</strong> está navegando por internet ahora.<br>";
    }
}
echo "<h3>Computadora</h3>";
$computadora = new Computadora("Dell");
$computadora->encender();
$computadora->crerDocumento();
$computadora->programar();
$computadora->apagar();
echo "<h3>Tablet</h3>";
$tablet = new Tablet("Samsung");
$tablet->encender();
$tablet->dibujar("Cuadrado");
$tablet->navegar();
$tablet->apagar();