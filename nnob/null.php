<?php
    $variable = null; 
    $nombre = ""; 

    if(is_null($variable)){
        echo "La variable es nula!";
    }

    

    if(isset($nombre)){
        echo "La variable $nombre esta definida"; 
    }else{
        echo "La variable $nombre NO esta definida"; 
    }