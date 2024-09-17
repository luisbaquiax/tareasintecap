<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio PHP</title>
</head>
<body>
<?php
    echo "<h3>Nombre y edad</h3>";
    $miNombre = "Luis";
    echo "Mi nombre es $miNombre.<br>";
    $miEdad = 28;
    echo "Mi edad es $miEdad.<br>";
    $miEdad = 30;
    echo "Mi edad cambiada es $miEdad.<br>";
    echo "<h3>Saludo</h3>";
    $saludo = "Saludos ";
    echo $saludo.$miNombre;
    echo "<h3>Constantes</h3>";
    const GRAVEDAD = 9.8;
    echo "La gravedad es.".GRAVEDAD."<br>";
    echo "<h3>Altura</h3>";
    $alturaEverest = 8848.86;
    echo "La altura es del monte Everest es ".$alturaEverest." metros.<br>";
    echo "<h3>Entero, decimal, cadena booleana</h3>";
    $radio = 3;
    $decimal = 3.5;
    $bandera = true;
    echo "Entero: Radio ".$radio. "<br>";
    echo "Decimal: valor ".$decimal."<br> Variable booleana: ";
    var_dump($bandera);
    echo "<h3>Operadores de asignacion</h3>";
    $numero = 5;
    $numero = $numero * 4;
    echo "Asignacion multiplicacion: ".$numero."<br>";
    $numero *=4;
    echo "Asignacion multiplicacion (corta): ".$numero."<br>";

    $numero = $numero / 4;
    echo "Asignacion división: ".$numero."<br>";
    $numero /=4;
    echo "Asignacion división (corta): ".$numero."<br>";

    $numero = $numero % 3;
    echo "Asignacion modulo: ".$numero."<br>";
    $numero %=3;
    echo "Asignacion modulo (corta): ".$numero."<br>";

    $numero = $numero + 10;
    echo "Aumentar de forma larga: " . $numero." ";

    $numero = $numero - 3;
    echo "Disminuir de forma larga: " . $numero." ";

    $numero = 5;
    $numero += 10;
    echo "Aumentar de forma corta: " . $numero." ";

    $numero -= 3;
    echo "Disminuir de forma corta: " . $numero." ";

    echo "<h3>Operadores de comparación && y ||</h3>";
    $var1 = true;
    $var2 = false;
    echo "operador && :";
    if ($var1 && $var2) {
        echo "Ambas variables son verdaderas.<br>";
    } else {
        echo "Al menos una variable es falsa.<br>";
    }

    $var3 = true;
    $var4 = false;
    echo "operador || :";
    if ($var3 || $var4) {
        echo "Una de las variabels es verdadera.\n";
    } else {
        echo "Ambas variables son falsas.\n";
    }

?>
</body>
</html>