
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $figura = $_POST["figura"];
        $dimension1 = $_POST["dimension1"];
        $dimension2 = isset($_POST["dimension2"]) ? $_POST["dimension2"] : null;

        switch ($figura) {
            case 'circulo':
                $area = M_PI * pow($dimension1, 2);
                $perimetro = 2 * M_PI * $dimension1;
                echo "<p>Área del círculo: $area</p>";
                echo "<p>Perímetro del círculo: $perimetro</p>";
                break;
            case 'cuadrado':
                $area = pow($dimension1, 2);
                $perimetro = 4 * $dimension1;
                echo "<p>Área del cuadrado: $area</p>";
                echo "<p>Perímetro del cuadrado: $perimetro</p>";
                break;
            case 'rectangulo':
                $area = $dimension1 * $dimension2;
                $perimetro = 2 * ($dimension1 + $dimension2);
                echo "<p>Área del rectángulo: $area</p>";
                echo "<p>Perímetro del rectángulo: $perimetro</p>";
                break;
            default:
                echo "Figura no válida";
                break;
        }
    }
    ?>