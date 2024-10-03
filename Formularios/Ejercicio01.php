<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear cuenta de contacto</title>
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
        <h1 style="text-align: center; font-size: 35px;"><strong> Resevar cita </strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="Ejercicio01.php" method="POST">
            <div style="margin-bottom: 10px">
                <label style="display: block" for="fecha"
                >Fecha:</label
                >
                <input
                        style="width: 100%; height:30px; font-size:25px; padding: 10px"
                        type="date"
                        id="fecha"
                        name="fecha"
                        required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="hora"
                >Hora:</label
                >
                <input
                    style="width: 100%; height:30px; font-size:25px; padding: 10px"
                    type="time"
                    id="hora"
                    name="hora"
                    required
                />
            </div>
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Reservar cupo</button>
            </div>
        </form>
    </div>
</div>
<?php
$fecha = $_POST["fecha"];
$hora = $_POST["hora"];
if($fecha){
    echo "<h3>Cupo reservado</h3>";
    echo "Fecha: ".$fecha."<br>";
    echo "Hora: ".$hora."<hr>";
    $filename = "/home/luisbaquiax/Documentos/cita-$fecha-$hora.txt";

    $content = "Cupo reservado.\nFecha: $fecha\nHora: $hora";

    if (file_put_contents($filename, $content) !== false) {
        echo "<legend>El archivo ha sido creado exitosamente en la ruta $filename</legend>";
    } else {
        echo "<legend>Error al crear el archivo</legend>";
    }
}
?>

</body>
</html>
