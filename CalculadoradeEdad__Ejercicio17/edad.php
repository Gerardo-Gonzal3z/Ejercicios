<?php
    $fecha = $_POST['nacimiento'];

    $Factual = new DateTime();
    $Fnacimiento = new
    DateTime($fecha);
    $resultado = $Factual -> diff($Fnacimiento);
    $A = $resultado->y;
    $M = $resultado->m;
    $D = $resultado->d; 
    echo "Tu edad es: $A años con $M meses y $D dias";

?>