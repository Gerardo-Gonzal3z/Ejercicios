<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Mayoría de Edad</title>
</head>
<body>
    <h1>Verificar Mayoría de Edad</h1>
    <p>Bienvenido, Ingresa tu edad</p>
    <form method="POST" action="validacion.php">
        <label for="edad">Ingresa tu edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>