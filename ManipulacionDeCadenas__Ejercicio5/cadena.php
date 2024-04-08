<?php
$cadena=$_POST['ca'];
$ca_mayuscula= strtoupper($cadena);
$ca_minuscula= strtolower($cadena);
$ca_sin = str_replace(" ", "", $cadena);
$longitud = strlen($ca_sin);
echo " Longitud de la cadena: $longitud" . "<br>"; 
echo " minuscula: $ca_minuscula" . "<br>"; 
echo " MAYUSCULA: $ca_mayuscula ". "<br>";
?>