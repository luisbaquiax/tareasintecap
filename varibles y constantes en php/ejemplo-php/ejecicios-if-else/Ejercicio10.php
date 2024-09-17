<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 10</title>
</head>
<body>
<?php
define('DESCUENTO1', 0.2);
define('DESCUENTO2', 0.15);
define('DESCUENTO3', 0);

#categoria cliente
define('ESTUDIANTE', 'Estudiante');
define('MAYORISTA', 'Mayorista');
define('NORMAL', 'Normal');

$precioProducto = 200;
$categoriaCliente = ESTUDIANTE;

if ($categoriaCliente == ESTUDIANTE) {
    echo 'Su descuento es: ' . $precioProducto * DESCUENTO1 . '<br>';
    echo 'Total a pagar:' . $precioProducto - $precioProducto * DESCUENTO1 . '<br>';
} else if ($categoriaCliente == MAYORISTA) {
    echo 'Su descuento es: ' . $precioProducto * DESCUENTO2 . '<br>';
    echo 'Total a pagar:' . $precioProducto - $precioProducto * DESCUENTO2 . '<br>';
} else if ($categoriaCliente == NORMAL) {
    echo 'Su descuento es: ' . $precioProducto * DESCUENTO3 . '<br>';
    echo 'Total a pagar:' . $precioProducto - $precioProducto * DESCUENTO3 . '<br>';
}


?>
</body>
</html>
