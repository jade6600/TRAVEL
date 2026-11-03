<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#173F35">
    <meta name="description" content="TRAVEL: descubre destinos, cultura y experiencias de Santander, Colombia.">
    <title>TRAVEL | Explora Santander</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body class="pagina-acceso">
    <main class="acceso-layout">
        <section class="acceso-visual" aria-label="Paisaje natural de Santander">
            <div class="visual-capa"></div>
            <header class="marca marca-clara">
                <span class="marca-icono" aria-hidden="true">T</span>
                <span>TRAVEL</span>
            </header>

            <div class="visual-contenido">
                <span class="etiqueta-visual">SANTANDER · COLOMBIA</span>
                <h1>Hay lugares que merecen ser descubiertos.</h1>
                <p>Explora nuevos destinos, conoce su cultura y encuentra experiencias que conectan con lo mejor de nuestra región.</p>
            </div>

            <div class="visual-pie">
                <span>Descubre. Explora. Vive Santander.</span>
                <span class="indicador-foto">TURISMO REGIONAL</span>
            </div>
        </section>

        <section class="acceso-panel">
            <div class="acceso-contenedor">
                <div class="marca marca-oscura marca-movil">
                    <span class="marca-icono" aria-hidden="true">T</span>
                    <span>TRAVEL</span>
                </div>

                <div class="acceso-encabezado">
                    <span class="sobrelinea">TU PRÓXIMO DESTINO COMIENZA AQUÍ</span>
                    <h2>Bienvenido a TRAVEL</h2>
                    <p>Inicia sesión para continuar explorando Santander.</p>
                </div>

                <form class="formulario-acceso" action="modelo/loguear.php" method="post">
                    <div class="campo-formulario">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" placeholder="nombre@correo.com" autocomplete="email" required>
                    </div>

                    <div class="campo-formulario">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" autocomplete="current-password" required>
                    </div>

                    <button class="boton-principal" type="submit">Iniciar sesión <span aria-hidden="true">→</span></button>
                </form>

                <div class="separador"><span>¿Aún no tienes una cuenta?</span></div>
                <a class="boton-secundario" href="registrar_turista.php">Crear una cuenta</a>

                <p class="nota-acceso">Al continuar, podrás acceder a los destinos y contenidos disponibles en TRAVEL.</p>
            </div>
            <footer class="pie-acceso">© 2026 TRAVEL · Turismo por Santander</footer>
        </section>
    </main>
</body>
</html>
