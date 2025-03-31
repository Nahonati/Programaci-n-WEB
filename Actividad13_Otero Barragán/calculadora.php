<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacion) {
            case "sumar":
                $result = $num1 + $num2;
                $op = "Suma";
                break;
            case "restar":
                $result = $num1 - $num2;
                $op = "Resta";
                break;
            case "multiplicar":
                $result = $num1 * $num2;
                $op = "Multiplicación";
                break;
            case "dividir":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    $op = "División";
                } else {
                    $op = "";
                    $result = "Error!, para dividir, los números deben ser diferente de 0";
                }
                break;
            default:
                $result = "Operación no válida";
                break;
            }
            echo "<div>
                    <h2>Resultado de la {$op}: {$result}</h2>
                </div>";
            echo "<form action='index.html' method='GET'>";
            echo "<button>Intentar con otra operación</button>";
            echo "</form>";
    } else {
        echo "<h1>Error: Los valores ingresados deben ser numéricos.</h1>";
        echo "<form action='index.html' method='GET'>";
        echo "<button>Intentar con otra operación</button>";
        echo "</form>";
    }
?> 