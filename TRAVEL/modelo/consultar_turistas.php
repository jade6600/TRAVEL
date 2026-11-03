<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require 'conexion.php';

    session_start();

    if(isset($_SESSION['username']))
    {
        $nombre_usuario = $_SESSION['username'];
    }
    else
    {
        header('location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Turistas</title>
</head>
<body>
<h1>Consulta Turistas</h1>
<?php
    echo "Usuario: " . $nombre_usuario;
?>
<br><br>
<table border="1" align="center">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Correo</th>
    <th>Telefono</th>
    <th>Presupuesto</th>
    <th>Eliminar</th>
</tr>

<?php

$query = "SELECT * FROM turista";
$resultado = mysqli_query($conexion, $query)
or trigger_error("Error en la consulta: " . mysqli_error($conexion));

while($fila = mysqli_fetch_array($resultado))
{
    echo "<tr>";

        echo "<td>".$fila['id_turista']."</td>";

        echo "<td>".$fila['nombre_usuario']."</td>";

        echo "<td>".$fila['apellidos_usuario']."</td>";

        echo "<td>".$fila['correo']."</td>";

        echo "<td>".$fila['telefono']."</td>";

        echo "<td>".$fila['presupuesto']."</td>";

        echo "<td>
                <a href='eliminar_turista.php?id=".$fila['id_turista']."'
                onclick=\"return confirm('¿Desea eliminar este turista?')\">
                Eliminar
                </a>
              </td>";

    echo "</tr>";
}
?>
</table>
<br>
<a href="../admin.php">Volver al panel</a>
</body>
</html>