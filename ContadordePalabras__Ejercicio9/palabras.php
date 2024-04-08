<?php
$cadena=$_POST['ca'];
$numero_de_palabras = str_word_count($cadena);
echo "Número de palabras en la cadena: " . $numero_de_palabras;
?>