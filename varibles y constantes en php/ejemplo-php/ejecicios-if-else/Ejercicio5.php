<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 5</title>
</head>
<body>
<?php
$horasPermitidas = 20;
$horasPiloto = 155;
echo 'Horas permitidas de vuelo: '.$horasPermitidas;
if($horasPiloto > $horasPermitidas){
    echo '<br>Solo se permiten '.$horasPermitidas.' horas de vuelo.';
}else{
    echo '<br>Le quedan '.$horasPermitidas - $horasPiloto.' horas de vuelo.';
    echo '<br>Se encuettra en el rango de horas permitidas, usted ha viajado '.$horasPiloto.' horas.';
}

?>
</body>
</html>
