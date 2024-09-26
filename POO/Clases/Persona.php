<?php
class  Persona
{
    private $nombre;
    private $edad;
    private $sexo;
    private $peso;
    private $altura;

    public function __construct($nombre, $edad, $sexo, $peso, $alturaprivate){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->sexo = $sexo;
        $this->peso = $peso;
        $this->altura = $alturaprivate;
    }
    public function esMayor(){
        return ($this->edad > 18) ? ' Es mayor de edad ' : 'Es menor de edad';
    }
    public function calcularPesoIdeal(){
        return ($this->peso)/($this->altura * $this->altura);
    }
    //mostrar datos
    public function mostrarDatos()
    {
        echo 'Nombre: '.$this->nombre. ' Edad: '.$this->edad. ' Sexo: '.$this->sexo.' Peso:'.$this->peso.' Altura: '.$this->altura.'<br>';
    }
}

$persona = new Persona("Luis", 28, "Masculino", 58.9, 1.6);
$persona->mostrarDatos();
echo 'Peso ideal formula = peso kg/ (altura * altura) metros cuadrados: '.$persona->calcularPesoIdeal().'<br>';
echo $persona->esMayor();
