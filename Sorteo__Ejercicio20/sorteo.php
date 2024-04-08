<?php
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    
    $opcion = rand(0, 1);
    
    if ($opcion == 0) {
        echo "¡Felicidades $nombre $apellido! Has ganado el sorteo. Tu premio es un GTR r34 skyline.";
    } else {
        echo "Sigue participando, $nombre  $apellido. Podrías ser el próximo ganador además,  tu suerte está cerca.";
    }

?>