<?php
    // Destuir la cookie 
    setcookie('user', '', time()-120); 

    // Redirijo a otra página
    header("Location: cookies2.php"); 
?>