<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISSET | PHP</title>
</head>
<body>
    <form action="tabla.php" method="post">
        <label for="tabla">Tabla del: </label>
        <input type="text" name="tabla" id="tabla"  >
        <input type="submit" value="Calcular" >
    </form>




    <?php

        if(isset($_POST['tabla'])){   //saber si la var esta definida o no
            $tabla = $_POST['tabla'];

            if(!empty($tabla)){ //Si la tabla no esta vacia se hacen las tablas  
                for($i = 1; $i <=10; $i++){
                    echo "$tabla x $i = ", $tabla * $i, "<br>";
                }
            } else { //si la tabla esta vacia que le deje saber al usuario 
                echo "No puedes dejar los campos vacios";
            } 
        }
    ?>
</body>
</html>