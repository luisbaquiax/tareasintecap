<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Funciones</title>
</head>
<body>
<?php
echo '<h4>1. Escriba en una función para calcular el área de un círculo </h4>';
function calcularAreaCirculo($radio)
{
    return $radio * $radio * pi();
}

$radio = 5;
echo "El are del circulo con radio = " . $radio . " es: " . calcularAreaCirculo($radio) . " u cuadradas";
echo '<h4>2. Escriba en una función para calcular el área de rectángulo </h4>';
function calcularAreaRectangulo($ancho, $altura)
{
    return $ancho * $altura;
}

$ancho = 5;
$altura = 5;
echo "El are del rectángulo con ancho =  " . $ancho . " y altura = " . $altura . " es: " . calcularAreaRectangulo($ancho, $altura) . " u cuadradas.";
echo '<h4>3. Escriba en una función para calcular el área de triángulo </h4>';
function calcularAreaTriangulo($base, $altura)
{
    return ($base * $altura) / 2;
}

$base = 10;
$altura = 8;
echo "El are del triángulo con base =  " . $base . " y altura = " . $altura . " es: " . calcularAreaTriangulo($base, $altura) . " u cuadradas.";
echo '<h4>4. Escriba una función para determinar si un número es par o impar</h4>';
function esPar($numero)
{
    return ($numero % 2 == 0) ? "El número " . $numero . " es par." : "El número " . $numero . " es impar.";
}

echo esPar(2);
echo '<h4>5. Escriba una función que determina entre dos números cuál es el mayor, menor o iguales</h4>';
$numero1 = 50;
$numero2 = 50;
function determinacionNumeros($numero1, $numero2)
{
    return ($numero1 > $numero2) ? 'El mayor es '.$numero1 : (($numero2 > $numero1) ? 'El mayor es: '.$numero2 : 'Los dos numeros son iguales');
}
echo 'De los números: ' . $numero1 . ', ' . $numero2 .'<br>';
echo determinacionNumeros($numero1, $numero2);

echo '<h4>6. Escriba una función que determine entre tres números cuál es el mayor, menor o iguales.</h4>';
$numero1 = 50;
$numero2 = 51;
$numero3 = 50;
function determinacionDeNumeros($numero1, $numero2, $numero3)
{
    return ($numero1 > $numero2 && $numero1 > $numero3) ? 'El mayor es: ' . $numero1
        : (($numero2 > $numero1 && $numero2 > $numero3) ? 'El mayor es: ' . $numero2
            : (($numero3 > $numero1 && $numero2) ? 'El mayor es: ' . $numero3 : 'Los tres numeros son iguales.'));
}
echo 'De los números: ' . $numero1 . ', ' . $numero2 . ', ' . $numero3 . '<br>';
echo determinacionDeNumeros($numero1, $numero2, $numero3);

echo '<h4>7. Escriba una función que sume los valores de un array(1,2,3,4,5). </h4>';
$arregloNumeros = array(1, 2, 3, 4, 5);
$result = 0;
function sumarTotal($arreglo)
{
    return array_sum($arreglo);
}
echo 'La suma de los elementos del arreglo ['.implode(', ', $arregloNumeros).'] es: '.sumarTotal($arregloNumeros).'<br>';
?>
</body>
</html>
