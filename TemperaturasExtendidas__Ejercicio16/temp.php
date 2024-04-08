<?php
if(isset($_POST['temp']) && isset($_POST['from']) && isset($_POST['to'])) {
    $temperatura = $_POST['temp'];
    $unidad_origen = $_POST['from'];
    $unidad_destino = $_POST['to'];

    switch ($unidad_origen) {
        case 'C':
            switch ($unidad_destino) {
                case 'F':
                    $resultado = ($temperatura * 9 / 5) + 32;
                    echo "$temperatura °C es equivalente a $resultado °F";
                    break;
                case 'K':
                    $resultado = $temperatura + 273.15;
                    echo "$temperatura °C es equivalente a $resultado K";
                    break;
                default:
                    echo "No se ha seleccionado una unidad de destino válida.";
            }
            break;
        case 'F':
            $resultado =($temperatura - 32) * (5 / 9);
            echo "$temperatura °F es equivalente a $resultado °C";
            break;
        case 'K':
            $resultado = $temperatura - 273.15;
            echo "$temperatura °K es equivalente a $resultado °C";
            break;
       
    }
} 
?>