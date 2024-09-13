<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejemplo PHP</title>
</head>
<body>
<?php
$nombre = "Juan"; // Variable de tipo string (cadena de texto)
$edad = 30; // Variable de tipo entero (integer)
$altura = 1.75; // Variable de tipo float (número decimal)
$esEstudiante = true; // Variable de tipo boolean (true o false)
// Imprimiendo variables en pantalla utilizando echo
echo "<h2>Variables en PHP</h2>";
echo "Nombre: " . $nombre . "<br>"; // Concatenando cadenas con el operador "."
echo "Edad: " . $edad . "<br>";
echo "Altura: " . $altura . " metros<br>";
echo "Es estudiante: " . ($esEstudiante ? 'Sí' : 'No') . "<br>"; // Operador ternario para mostrar sí o no

const NOMBRE_SITIO = 'Hola mundo con PHP';
define("PI", 3.1416); // Constante de tipo float

echo "<h2>Constantes en PHP</h2>";
echo "Nombre del sitio: " . NOMBRE_SITIO . "<br>";
echo "Valor de PI: " . PI . "<br>";

$numero1 = 10;
$numero2 = 5;
echo "<h2>Operaciones Aritméticas en PHP</h2>";
echo "Número 1: " . $numero1 . "<br>";
echo "Número 2: " . $numero2 . "<br>";
$suma = $numero1 + $numero2;
echo "Suma (10 + 5): " . $suma . "<br>";

$resta = $numero1 - $numero2;
echo "Resta (10 - 5): " . $resta . "<br>";
// Multiplicación
$multiplicacion = $numero1 * $numero2;
echo "Multiplicación (10 * 5): " . $multiplicacion . "<br>";
// División
$division = $numero1 / $numero2;
echo "División (10 / 5): " . $division . "<br>";
// Módulo (resto de la división)
$modulo = $numero1 % $numero2;
echo "Módulo (10 % 5): " . $modulo . "<br>";

echo "<h2>Operaciones de Comparación en PHP</h2>";
echo "¿10 es igual a 5? " . ($numero1 == $numero2 ? 'Sí' : 'No') . "<br>";
echo "¿10 es diferente de 5? " . ($numero1 != $numero2 ? 'Sí' : 'No') . "<br>";
echo "¿10 es mayor que 5? " . ($numero1 > $numero2 ? 'Sí' : 'No') . "<br>";
echo "¿10 es menor que 5? " . ($numero1 < $numero2 ? 'Sí' : 'No') . "<br>";
echo "¿10 es mayor o igual a 5? " . ($numero1 >= $numero2 ? 'Sí' : 'No') . "<br>";
echo "¿10 es menor o igual a 5? " . ($numero1 <= $numero2 ? 'Sí' : 'No') . "<br>";

// AND, OR, NOT
echo "<h2>Operaciones Lógicas en PHP</h2>";
$condicion1 = true;
$condicion2 = false;
echo "Condición 1 (true) y Condición 2 (false) con operador AND: " . (($condicion1 && $condicion2) ? 'Verdadero' : 'Falso') . "<br>";
echo "Condición 1 (true) o Condición 2 (false) con operador OR: " . (($condicion1 || $condicion2) ? 'Verdadero' : 'Falso') . "<br>";
echo "Negación de Condición 1 (true) con operador NOT: " . ((!$condicion1) ? 'Verdadero' : 'Falso') . "<br>";
print 'Saludos ingeniera ';


?>
</body>
</html>