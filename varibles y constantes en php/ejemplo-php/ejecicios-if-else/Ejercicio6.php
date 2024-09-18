<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 6</title>
</head>
<body>
<?php
$palabra = 'Tomate';
if ($palabra == 'Palabra') {
    echo "Word.";
} else if ($palabra == 'Mesa') {
    echo "Table.";
} else if ($palabra == 'Tomate') {
    echo "Tomato.";
} else if ($palabra == 'Mundo') {
    echo "World.";
} else if ($palabra == 'Perro') {
    echo 'Dog';
} else if ($palabra == 'Gato') {
    echo 'Cat';
} else if ($palabra == 'Pan') {
    echo 'Bread';
} else if ($palabra == 'Pizarra') {
    echo 'Blackboard';
} else if ($palabra == 'Pollo') {
    echo 'Chicken';
} else if ($palabra == 'Arroz') {
    echo 'Rice';
} else if ($palabra == 'Banana') {
    echo 'Banana';
} else if ($palabra == 'Frijol') {
    echo 'Bean';
} else if ($palabra == 'Computadora') {
    echo 'Computer';
} else if ($palabra == 'Música') {
    echo 'Music';
} else if ($palabra == 'Tarjeta') {
    echo 'Card';
} else {
    echo 'Palabra no encontrada.<br>';
}
/*echo '<hr>';
$diccionrio = [
    ['Palabra', 'Word'],
    ['Computadora', 'Computer'],
    ['Frijol', 'Bean'],
    ['Perro', 'Dog'],
    ['Gato', 'Cata'],
    ['Hola', 'Helo'],
    ['Pan', 'Bread'],
    ['Pizarra', 'Pizza'],
    ['Manzana', 'Apple']
];
$lenght = sizeof($diccionrio);
$palabra = 'manzana';
$traducido = "";
echo "<br>";
for ($i = 0; $i < $lenght; $i++) {
    if (strcasecmp($diccionrio[$i][0], $palabra) == 0) {
        $traducido = $diccionrio[$i][1];
        break;
    }
}
if ($traducido == "") {
    echo "No se encontró la palabra " . $palabra;
} else {
    echo "Traducción de " . $palabra . " es: " . $traducido . "<br>";
}*/
?>
</body>
</html>
