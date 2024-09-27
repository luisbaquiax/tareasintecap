<?php
class Auto
{
    private $year;
    private $marca;
    private $cilindraje;
    private $transmision;

    public function __construct($year, $marca, $cilindraje, $transmision)
    {
        $this->year =  $year;
        $this->marca = $marca;
        $this->cilindraje = $cilindraje;
        $this->transmision = $transmision;
    }

    public function getInfo(){
        return "Año: ".$this->year
            ."<br>Marca: ".$this->marca
            ."<br>Cilindraje:".$this->cilindraje
            ."<br>Sistema de transmisión: ".$this->transmision;
    }
}
$auto = new Auto("2024", "Toyota", 5.5, "Automática");
echo $auto->getInfo();