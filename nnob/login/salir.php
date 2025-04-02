<?php
    session_start();
    session_unset(); // Limpiar variables de sesión 
    session_destroy(); // Destruir la seisón / variable de sesion 

    header("Location: ./") // reedireccionar al inicio 
?>