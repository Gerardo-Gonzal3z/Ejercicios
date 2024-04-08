<?php
$texto = $_POST['pa'];
$palabras_prohibidas = explode("-", $_POST['p']);
foreach ($palabras_prohibidas as $palabra) {
$texto = str_ireplace(trim($palabra), '**', $texto);
}
 echo "el nuevo texto con las palabras prohibidas es: $texto";
?>