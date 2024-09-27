<?php
class Persona
{
    private $nombre;
    private $edad;
    private $dpi;
    public function __construct($nombre, $edad, $dpi){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dpi = $dpi;
    }

    public function showInfo()
    {
        echo "Nombre: ".$this->nombre."<br>Edad: ".$this->edad."<br>Dpi: ".$this->dpi."<br>";
    }

    public function validateEdad(){
        return ($this->edad > 18 && $this->edad < 60) ? "La persona es un adulto" : (($this->edad > 0 && $this->edad < 12) ? "La persona es un niño."
            : (($this->edad > 60) ? "La persona es mayor de edad" : "Edad invalida"));
    }
}
$persona = new Persona("Luis Baquiax", 28, "3452327550801");
$persona->showInfo();
echo "<br>".$persona->validateEdad();