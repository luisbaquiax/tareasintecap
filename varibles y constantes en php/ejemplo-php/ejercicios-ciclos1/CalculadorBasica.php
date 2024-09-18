<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>
</head>
<body>
<?php
echo '<h1>Calculadora Básica</h1>';
$numero1 = 96;
$numero2 = 87;
$operador = '/';

switch ($operador) {
    case '+':
        echo 'Resultado de la suma: '.$numero1+$numero2;
        break;
    case '-':
        echo 'Resultado de la resta: '.$numero1-$numero2;
        break;
    case '*':
        echo 'Resultado de la multiplicación: '.$numero1*$numero2;
        break;
    case '/':
        if($numero2 == 0){
            echo 'No se puede realizar la división por '.$numero2;
        }else{
            echo 'Resultado de la división: '.$numero1/$numero2;
        }
        break;
    default:
        echo "Operador no identificado.";
}
?>
</body>
</html>