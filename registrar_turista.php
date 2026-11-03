<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta | TRAVEL</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="pagina-acceso">

    <main class="acceso-layout">

        <section class="acceso-panel">

            <div class="acceso-contenido">

                <a href="index.php" class="marca-travel">
                    TRAVEL<span>.</span>
                </a>

                <div class="acceso-encabezado">
                    <span class="acceso-etiqueta">ÚNETE A TRAVEL</span>

                    <h1>Crea tu cuenta</h1>

                    <p>
                        Regístrate y comienza a descubrir nuevos destinos,
                        experiencias y lugares de Santander.
                    </p>
                </div>

                <form action="modelo/reg_turista.php" method="post"
                      class="formulario-acceso">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="campo-acceso">
                            <label for="id_turista">Documento de identidad</label>
                            <input type="text" id="id_turista"
                                   name="id_turista" required>
                        </div>

                        <div class="campo-acceso">
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono"
                                   name="telefono" required>
                        </div>

                        <div class="campo-acceso">
                            <label for="nombre_usuario">Nombre</label>
                            <input type="text" id="nombre_usuario"
                                   name="nombre_usuario" required>
                        </div>

                        <div class="campo-acceso">
                            <label for="apellidos_usuario">Apellidos</label>
                            <input type="text" id="apellidos_usuario"
                                   name="apellidos_usuario" required>
                        </div>

                    </div>

                    <div class="campo-acceso">
                        <label for="correo">Correo electrónico</label>
                        <input type="email" id="correo"
                               name="correo" required>
                    </div>

                    <div class="campo-acceso">
                        <label for="cuenta_google">Cuenta Google</label>
                        <input type="text" id="cuenta_google"
                               name="cuenta_google">
                    </div>

                    <div class="campo-acceso">
                        <label for="presupuesto">Presupuesto</label>
                        <input type="number" id="presupuesto"
                               name="presupuesto" min="0" required>
                    </div>

                    <div class="campo-acceso">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password"
                               name="password" required>
                    </div>

                    <button type="submit" class="boton-acceso">
                        Crear cuenta
                    </button>

                </form>

                <p class="acceso-pie">
                    ¿Ya tienes una cuenta?
                    <a href="index.php">Inicia sesión</a>
                </p>

            </div>

        </section>

        <section class="acceso-visual">
            <div class="visual-capa"></div>
            <div class="acceso-visual-contenido">
                <span>DESCUBRE SANTANDER</span>
                <h2>Tu próxima experiencia comienza aquí.</h2>
                <p>
                    Explora destinos, conoce lugares especiales
                    y descubre nuevas formas de viajar.
                </p>
            </div>
        </section>

    </main>

</body>
</html>
