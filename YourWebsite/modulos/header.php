<header class="site-header">
    <div class="contenedor contenido-header">
        <div class="barra">
            <a href="index.php"><img src="assets/img/yourwebsite.png" alt="Logo de Your Website"></a>

            <div class="mobile-menu">
                <a href="#navegacion"><img src="assets/img/barras.svg" alt="Icono menu"></a>
            </div>

            <nav id="navegacion" class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="paginas.php">Páginas</a>
                <a href="consejos.php">Consejos</a>
                <a href="contacto.php">Contacto</a>
                <?php
                    if(isset($_SESSION["usuario_nombre"]) && $_SESSION["usuario_nombre"] != '') {
                        echo "<a href='admininicio.php'>". $_SESSION["usuario_nombre"]. "</a>";
                    } else {
                ?>
                    <a href="login.php">Iniciar Sesión</a>
                <?php
                    }
                ?>
            </nav>
        </div>
    </div>
    <!-- contenedor -->
</header>
