<?php
class  Student
{
    private $name;
    private $lastName;
    private $calificacion;
    function __construct($nombre, $apellido, $calificacion){
        $this->name = $nombre;
        $this->lastName = $apellido;
        $this->calificacion = $calificacion;
    }
    public  function showInfo(){
        echo "Nombre: ".$this->name." Apellido: ".$this->lastName." Calificación: ".$this->calificacion;
    }
}
//instanciando la clase student y mostrando su información
$student = new Student("Luis", "Baquiax",98);
$student->showInfo();