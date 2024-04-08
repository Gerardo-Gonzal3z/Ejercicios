<?php
    $co = $_POST['email'];
    if (filter_var($co, FILTER_VALIDATE_EMAIL)) {
        echo "El E-mail '$co' es válido.</p>";
    } else {
        echo "El E-mail'$co' no es válido.</p>";
    }

?>