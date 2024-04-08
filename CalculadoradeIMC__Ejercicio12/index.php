<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <p>Ingresa tu peso y altura</p>
    <p>Y determina tu Indice De Masa Coporal</p>
    <p>Ingresa tu peso</p>
    <form action="IMC.php" method="post">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required>
        <br>
        <p>Ingresa tu altura</p>
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <input type="submit" value="Calcular IMC">
    </form>
</body>
</html>