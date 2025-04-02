<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Estructura condicional
        for ( $i =1; $i <=5; $i ++){
            echo "Numero: $i <br>";
        }

        //Array
        $lenguajes = ["PHP", "PYTHON", "JAVASCRIPT"]; 

        foreach($lenguajes as $lenguaje){
            echo "Estoy aprendiendo $lenguaje <br>";
        }

        //Funcion
        function saludar($nombre){
            return "Hola $nombre";
        }

        echo saludar("Natalia");
    ?>
</body>
</html>
 <?php
    // $saludo = "Hola Mundo!";
    // echo $saludo . " I LOVE YOU";
    // $num = 4; 

    // if($num == 4){
    //     echo "SI SOY 4!";
    // }else{
    //     echo "No lo soy";
    // } // else 
?> 