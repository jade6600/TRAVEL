<?php
    session_start();

    if(isset($_SESSION['rol']) && $_SESSION['rol'] == 'turista')
    {
        $nombre_usuario = $_SESSION['username'];
    }
    else
    {
        header('location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Turista</title>
</head>
<body>

    <h1>TRAVEL</h1>

    <hr>

    <?php
        echo 'Usuario: '.$nombre_usuario;
    ?>

    <hr>

    <h2>Bienvenido a TRAVEL</h2>

    <p>
        Travel viaja hoy, recuerda siempre
    </p>

    <hr>

    <h2>Salir</h2>

    <a href="modelo/cerrar_sesion.php">
        Cerrar sesión
    </a>

</body>
</html>