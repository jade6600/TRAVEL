<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    require 'conexion.php';

    $id_turista = $_POST['id_turista'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $apellidos_usuario = $_POST['apellidos_usuario'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];
    $presupuesto = $_POST['presupuesto'];
    $cuenta_google = $_POST['cuenta_google'];

    $query = "INSERT INTO turista
    (id_turista, nombre_usuario, apellidos_usuario, correo, telefono, password, presupuesto, cuenta_google)
    VALUES
    ('$id_turista', '$nombre_usuario', '$apellidos_usuario', '$correo', '$telefono', '$password', '$presupuesto', '$cuenta_google')";

    $insercion = mysqli_query($conexion, $query)
    or trigger_error("Error en la inserción de los datos: " . mysqli_error($conexion));

    if($insercion)
    {
        echo '<script type="text/javascript">
                alert("Turista registrado correctamente");
                window.location.href = "../index.php";
              </script>';
    }
    else
    {
        echo "Error al registrar turista";
    }
?>