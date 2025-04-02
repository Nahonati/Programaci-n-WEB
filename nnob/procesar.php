<?php

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    // Mostrar mensaje para el usuario 
    echo "<h2>Gracias por tu mensaje, $nombre</h2>";
    echo "<p>Te responderemos al correo: $correo</p>";
    echo "<hr>";
    echo "<p><strong>Mensaje recibido: </strong></p>";
    echo "<p>$mensaje</p>";

    // Almacenar la información en un archivo de texto
    $archivo = fopen("mensaje.txt", "a");
    $fecha = date("Y-m-d H:i:s"); 
    $contenido = "[$fecha] Nombre: $nombre | Correo: $correo | Mensaje: $mensaje\n"; 
    fwrite($archivo, $contenido); 
    fclose($archivo); 

