<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];

    switch (true) {
        case ($edad >= 18):
            echo "¡Eres mayor de edad!";
            break;
        case ($edad < 0):
            echo "La edad no puede ser un número negativo.";
            break;
        default:
            echo "Eres menor de edad.";
    }
}
?>