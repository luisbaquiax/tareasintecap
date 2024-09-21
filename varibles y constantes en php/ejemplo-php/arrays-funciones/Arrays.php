<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
echo '<h4>1. Diccionario ingles</h4>';
$diccionario = array(
    "Hola" => "Hi",
    "Adiós" => "Goodbye",
    "Gracias" => "Thank you",
    "Por favor" => "Please",
    "Perdón" => "Sorry",
    "Sí" => "Yes",
    "No" => "No",
    "¿Cómo estás?" => "How are you?",
    "Bien" => "Good",
    "Mal" => "Bad",
    "Amigo" => "Friend",
    "Casa" => "House",
    "Comida" => "Food",
    "Agua" => "Water",
    "Feliz" => "Happy"
);

foreach ($diccionario as $español => $ingles) {
    echo $español . ' = ' . $ingles . '<br>';
}

$elementos = [3, 2, 1, 5];
$resultado = 1;
echo '<h4>2. Multiplicación de elementos, array de números(3,2,1,5)</h4>';
foreach ($elementos as $elemento) {
    $resultado *= $elemento;
}
echo 'Resultado de la multiplicacion de los elementos interiores: '.$resultado . '<br>';
echo '<h4>3. Conteo de elementos únicos</h4>';
$elementos = [3, 2, 1, 5, 7, 7, 8, 12, 13, 5, 6, 6];
$aux = array();
foreach ($elementos as $elemento) {
    if(array_key_exists($elemento, $aux)){
        $aux[$elemento] ++;
    }else{
        $aux[$elemento] = 1;
    }
}
foreach ($aux as $elemento => $cantidad) {
    echo 'Elemento: ' . $elemento . ' ----> Repeticiones: ' . $cantidad . '<br>';
}
?>
</body>
</html>