<?php
class Figura
{
    public function calcularArea()
    {

    }
}

class Circulo extends Figura
{
    public $radio;

    public function __construct($radio)
    {
        $this->radio = $radio;
    }
    public function calcularArea()
    {
        return $this->radio **2 * pi();
    }
}
class Rectangulo extends Figura {
    public $ancho;
    public $alto;

    public function __construct($ancho, $alto)
    {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea()
    {
        return $this->ancho * $this->alto;
    }
}

$rectangulo = new Rectangulo(5,5);
echo "Area del rectángulo con lados ".$rectangulo->ancho." y ".$rectangulo->alto." es: ".$rectangulo->calcularArea()."<br>";
$circulo = new Circulo(3);
echo "Area del círculo con radio ".$circulo->radio." es: ".$rectangulo->calcularArea()."<br>";