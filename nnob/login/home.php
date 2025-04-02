<?php
    session_start();
    // Verificar si el usuario ha inicado sesión 
    // si la variable no esta iniciada no lo dejes entrar 
    if(!isset($_SESSION['usuario'])){
        header("Location: ./");
        exit(); 
    }

    require_once 'header.php';
?>

    <h2>Bienvenid@ <?php echo $_SESSION['usuario']; ?> </h2>
    <?php
        if($_SESSION['usuario'] == 'admin'){
    ?>
    <p class="alert alert-success"> Has iniciado sesión correctamente</p>
    <?php
        }
    ?>
    <a class="btn btn-danger" href="salir.php">Cerrar sesion</a>

    <?php
        require_once 'footer.php';
    ?>  
