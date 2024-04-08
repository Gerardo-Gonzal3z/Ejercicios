<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Convertidor de Temperatura</h1>
    <p>Ingrese la temperatura que desea convertir:</p>
    <form action="temp.php" method="post">
        Temperatura:
        <input type="text" name="temp">
        <br><br>
        Convertir de:
        <select name="from">
            <option value="C">Celsius</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
        </select>
        a
        <select name="to">
            <option value="F">Fahrenheit</option>
            <option value="C">Celsius</option>
            <option value="K">Kelvin</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
</body>
</html>