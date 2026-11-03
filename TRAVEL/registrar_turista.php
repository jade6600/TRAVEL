<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Turista</title>
</head>
<body>

<h1>Registrar Turista</h1>

<form action="modelo/reg_turista.php" method="post">

    <label>Id Turista:</label>
    <input type="text" name="id_turista" required>
    <br><br>

    <label>Nombre:</label>
    <input type="text" name="nombre_usuario" required>
    <br><br>

    <label>Apellidos:</label>
    <input type="text" name="apellidos_usuario" required>
    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" required>
    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>
    <br><br>

    <label>Contraseña:</label>
    <input type="password" name="password" required>
    <br><br>

    <label>Presupuesto:</label>
    <input type="number" name="presupuesto" required>
    <br><br>

    <label>Cuenta Google:</label>
    <input type="text" name="cuenta_google">
    <br><br>

    <button type="submit">Registrar</button>

</form>

<br><br>

<a href="index.php">Volver al inicio de sesión</a>

</body>
</html>