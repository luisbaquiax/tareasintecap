<?php
require "Jugador.php";
require "Juego.php";

session_start();

if (!isset($_SESSION['juegos'])) {
    $_SESSION['juegos'] = array();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Piedra Tijera Papel</title>
    <link rel="stylesheet" href="syles.css">
</head>
<body>
<?php
echo "<h1 class='text-center'>Juega contra un boot!!!</h1>";
echo "<h1 class='text-center'> Piedra Tijera Papel</h1>";
?>
<div class="container">
    <form class="formulario" action="PiedraTijeraPapel.php" method="POST">
        <label class="option">
            <input type="radio" name="opcion" value="1" required style=" display: none;">
            <img class="img-hover" src="img.png" alt="Piedra" width="200px" height="200px">
        </label>
        <label class="option">
            <input type="radio" name="opcion" value="2" required style=" display: none;">
            <img class="img-hover" src="img_1.png" alt="Tijera" width="200px" height="200px">
        </label>
        <label class="option">
            <input type="radio" name="opcion" value="3" required style=" display: none;">
            <img class="img-hover" src="img_2.png" alt="Papel" width="200px" height="200px">
        </label>
        <div style="margin-bottom: 10px; text-align: center">
            <button type="submit" style="height:45px; font-size:20px; padding: 10px; border-radius: 10px; background-color: #063B62FF; color: white;">Jugar</button>
        </div>
    </form>

</div>

<?php
$opcion = $_POST['opcion'];
if ($opcion) {
    $jugador1 = new Jugador("Luis", 0, false);
    $jugador2 = new Jugador("Boot", 0, false);
    $juego = new Juego($jugador1, $jugador2);
    $auxi = $juego->establecerGanador(Juego::OPCIONES[$opcion - 1], $juego->getOpcionBoot());
    echo "<hr><h2 style='text-align: center'>$auxi</h2>";
}
?>

</body>
</html>