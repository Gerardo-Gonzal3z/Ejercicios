<body>
    <h1>Generador de contraseña</h1>
    <p>El programa pide la longitud que desee de su contraseña</p>
    <form action="contraseña.php" method="post">
        Ingrese la longitud deseada: <input type="number" min="6" max="20" name="longitud">
        <input type="submit" name="submit" value="Generar">
    </form>
</body>
</html>