<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Deja tu comentario</title>
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
        <h1 style="text-align: center; font-size: 35px;"><strong> Deja tu comentario </strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="Ejercicio05.php" method="POST">
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
                <label style="display: block" for="email"
                >Correo electrónico:</label
                >
                <input
                    style="width: 100%; height:30px; font-size:25px; padding: 10px"
                    type="email"
                    id="email"
                    name="email"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="puntuacion">Puntuación del servicio:</label>
                <select style="width: 100%; font-size:25px; padding: 10px" id="puntuacion" name="puntuacion">
                    <option value="1">⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="5">⭐⭐⭐⭐⭐</option>
                </select>
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="descripcion"
                >Deje su comentario:</label
                >
                <textarea
                    style="width: 100%; font-size:30px; padding: 10px; height:70px"
                    name="descripcion"
                    id="descripcion"
                ></textarea>
            </div>
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$puntuacion = $_POST["puntuacion"];
if($nombre){
    echo "<hr>";
    echo "<h4>Gracias por dejarnos tu comentario</h4>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Puntuación seleccionada: $puntuacion</p>";
}
?>
</body>
</html>