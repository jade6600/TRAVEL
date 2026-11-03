<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVEL</title>
</head>
<body>

    <h1>TRAVEL</h1>

    <!--Formulario de inicio de sesión-->
    <form action="modelo/loguear.php" method="post">

        <h2>Iniciar Sesión</h2>

        <label>E-mail:</label>
        <input type="email" name="email" required>
        <br><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Ingresar</button>

    </form>

    <br>

    <a href="registrar_turista.php">
        Registrarse como Turista
    </a>

</body>
</html>