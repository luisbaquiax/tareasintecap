<?php
require "Jugador.php";
require "Juego.php";
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
            <div style="margin-bottom: 10px">
                <label class="label-form" for="opcion">Seleccione una opcion</label>
                <select class="input-form" style="text-align: center" id="opcion" name="opcion">
                    <option value="1">🪨</option>
                    <option value="2">✂️</option>
                    <option value="3">🧻</option>
                </select>
            </div>
            <div style="margin-bottom: 10px; text-align: center">
                <button type="submit">Jugar</button>
            </div>
        </form>
    </div>
<?php
$opcion = $_POST["opcion"];
if($opcion){
    $jugador1 = new Jugador("Luis", 0, false);
    $jugador2 = new Jugador("Boot", 0, false);
    $juego = new Juego($jugador1, $jugador2);
    $auxi =$juego->establecerGanador(Juego::OPCIONES[$opcion-1], $juego->getOpcionBoot());

    echo "<hr><h2 style='text-align: center'>$auxi</h2>";
}

?>
</body>
</html>