<?php
    session_start();
    include "site-config/environment.php";
    $title = "Contacto | YourWebsite";
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
        <h1 class="fw-300 centrar-texto">Contacto</h1>
        <img src="assets/img/contacto.jpg" alt="imagen principal">

        <main class="contenedor seccion contenido-centrado">
            <h2 class="fw-300 centrar-texto">Llenar formulario de Contacto</h2>
            <form method="post" action="">
                <fieldset>
                    <!-- crea campos relacionados (linea que rodea el form)-->
                    <legend>Información Personal</legend>
                    <!-- Le da un título al campo-->
                    <label for="nombre">Nombre: </label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">

                    <label for="email">Email: </label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu Email" required>
                    <!-- Required hace obligatorio el campo-->

                    <label for="telefono">Teléfono: </label>
                    <input type="number" id="telefono" name="telefono" placeholder="Ingresa tu telefono">

                    <label for="mensaje">Mensaje: </label>
                    <textarea name="mensaje" id="mensaje" name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
                </fieldset>
                <input type="submit" value="Enviar" class="boton boton-verde">
            </form>

            <?php
                include "controladores/coreController.php";
                $registrar = new CoreController();
                $registrar -> EnviarMensaje();
            ?>
        </main>

        <?php
            include "modulos/footer.php";
        ?>
    </body>
</html>