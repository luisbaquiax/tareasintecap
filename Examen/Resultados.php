<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de partidas</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['juegos']) || empty($_SESSION['juegos'])) {
    echo "<h2>No hay juegos registrados aún.</h2>";
} else {
    echo "<h2>Resultados de los juegos:</h2>";
    echo "<ul>";
    foreach ($_SESSION['juegos'] as $juego) {
        echo "<li>Jugador: {$juego['jugador']}, Boot: {$juego['boot']}, Resultado: {$juego['resultado']}</li>";
    }
    echo "</ul>";
}
?>
<form action="PiedraTijeraPapel.php">
    <button type="submit">Volver a jugar</button>
</form>
</body>
</html>