<?php
class AreaVolumen {
    public function __construct() {
    }
    public function getArea($ancho, $alto) {
        return $ancho * $alto;
    }

    public function getVolumen($ancho, $alto, $grosor)
    {
        return $ancho * $alto * $grosor;
    }
}

$calculo = new AreaVolumen();
$ancho = 5;
$alto = 6;
$grosor = 3;

echo 'El area de un rectángulo con lados '.$ancho.' y '.$alto.' es '.$calculo->getArea($ancho, $alto). ' unidades cuadradas<br>';
echo 'El area de un rectángulo con lados '.$ancho.', '.$alto.' y grosor '.$grosor.' es '.$calculo->getVolumen($ancho, $alto, $grosor). ' unidades cúbicas.<br>';
