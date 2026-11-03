<?php
    require 'conexion.php';

    // iniciar sesión para guardar los datos del usuario
    session_start();

    $usuario = $_POST['email'];
    $password = $_POST['password'];

    // Buscar en la tabla admin
    $query_admin = "SELECT correo, COUNT(*) AS contar FROM admin WHERE correo = '$usuario' AND password_admin = '$password'";

    $consulta_admin = mysqli_query($conexion, $query_admin)
    or trigger_error("Error en la consulta MySQL: " . mysqli_error($conexion));

    $resultado_admin = mysqli_fetch_array($consulta_admin);

    if($resultado_admin['contar'] > 0)
    {
        $_SESSION['username'] = $usuario;
        $_SESSION['rol'] = 'admin';

        header("location: ../admin.php");
        exit();
    }

    // Buscar en la tabla turista
    $query_turista = "SELECT correo, COUNT(*) AS contar FROM turista WHERE correo = '$usuario' AND password = '$password'";

    $consulta_turista = mysqli_query($conexion, $query_turista)
    or trigger_error("Error en la consulta MySQL: " . mysqli_error($conexion));

    $resultado_turista = mysqli_fetch_array($consulta_turista);

    if($resultado_turista['contar'] > 0)
    {
        $_SESSION['username'] = $usuario;
        $_SESSION['rol'] = 'turista';

        header("location: ../pagina_usuario.php");
        exit();
    }

    echo "El usuario no existe o la contraseña es incorrecta";
?>