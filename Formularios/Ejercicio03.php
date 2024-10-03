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
        <h1 style="text-align: center; font-size: 35px;"><strong> Registro de usuario </strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="Ejercicio03.php" method="POST">
            <div style="margin-bottom: 10px">
                <label style="display: block" for="nombre">Nombre de usuario:</label>
                <input
                    style="width: 100%; height:30px; font-size:30px; padding: 10px"
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                />
            </div>
            <div style="margin-bottom: 10px">
                <label style="display: block" for="password">Contrseña:</label>
                <input
                    style="width: 100%; height:30px; font-size:30px; padding: 10px"
                    type="password"
                    id="password"
                    name="password"
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
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Guardar cambios</button>
            </div>
        </form>
    </div>
</div>
<?php
$nombre = $_POST["nombre"];
$password = $_POST["password"];
$email = $_POST["email"];
$errores = array();
if(!$nombre){
    array_push($errores, "Debe ingresar un nombre.");
}
if(!$password){
    array_push($errores, "Debe ingresar una contraseña");
}
if(sizeof($errores) == 0){
    echo "<hr><h2>Usuario registrado correctamente!!!</h2>";
}
?>
</body>
</html>