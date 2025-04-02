<?php
    // Crear la cookie 
    setcookie('user', ' nahomi.otero5621@alumnos.udg.mx', time()+60);

    // Redirección
    header("Location: cookies2.php"); 
?>