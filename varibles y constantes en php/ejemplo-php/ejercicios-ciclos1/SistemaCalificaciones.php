<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de calificaciones</title>
</head>
<body>
<?php
$nota = 85;

switch (true) {
    case ($nota >= 90 && $nota <= 100):
        echo "Equivalencia de la nota: A";
        break;
    case ($nota >= 80 && $nota <= 89):
        echo "Equivalencia de la nota: B";
        break;
    case ($nota >= 70 && $nota <= 79):
        echo "Equivalencia de la nota: C";
        break;
    case ($nota >= 60 && $nota <= 69):
        echo "Equivalencia de la nota: D";
        break;
    default:
        echo "Equivalencia de la nota: F";
}

?>

</body>
</html>