<?php
    session_start();
    include "site-config/environment.php";
    $title = "Consejos | YourWebsite";
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

        <main class="contenedor seccion contenido-centrado">
            <h1 class="fw-300 centrar-texto">Consejos</h1>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="assets/img/paginasolicitada1.png" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Páginas Educativas</h4>
                    </a>
                    <p>Escrito el: <span>20/10/2019</span> por: <span> Admin</span></p>
                    <p>Consejos para atraer más personas a páginas educativas</p>
                </div>
            </article>

            <article class="entrada-blog">
                <div class="imagen">
                    <img src="assets/img/paginasolicitada2.png" alt="Entrada de blog">
                </div>
                <div class="texto-entrada">
                    <a href="entrada.html">
                        <h4>Páginas de Foro</h4>
                    </a>
                    <p>Escrito el: <span>20/10/2019</span> por: <span> Admin</span></p>
                    <p>Las mejores opciones para crear una página de foro con muchos visitantes</p>
                </div>
            </article>
        </main>

        <?php
            include "modulos/footer.php";
        ?>
    </body>

</html>