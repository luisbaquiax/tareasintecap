<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuesta de Satisfacción del Cliente</title>
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
          align-items: center;
          justify-content: center;
          box-shadow: 10px 5px 5px grey;
          border: 1px solid rgb(228, 222, 222); border-radius: 15px;
        "
    >
        <h1 style="text-align: center; font-size: 35px;"><strong>Responda a las siguientes preguntas sobre nuestros servicio</strong></h1>
        <form style="padding: 25px; font-size: 30px; margin-right: 15px;" action="#" method="POST">
            <div style="margin-bottom: 20px">
                <p style="margin-bottom: 10px;">1. ¿Cómo calificaría la calidad de la comida?</p>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="comida" value="excelente" required> Excelente
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="comida" value="buena"> Buena
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="comida" value="regular"> Regular
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="comida" value="mala"> Mala
                </label>
            </div>
            <div style="margin-bottom: 20px">
                <p style="margin-bottom: 10px;">2. ¿Cómo fue el servicio del personal?</p>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="servicio" value="excelente" required> Excelente
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="servicio" value="bueno"> Bueno
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="servicio" value="regular"> Regular
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="servicio" value="malo"> Malo
                </label>
            </div>
            <div style="margin-bottom: 20px">
                <p style="margin-bottom: 10px;">3. ¿Cómo calificaría la limpieza del restaurante?</p>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="limpieza" value="excelente" required> Excelente
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="limpieza" value="buena"> Buena
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="limpieza" value="regular"> Regular
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="limpieza" value="mala"> Mala
                </label>
            </div>
            <div style="margin-bottom: 20px">
                <p style="margin-bottom: 10px;">4. ¿Recomendaría nuestro restaurante a otros?</p>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="recomendacion" value="si" required> Sí
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="recomendacion" value="no"> No
                </label>
                <label style="display: block; font-size: 25px;">
                    <input type="radio" name="recomendacion" value="talvez"> Tal vez
                </label>
            </div>
            <div style="margin-bottom: 10px; text-align: center; ">
                <button style="height:55px; font-size:30px; padding: 10px; border-radius: 10px; background-color: blue; color: white;" type="submit">Enviar encuesta</button>
            </div>
        </form>
    </div>
</div>
<?php
$comida = $_POST["comida"];
$servicio = $_POST["servicio"];
$limpieza = $_POST["limpieza"];
$recomendacion = $_POST["recomendacion"];
if($comida){
    echo "<hr>";
    echo "<h1>Gracias por enviar tus respuestas:</h1>";
    echo "<h2>Calidad de la comida: $comida</h2>"
        . "<h2>Servicio: $servicio</h2>"
        . "<h2>Limpieza: $limpieza</h2>"
        . "<h2>Recomendacion: $recomendacion</h2>";
}
?>
</body>
</html>