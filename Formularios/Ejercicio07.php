<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservar cuarto de Hotel</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="container">
    <div
        style="
          width: 50%;
          height: 10%;
          align-items: center;
          justify-content: center;
          box-shadow: 10px 5px 5px grey;
          border: 1px solid rgb(228, 222, 222); border-radius: 15px;
        "
    >
        <h1 style="text-align: center; font-size: 35px;"><strong> Reservación de Habitación</strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="Ejercicio07.php" method="POST">
            <div style="margin-bottom: 10px">
                <label style="display: block" for="nombre">Nombre:</label>
                <input
                    style="width: 100%; height:30px; font-size:30px; padding: 10px"
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="fecha1">Fecha llegada:</label>
                <input
                    style="width: 100%; height:30px; font-size:25px; padding: 10px"
                    type="date"
                    id="fecha1"
                    name="fecha1"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="fecha2">Fecha salida:</label>
                <input
                    style="width: 100%; height:30px; font-size:30px; padding: 10px"
                    type="date"
                    id="fecha2"
                    name="fecha2"
                    maxlength="8"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="tipo">Tipo de habitación a reservar:</label>
                <select style="width: 100%; font-size:25px; padding: 10px" id="tipo" name="tipo">
                    <option value="habitacion_individual">Habitación individual</option>
                    <option value="habitacion_doble_estandar_una">Habitación doble estándar (una cama doble)</option>
                    <option value="habitacion_doble_estandar_dos">Habitación doble estándar (dos camas separadas)</option>
                    <option value="habitacion_doble_deluxe">Habitación doble deluxe</option>
                    <option value="estudio_apartamento">Estudio o apartamento</option>
                    <option value="suite_junior">Suite júnior</option>
                    <option value="suite_ejecutiva">Suite ejecutiva</option>
                    <option value="suite_presidencial">Suite presidencial</option>
                </select>
            </div>
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
<?php
$nombre = $_POST["nombre"];
$fecha1 = $_POST["fecha1"];
$fecha2 = $_POST["fecha2"];
$tipo = $_POST["tipo"];
if($nombre){
    echo "<hr>";
    echo "<h1>Su reservación de habitación ha sido enviada:</h1>";
    echo "<h2>Nombre: $nombre</h2>"
        . "<h2>Fecha de llegada: $fecha1</h2>"
        . "<h2>Fecha de salida: $fecha2</h2>"
        . "<h2>Tipo de habitación reservada: $tipo</h2>";
}

?>
</body>
</html>