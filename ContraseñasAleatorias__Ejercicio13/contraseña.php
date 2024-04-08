<?php
    $longitud = intval($_POST['longitud']);
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+[]{}|;:,.<>?ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $contrasena = ''; 

    for ($i = 0; $i < $longitud; $i++){
        $datos = random_int(0, strlen($caracteres)-1);
        $contrasena .= $caracteres[$datos];
    }
    echo "<h3>tu contraseña es la siguiente:</h3> $contrasena";
?> 


