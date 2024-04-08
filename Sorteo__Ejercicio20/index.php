<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sorteo</h1>
    <p>Bienvenido ingresa su nombre para participar en el sorte</p>
    <p>Debe ingresar su nombre y apellido completo</p>
    <form action="sorteo.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido">
    <input type="submit" value="Participar en el sorteo">
    </form>
</body>
</html>