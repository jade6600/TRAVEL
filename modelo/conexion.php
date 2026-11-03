
<?php
    // Script para crear una conexión con la BD

    // Parámetros requeridos para la conexión a la BD

    // Detectar si se está ejecutando en localhost
    $local = (
        ($_SERVER['HTTP_HOST'] ?? '') == 'localhost' ||
        ($_SERVER['HTTP_HOST'] ?? '') == '127.0.0.1'
    );

    // Parámetros BD local
    if ($local) {

        DEFINE('USER', 'root');
        DEFINE('PW', '');
        DEFINE('HOST', '127.0.0.1');
        DEFINE('BD', 'TRAVEL');

        $puerto = 3305;

    } /*else {

        // Parámetros BD remota (InfinityFree)
        /*DEFINE('USER', 'if0_41712656');
        DEFINE('PW', '4AjXqhHOCO');
        DEFINE('HOST', 'sql213.infinityfree.com');
        DEFINE('BD', 'if0_41712656_travel');

        $puerto = 3306;
    }*/

    // Conexión con la BD
    $conexion = mysqli_connect(HOST, USER, PW, BD, $puerto);

    // Verificar la conexión con la BD
    if (!$conexion) {
        die("La conexión con la BD falló: " . mysqli_connect_error());
    }

    // Establecer conjunto de caracteres
    mysqli_set_charset($conexion, "utf8mb4");

?>

