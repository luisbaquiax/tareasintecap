<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
echo '<h4>Programa que muestre los números de cinco en cinco del 100 al 200</h4>';
$inicial = 100;
$final = 200;
$index = $inicial;
do {
    echo $index . " ";
    $index += 5;
} while ($index <= $final);
echo '<h4>Programa que muestre los números de cinco en cinco hasta 100</h4>';
$inicial = 0;
$final = 100;
$index = $inicial;
do {
    echo $index . " ";
    $index += 5;
} while ($index <= $final);
echo '<h4>Imprimir los números del 10 al 1</h4>';
$inicial = 10;
$final = 1;
$index = $inicial;
do {
    echo $index . " ";
    $index--;
} while ($index >= $final);
echo '<h4>Números pares del 0 al 100</h4>';
$inicial = 0;
$final = 100;
$index = $inicial;
do {
    echo $index . " ";
    $index += 2;
} while ($index <= $final);
echo '<h4>Suma de los primeros 100 números</h4>';
$inicial = 0;
$final = 100;
$index = $inicial;
$resultado = 0;
 do {
    $resultado += $index;
    $index++;
} while ($index <= $final);
echo "Suma de 1..100 : " . $resultado;
echo '<h4>Imprimir la tabla de multiplicar del 5</h4>';
$inicial = 1;
$final = 10;
$index = $inicial;
const NUMERO = 5;
do {
    echo NUMERO . ' x ' . $index . ' = ' . NUMERO * $index . '<br>';
    $index++;
} while ($index <= $final);

?>
</body>
</html>