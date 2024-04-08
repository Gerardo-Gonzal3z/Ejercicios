<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área y Perímetro de Figuras</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Área y Perímetro de Figuras</h1>

    <form method="POST" action="figuras.php">
        <label for="figura">Selecciona una figura:</label>
        <select name="figura" id="figura">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
        </select>
        <br><br>
        <label for="dimension1">Ingresa primer dato:</label>
        <input type="number" name="dimension1" required>
        <br><br>
        <label for="dimension2">Ingresa la segundo dato:</label>
        <input type="number" name="dimension2">
        <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
