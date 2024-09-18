<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciclo For</title>
</head>
<body>
<?php
echo '<h2>Numeros del 0 al 20</h2>';
for ($i = 0; $i < 21; $i++) {
    echo $i . ' ';
}
echo '<h2>Numeros del 20 al 0</h2>';
for ($i = 20; $i >= 0; $i--) {
    echo $i . ' ';
}
echo '<h2>Bienvenido 3 veces</h2>';
for ($i = 0; $i < 3; $i++) {
    echo ($i + 1) . '. Bienvenido   ';
}
echo '<h2>Tabla del 3</h2>';
for ($j = 1; $j < 11; $j++) {
    echo '3 x '. $j . ' = '.(3 * $j).'<br>';
}
?>
</body>
</html>