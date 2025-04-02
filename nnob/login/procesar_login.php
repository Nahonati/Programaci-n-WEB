<?php
    session_start(); // siempre va primero cuando utilizas sesiones en php

    // Recibir los datos del formulario por POST
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Datos de simulación de MYSQL
    $usuario_sql = "admin";
    $password_sql = "1234"; 

    // Validar credenciales del usuario
    if($usuario == $usuario_sql && $password == $password_sql){
        $_SESSION['usuario'] = $usuario;
        header("Location: home.php");
    }else{
        header("Location: index.php?error=1");
    }
?>