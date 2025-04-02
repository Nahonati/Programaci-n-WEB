<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['user'])){
            echo "<h3> Bienvenid@". $_COOKIE['user'] ."</h3>";
            echo "<a href='cookies3.php'> Destruir cookie</a>";

        }else{
            echo "<h3>La cookie no esta creada</h3>";
            echo "<a href='cookies.php'> Crear una cookie</a>";
        }
    ?>
</body>
</html>

