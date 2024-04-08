<?php

    $ca = $_POST['ca'];
    echo "<h2>Tabla de multiplicar del $ca</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$ca x $i</td>";
        echo "<td>" . ($ca * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";

?>