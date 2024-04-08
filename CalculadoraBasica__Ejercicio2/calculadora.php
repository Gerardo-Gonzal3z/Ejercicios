<?php
    $dato_a = $_POST['numero1'];
    $dato_b = $_POST['numero2'];
    $op = $_POST['from'];

    switch ($op) {
        case 'mu':
            $operacion = $dato_a * $dato_b;
            echo "La multiplicacion de $dato_a y $dato_b es: $operacion";
            break;
        case 'di':
            $operacion = $dato_a / $dato_b;
            echo "La division de $dato_a y $dato_b es: $operacion";
            break;
        case 'su':
            $operacion = $dato_a + $dato_b;
            echo "La suma de $dato_a y $dato_b es: $operacion";
            break;
         case 're':
            $operacion = $dato_a - $dato_b;
            echo "La resta de $dato_a y $dato_b es: $operacion";
                break;
        default:
            echo "No se ha seleccionado una operacion válida.";
    }

?>
