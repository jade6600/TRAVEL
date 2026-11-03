<?php

require 'conexion.php';

session_start();

if(!isset($_SESSION['rol']) || $_SESSION['rol'] != 'admin')
{
    header("Location: ../index.php");
    exit();
}

$id = $_GET['id'];

$query = "DELETE FROM turista
          WHERE id_turista = '$id'";

$resultado = mysqli_query($conexion, $query);

if($resultado)
{
    header("Location: consultar_turistas.php");
    exit();
}
else
{
    echo "Error al eliminar: " . mysqli_error($conexion);
}

?>