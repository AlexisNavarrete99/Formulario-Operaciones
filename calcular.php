<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $num1 = isset($_POST['num1']) ? (is_numeric($_POST['num1']) ? (float)$_POST['num1'] : null) : null;
        $num2 = isset($_POST['num2']) ? (is_numeric($_POST['num2']) ? (float)$_POST['num2'] : null) : null;
        $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : null;

        if (is_null($num1) || is_null($num2)) {
            $resultado = "Por favor ingrese números válidos.";
        } else {
            function suma($num1, $num2) {
                return $num1 + $num2;
            }

            function resta($num1, $num2) {
                return $num1 - $num2;
            }

            function multiplicacion($num1, $num2) {
                return $num1 * $num2;
            }

            function division($num1, $num2) {
                if ($num2 == 0) {
                    return "Error: División por cero no permitida.";
                }
                return $num1 / $num2;
            }

            switch ($operacion) {
                case 'suma':
                    $resultado = suma($num1, $num2);
                    break;
                case 'resta':
                    $resultado = resta($num1, $num2);
                    break;
                case 'multiplicacion':
                    $resultado = multiplicacion($num1, $num2);
                    break;
                case 'division':
                    $resultado = division($num1, $num2);
                    break;
                default:
                    $resultado = "Operación no válida.";
                    break;
            }
        }

        echo "<div class='result'> $operacion es: $resultado</div>";
    }
    ?>