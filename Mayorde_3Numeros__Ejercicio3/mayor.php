<?php
$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
$n3 = $_POST['numero3'];

switch (true) {
    case ($n1 > $n2 && $n1 > $n3):
        echo "$n1 es el número mayor de los tres.";
        break;
    case ($n2 > $n1 && $n2 > $n3):
        echo "$n2 es el número mayor de los tres.";
        break;
    case ($n3 > $n1 && $n3 > $n2):
        echo "$n3 es el número mayor de los tres.";
        break;
    default:
        echo "Los números son iguales o hay números triplicados.";
}
?>