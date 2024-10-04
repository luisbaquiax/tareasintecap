<?php
$cookie_name = "user";
$cookie_value = "Luis Baquiax";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Nombre de la cookie" . $cookie_name . "' no fue establecida!";
} else {
    echo "Cookie '" . $cookie_name . "' es establecido!<br>";
    echo "Valor de la cookie: " . $_COOKIE[$cookie_name];
}
?>
</body>
</html>