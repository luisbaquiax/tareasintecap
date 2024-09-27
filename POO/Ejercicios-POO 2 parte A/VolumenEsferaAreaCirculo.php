<?php
class VolumenEsferaAreaCirculo
{
    private $radio;
    public function __construct($radio){}
    public function getArea(){
        return pi()*$this->radio**2;
    }

    public function getVolumen()
    {
        return (3/4) * pi() * $this->radio**2;
    }
}
$radio = 12;
$calculo = new VolumenEsferaAreaCirculo($radio);
echo "Area del círculo con radio ".$radio." es ".$calculo->getArea();
echo "<br>";
echo "Volumen de una esfera con radio ".$radio." es ".$calculo->getVolumen();