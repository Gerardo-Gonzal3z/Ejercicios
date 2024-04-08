<?php
    $temperatura = $_POST['temp'];
    $valor = 0;
    $dato = "";
    $digitos = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '-', '.'];
    for($i = 0; $i < strlen($temperatura); $i++) {
        if(in_array($temperatura[$i], $digitos)) {
            $dato = $dato . $temperatura[$i];
        }elseif($temperatura[$i] == " ") {
            $i = $i + 3;
            if($temperatura[$i] == 'C' || $temperatura[$i] == 'c') {
                $valor = ($dato * 9/5) + 32;
                $valorFormato = number_format($valor, 2);
                echo " $temperatura Es equivalente a $valorFormato °F";
                //logica para convertir en F
            }elseif($temperatura[$i] == 'F' || $temperatura[$i] == 'f') {
                $valor = ($dato - 32) * 5/9;
                $valorFormato = number_format($valor, 2);
                echo " $temperatura Es equivalente a $valorFormato °C";
                //logica para convertir en C
            }
        }
    }
?>