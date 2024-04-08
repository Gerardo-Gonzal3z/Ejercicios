<?php
echo "Números pares:<br>";
for ($i = 1; $i <= 20; $i++) {
    $numero_par = $i * 2;
    echo "$numero_par ";
}
echo "<br><br>";

echo "Números impares:<br>";
for ($i = 1; $i <= 20; $i++) {
    $numero_impar = ($i * 2) - 1;
    echo "$numero_impar ";
}
?>
