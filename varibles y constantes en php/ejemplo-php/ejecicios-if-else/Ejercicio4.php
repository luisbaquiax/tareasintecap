<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 4</title>
</head>
<body>
<?php
define('EDAD', 19);

$edadUsuario = EDAD;

if ($edadUsuario < 18 && $edadUsuario > 1) {
    echo "No tiene acceso.";
} else if ($edadUsuario > 65) {
    echo "Por desgracia, el contenido no es para jubilados";
} else if ($edadUsuario >= 18 && $edadUsuario <= 65) {
    echo "Bienvenido a la web Intecap.";
}

?>
</body>
</html>
