<?php
    include "modulos/headerprincipal.php";
?>

<head>
    <title>Home | YourWebsite</title>
</head>

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

<main class="seccion contenedor">
    <h2 class="fw-300 centrar-texto">Las páginas más solicitadas</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <img src="assets/img/paginasolicitada1.png" alt="Anuncio Casa en el Lago">
            <div class="contenido-anuncio">
                <h3>Página Educación</h3>
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
    </div>

    <div class="ver-todas">
        <a href="paginas.php" class="boton boton-verde">Ver Todas</a>
    </div>
</main>

<section class="imagen-contacto">
    <div class="contenedor contenido-contacto">
        <h2>Elige tu página favorita</h2>
        <p>Mejora el rendimiento de tu empresa con nuestras páginas web</p>
        <a href="contacto.php" class="boton boton-naranja">Contactanos</a>
    </div>
</section>

<?php
    include "modulos/footer.php";
?>