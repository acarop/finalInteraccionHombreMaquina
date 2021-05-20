<?php
    session_start();
    include "site-config/environment.php";
    $title = "Páginas | YourWebsite";
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "modulos/head.php";
    ?>
    <body>
        <?php
            include "modulos/header.php";
        ?>
        <main class="seccion contenedor">
            <h2 class="fw-300 centrar-texto">Nuestras páginas</h2>

            <div class="contenedor-anuncios">
                <div class="anuncio">
                    <img src="assets/img/paginasolicitada1.png" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página para Educación</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/paginasolicitada2.png" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página Foro</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/paginasolicitada3.jpg" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página Viajes</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/paginasolicitada4.jpg" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página tipo Blog</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/paginasolicitada5.jpg" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página de Ventas</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>

                <div class="anuncio">
                    <img src="assets/img/paginasolicitada6.png" alt="Anuncio Casa en el Lago">
                    <div class="contenido-anuncio">
                        <h3>Página de Ventas</h3>
                        <p>Personaliza tu página como quieras, usa esta web de referencia</p>
                        <p class="precio">$30,000</p>
                    
                        <a href="verpagina.php" class="boton boton-naranja d-block">Ver página</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
    <?php
        include "modulos/footer.php";
    ?>
</body>
