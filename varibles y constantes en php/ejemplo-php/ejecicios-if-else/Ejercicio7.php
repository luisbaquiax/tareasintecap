<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 7</title>
</head>
<body>
<?php
define('NUMERO_MES', 7);
if (NUMERO_MES == 1) {
    echo 'Enero';
} elseif (NUMERO_MES == 2) {
    echo 'Febrero';
} elseif (NUMERO_MES == 3) {
    echo 'Marzo';
} elseif (NUMERO_MES == 4) {
    echo 'Abril';
} elseif (NUMERO_MES == 5) {
    echo 'Mayo';
} elseif (NUMERO_MES == 6) {
    echo 'Junio';
} elseif (NUMERO_MES == 7) {
    echo 'Julio';
} elseif (NUMERO_MES == 8) {
    echo 'Agosto';
} elseif (NUMERO_MES == 9) {
    echo 'Septiembre';
} elseif (NUMERO_MES == 10) {
    echo 'Octubre';
} elseif (NUMERO_MES == 11) {
    echo 'Noviembre';
} elseif (NUMERO_MES == 12) {
    echo 'Diciembre';
}else {
    echo 'Mes no identificado';
}
?>
</body>
</html>
