<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>¡Calcula cuantos años tienes!</h1>
<p>Ingresa tu fecha de nacimiento</p>
    <form action="edad.php" method="post">
        <label for="nacimiento">Ingresar:</label>
        <input type="date" id="nacimiento" name="nacimiento" required>
        <input type="submit" value="Calcular edad">
    </form>
</body>
</html>