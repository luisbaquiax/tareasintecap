<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    define('MENSAJE_HOLA','Hola');
    define('MENSAJE_ADIOS','Adios');
    $mensaje = MENSAJE_HOLA;
    $nombreUsuario = 'Luis';
    if($mensaje == MENSAJE_HOLA){
        echo "Muy buenos días ".$nombreUsuario;
    }
    if($mensaje == MENSAJE_ADIOS){
        echo "Hasta pronto ".$nombreUsuario;
    }
    ?>
</body>
</html>
