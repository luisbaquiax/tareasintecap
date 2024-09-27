<?php

class Libro
{
    private $titulo;
    private $autor;
    private $editorial;
    private $year;
    private $edicion;
    private $genero;

    public function __construct($titulo, $autor, $editorial, $year, $edicion, $genero){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editorial = $editorial;
        $this->year = $year;
        $this->edicion = $edicion;
        $this->genero = $genero;
    }

    public function getInfo()
    {
        return "Año: " . $this->titulo
            . "<br>Autor: " . $this->autor
            . "<br>Editorial:" . $this->editorial
            . "<br>Año: " . $this->year
            . "<br>Edicion: " . $this->edicion
            . "<br>Género: " . $this->genero;
    }
}

$libro = new Libro("Harry Potter", "J. K. Rowling", "Bloomsbury Salamandra Scholastic", "1997", "9", "Fantasía");
echo $libro->getInfo();