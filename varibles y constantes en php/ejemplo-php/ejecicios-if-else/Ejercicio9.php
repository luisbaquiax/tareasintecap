<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 9</title>
</head>
<body>
<?php
define('NOTA1', 91);
define('NOTA2', 90);
define('NOTA3', 90);
define('NOTAS', 3);
$promedio  = (NOTA1 + NOTA2 + NOTA3) / NOTAS;
if($promedio > 90){
    echo "Te ganaste un viaje a Disney.";
}elseif ($promedio >= 80 && $promedio <= 90) {
    echo "Te ganaste un viaje Petén.";
}elseif ($promedio >= 70 && $promedio <= 90) {
    echo "Te ganaste un viaje Georgias.";
}else if($promedio < 70){
    echo "Deberás esforzarte más.";
}
?>
</body>
</html>
