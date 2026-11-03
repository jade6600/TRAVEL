
<?php
    session_start();

    if (!isset($_SESSION['rol']) || $_SESSION['rol'] != 'turista') {
        header('Location: index.php');
        exit();
    }

    $nombre_usuario = htmlspecialchars(
        $_SESSION['username'] ?? 'Turista',
        ENT_QUOTES,
        'UTF-8'
    );
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TRAVEL | Explora Santander</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body class="pagina-inicio">

    <!-- ENCABEZADO -->
    <header class="inicio-header">

        <a href="pagina_usuario.php" class="inicio-logo">
            TRAVEL<span>.</span>
        </a>

        <nav class="inicio-nav">
            <a href="#inicio" class="nav-activo">Inicio</a>
            <a href="#destinos">Destinos</a>
            <a href="#experiencias">Experiencias</a>
            <a href="#guias">Guías</a>
        </nav>

        <div class="inicio-usuario">
            <div class="usuario-avatar">
                <?php echo strtoupper(substr($nombre_usuario, 0, 1)); ?>
            </div>

            <span><?php echo $nombre_usuario; ?></span>

            <a href="modelo/cerrar_sesion.php" class="cerrar-sesion">
                Salir
            </a>
        </div>

    </header>


    <!-- CONTENIDO PRINCIPAL -->
    <main>

        <!-- PRESENTACIÓN -->
        <section class="inicio-hero" id="inicio">

            <div class="hero-contenido">

                <span class="hero-etiqueta">
                    DESCUBRE SANTANDER
                </span>

                <h1>
                    Hay lugares que merecen
                    <span>ser descubiertos.</span>
                </h1>

                <p>
                    Explora nuevos destinos, conoce la riqueza cultural
                    de nuestra región y encuentra experiencias que
                    hacen especial cada viaje.
                </p>

                <a href="#destinos" class="hero-boton">
                    Explorar destinos <span>→</span>
                </a>

            </div>

            <div class="hero-decoracion">
                <span>SANTANDER · COLOMBIA</span>
            </div>

        </section>


        <!-- DESTINOS -->
        <section class="inicio-seccion" id="destinos">

            <div class="seccion-encabezado">

                <div>
                    <span class="seccion-etiqueta">EXPLORACIÓN</span>
                    <h2>Descubre nuevos destinos</h2>
                    <p>
                        Encuentra lugares para conocer y experiencias
                        para recordar.
                    </p>
                </div>

            </div>

            <div class="destinos-vacio">
                <div class="destinos-icono">⌖</div>

                <h3>Tu próxima aventura comienza aquí</h3>

                <p>
                    Estamos preparando la exploración de destinos
                    turísticos de Santander.
                </p>
            </div>

        </section>


        <!-- EXPERIENCIAS -->
        <section class="inicio-seccion experiencias-seccion" id="experiencias">

            <div class="seccion-encabezado">

                <div>
                    <span class="seccion-etiqueta">VIVE LA REGIÓN</span>
                    <h2>Explora diferentes experiencias</h2>
                    <p>
                        Santander tiene mucho por descubrir.
                    </p>
                </div>

            </div>

            <div class="experiencias-grid">

                <article class="experiencia-card naturaleza">
                    <span>01</span>
                    <div>
                        <h3>Naturaleza</h3>
                        <p>Paisajes, montañas y espacios naturales.</p>
                    </div>
                </article>

                <article class="experiencia-card cultura">
                    <span>02</span>
                    <div>
                        <h3>Cultura</h3>
                        <p>Tradiciones, historia y patrimonio regional.</p>
                    </div>
                </article>

                <article class="experiencia-card gastronomia">
                    <span>03</span>
                    <div>
                        <h3>Gastronomía</h3>
                        <p>Sabores y establecimientos locales.</p>
                    </div>
                </article>

            </div>

        </section>


        <!-- GUÍAS -->
        <section class="inicio-seccion guias-seccion" id="guias">

            <div class="guias-contenido">

                <div>
                    <span class="seccion-etiqueta">PLANEA TU VIAJE</span>
                    <h2>Viaja con información confiable.</h2>

                    <p>
                        Próximamente encontrarás recomendaciones,
                        información de interés y orientación para
                        organizar tus recorridos por Santander.
                    </p>
                </div>

                <span class="guias-decoracion">TRAVEL.</span>

            </div>

        </section>

    </main>


    <!-- PIE DE PÁGINA -->
    <footer class="inicio-footer">

        <a href="#inicio" class="inicio-logo">
            TRAVEL<span>.</span>
        </a>

        <p>
            Viaja hoy, recuerda siempre.
        </p>

        <span>Explora Santander · Colombia</span>

    </footer>

</body>
</html>
