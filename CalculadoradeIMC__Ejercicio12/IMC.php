<?php
$p = $_POST['peso'];
$a = $_POST['altura'];

$v1 = floatval($p);
$v2 = floatval($a);
$mC = $v1/($v2**2);
$de = number_format($mC, 2);
echo "tu IMC es de $de kg/m^2";
?>