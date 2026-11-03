<?php
    session_start();

    if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
    {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administrador TRAVEL</title>
</head>
<body>

<h1>Bienvenido Administrador</h1>

<p>Panel de administración de TRAVEL</p>

<h2>Administración de Turistas</h2>

<a href="modelo/consultar_turistas.php">
Consultar Turistas
</a>

<br><br>

<a href="modelo/cerrar_sesion.php">Cerrar sesión</a>

</body>
</html>