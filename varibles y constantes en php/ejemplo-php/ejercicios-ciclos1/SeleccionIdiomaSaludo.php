<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seleccion de idioma de saludo</title>
</head>
<body>
<?php
define("ESPAÑOL", "Español");
define("INGLES", "Ingles");
define("FRANCES", "Frances");
define("ALEMAN", "Alemán");
$nombreIdioma = "HOLA";
switch ($nombreIdioma) {
    case ESPAÑOL:
        echo "Buenos días, gusto saludarlo.";
        break;
    case INGLES:
        echo "Good morning.";
        break;
    case FRANCES:
        echo "Bonjour.";
        break;
    case ALEMAN:
        echo "Guten Morgen.";
        break;
    default:
        echo 'Idioma no detectado, lo sentimos!!!<br>';
        echo 'Idiomas permitidos: español, inglés, francés, alemán<br>';
}
?>
</body>
</html>
