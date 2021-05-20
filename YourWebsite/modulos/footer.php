<footer class="site-footer seccion">
    <div class="contenedor contenedor-footer">
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
        <p class="copyright">Todos los Derechos Reservados 2020 &commat; </p>
    </div>
</footer>