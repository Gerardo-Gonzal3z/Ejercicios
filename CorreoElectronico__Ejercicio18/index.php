<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Validación de Correo Electrónico</h1>
   <p>Bienvenido ingrese su E-mail</p>
    <form action="correo.php" method="post">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Validar">
    </form>
</body>
</html>