<?php
    $cadena = "Anita lava la tina";
    $cadenaLimpia = strtolower(str_replace([' ', '.', ',', '!'], '', $cadena));
    $cadenaInvertida = strrev($cadenaLimpia);

    if ($cadenaLimpia == $cadenaInvertida) {
        echo "La cadena es un palindromo";
    } else {}
?>