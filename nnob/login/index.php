<?php
    // Traerlo
    require_once 'header.php';
?>
    <div class= "login">
        <h2>Iniciar sesión</h2>
        <form action="procesar_login.php" method="post">
            <input type="text" name="usuario" id="usuario" placeholder="Usuario" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <input type="submit" class="btn btn-success" value="Ingresar">
        </form>
        <?php
            // Si existe la variable error (si esta definida) entonces imprime esto:
            if(isset($_GET['error'])){
                echo "<p class='alert alert-danger'>Credenciales incorrectas</p>";
            }
        ?>
        
    </div>

    <?php
        require_once 'footer.php';
    ?>  