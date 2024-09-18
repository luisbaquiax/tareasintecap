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
if($nota >=90 && $nota <=100){
    echo "Equivalencia de la nota: A";
}elseif ($nota >=80 && $nota <=89){
    echo "Equivalencia de la nota: B";
}elseif ($nota >=70 && $nota <=79){
    echo "Equivalencia de la nota: C";
}elseif ($nota >=60 && $nota <=69){
    echo "Equivalencia de la nota: D";
}else{
    echo "Equivalencia de la nota: F";
}
?>

</body>
</html>