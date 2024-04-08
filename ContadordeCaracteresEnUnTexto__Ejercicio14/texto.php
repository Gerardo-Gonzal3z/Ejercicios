<?php
$cadena=$_POST['ca'];
$ca_sin = str_replace(" ", "", $cadena);
$longitud = strlen($ca_sin);
echo " Longitud de la cadena: $longitud" . "<br>"; 
?>