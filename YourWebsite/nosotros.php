<?php
    session_start();
    include "site-config/environment.php";
    $title = "Nosotros | YourWebsite";
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

        <main class="contenedor">
            <h1 class="fw-300 centrar-texto">Conoce Sobre Nosotros</h1>
            <div class="contenido-nosotros">
                <div class="imagen">
                    <img src="assets/img/sobrenosotros.jpg" alt="imagen nosotros">
                </div>
                <div class="texto-nosotros">
                    <blockquote>25 Años de Experiencia</blockquote>
                    <p>Vestibulum et fringilla erat. Cras ac mattis eros, ac gravida magna. Donec blandit congue erat, sed tincidunt nisl fermentum vel. Maecenas luctus sed leo vulputate ullamcorper. Phasellus pellentesque ligula a ligula ullamcorper pellentesque.
                        Integer sed massa odio. Duis nec diam felis. Curabitur hendrerit justo sit amet neque bibendum, eu mollis mi faucibus. Aenean velit ante, mollis ac leo id, ullamcorper ullamcorper risus. Vivamus in vestibulum lorem. Mauris sit amet
                        velit sollicitudin libero vestibulum dignissim. Nulla et orci iaculis, mattis orci nec, egestas lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</p>

                    
                </div>
            </div>
        </main>
        <section class="contenedor seccion">
            <h2 class="fw-300 centrar-texto">Mas Sobre Nosotros</h2>
            <div class="iconos-nosotros">
                <div class="icono">
                    <img src="assets/img/icono1.svg" alt="Icono seguridad">
                    <h3>Seguridad</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam eos molestias dolorum illo rem quibusdam aliquid qui veritatis laborum. Animi delectus quaerat odit mollitia enim veniam deleniti velit nulla.</p>
                </div>

                <div class="icono">
                    <img src="assets/img/icono2.svg" alt="Icono Mejor Precio">
                    <h3>El Mejor Precio</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam eos molestias dolorum illo rem quibusdam aliquid qui veritatis laborum. Animi delectus quaerat odit mollitia enim veniam deleniti velit nulla.</p>
                </div>

                <div class="icono">
                    <img src="assets/img/icono3.svg" alt="Icono A Tiempo">
                    <h3>A Tiempo</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam eos molestias dolorum illo rem quibusdam aliquid qui veritatis laborum. Animi delectus quaerat odit mollitia enim veniam deleniti velit nulla.</p>
                </div>
            </div>
        </section>

        <?php
            include "modulos/footer.php";
        ?>
    </body>
</html>