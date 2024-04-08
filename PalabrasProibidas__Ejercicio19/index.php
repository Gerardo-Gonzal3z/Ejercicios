<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Palabras Prohibidas</h1>
<p>Ingrese una oracion</p>
    <form action="palabra.php" method="post">
        <label for="pa">Ingresar la oración:</label>
        <input type="text" id="pa" name="pa" required>
        <br>
        <p>Enlista las palabras a eliminar</p>
        <label for="p">Usa "-" para eliminar las palabras</label>
        <input type="text" id="p" name="p" required>
        <input type="submit" value="Reemplazar">
    </form>
</body>
</html>