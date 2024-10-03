<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Solicitar empleo</title>
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
        <h1 style="text-align: center; font-size: 35px;"><strong> Solicitud de Empleo</strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="Ejercicio06.php" method="POST">
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
                <label style="display: block" for="apellido">Direccion:</label>
                <input
                    style="width: 100%; height:30px; font-size:25px; padding: 10px"
                    type="text"
                    id="apellido"
                    name="apellido"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="whatsapp">Teléfono:</label>
                <input
                    style="width: 100%; height:30px; font-size:30px; padding: 10px"
                    type="tel"
                    id="telefono"
                    name="telefono"
                    maxlength="8"
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
                <label style="display: block" for="experiencia"
                >Describa su experiencia laboral:</label
                >
                <textarea
                        style="width: 100%; font-size:30px; padding: 10px; height:70px"
                        name="experiencia"
                        id="experiencia"
                ></textarea>
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="curriculo">Seleccione un archivo para su curriculo:</label>
                <input
                        style="width: 100%; height:30px; font-size:30px; padding: 10px"
                        type="file"
                        id="curriculo"
                        name="curriculo"
                        required
                />
            </div>
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$experiencia = $_POST["experiencia"];
$curriculo = $_POST["curriculo"];
if($nombre){
    echo "<hr>";
    echo "<h1>Su información fue enviada</h1>";
    echo "<h2>Nombre: $nombre</h2>"
        . "<h2>Apellido: $apellido</h2>"
        . "<h2>Telefono: $telefono</h2>"
        . "<h2>Email: $email</h2>"
        . "<h2>Descripcion: $experiencia</h2>";
}

?>
</body>
</html>