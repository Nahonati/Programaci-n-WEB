<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
<ul class="nav nav-justified">
        <li class="nav-item">
            <a class="nav-link" href="index.html">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Otros</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Otros</a>
        </li>
    </ul>
</body>
</html>

<?php
    if(isset($_POST['nombre'], $_POST['edad'], $_POST['correo'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];

        if(!empty($nombre) && !empty($edad) && !empty($correo)){
            if (is_numeric($edad) && $edad >= 1 && $edad <= 99) {
                echo "<br> <strong>Gracias $nombre, tu registro fue exitoso!!</strong>";
            } else {
                echo "<br> <strong>Error!!,</strong> Ingresaste una edad invalida <br>";
            }
        }else{
            echo "<br> <strong>Error!!,</strong> no puedes dejar campos vacios <br>";
        }
    }

?>