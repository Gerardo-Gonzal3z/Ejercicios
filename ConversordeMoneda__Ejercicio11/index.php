<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de Temperatura</title>
</head>
<body>
    <h1>Conversor de Moneda</h1>
    <p>Ingrese la cantidad que desea cambiar:</p>
    <form action="moneda.php" method="post">
        Cantidad:
        <input type="text" name="mo">
        <br><br>
        Convertir a:
        <select name="from">
            <option value="D">Dolares</option>
            <option value="P">Pesos Mexicanos</option>
            <option value="E">Euros</option>
        </select>
        a
        <select name="to">
            <option value="D">Dolares</option>
            <option value="P">Pesos Mexicanos</option>
            <option value="E">Euros</option>
        </select>
        <br><br>
        <input type="submit" value="Convertir">
    </form>
</body>
</html>