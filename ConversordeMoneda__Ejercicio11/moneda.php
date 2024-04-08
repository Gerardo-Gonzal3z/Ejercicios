<?php
$mo = $_POST['mo'];
$unidad_origen = $_POST['from'];
$unidad_destino = $_POST['to'];

switch ($unidad_origen) {
    case 'D':
        switch ($unidad_destino) {
            case 'P':
                $r= $mo * 16.45;
                echo "Su cambio a sido exitoso tiene un total de: $r Peso Mexicano";
                break;
            case 'E':
                $r= $mo * 0.92;
                echo "Su cambio a sido exitoso tiene un total de: $r Euro";
                break;
            default:
                echo "No se ha seleccionado una unidad de destino válida.";
        }
        break;
    case 'P':
        switch ($unidad_destino) {
            case 'D':
                $r= $mo * 0.061;
                echo "Su cambio a sido exitoso tiene un total de: $r dolares ";
                break;
            case 'E':
                $r= $mo * 0.056;
                echo "Su cambio a sido exitoso tiene un total de: $r  Euros";
                break;
            default:
                echo "No se ha seleccionado una unidad de destino válida.";
        }
        break;
    case 'E':
        switch ($unidad_destino) {
            case 'D':
                $r= $mo * 1.08;
                echo "Su cambio a sido exitoso tiene un total de: $r dolares";
                break;
            case 'P':
                $r= $mo * 17.83;
                echo "Su cambio a sido exitoso tiene un total de: $r Peso Mexicano";
                break;
            default:
                echo "No se ha seleccionado una unidad de destino válida.";
        }
        break;
    default:
        echo "No se ha seleccionado una unidad de origen válida.";
}
?>
