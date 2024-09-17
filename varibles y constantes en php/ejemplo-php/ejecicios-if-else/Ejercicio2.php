<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tres numeros</title>
</head>
<body>
<?php
$numero1 = 10;
$numero2 = 5;
$numero3 = 4;

if($numero1 > $numero2 && $numero1 > $numero3){
    echo "El número ".$numero1." es el mayor.";
}

if($numero2 > $numero1 && $numero2 > $numero3){
    echo "El número ".$numero2." es el mayor.";
}

if($numero3 > $numero1 && $numero3 > $numero2){
    echo "El número ".$numero3." es el mayor.";
}

?>
</body>
</html>
