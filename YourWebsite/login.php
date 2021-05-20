<?php
    session_start();
    include "site-config/environment.php";
    $title = "Login | YourWebsite";
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
            <h2 class="fw-300 centrar-texto">Iniciar Sesión</h2>
            <form method="post" action="">
                <fieldset>
                    <!-- crea campos relacionados (linea que rodea el form)-->
                    <legend>Iniciar sesión</legend>
                    <!-- Le da un título al campo-->
                    <label for="usuario">Usuario: </label>
                    <input type="text" name="usuario" placeholder="Ingresa tu Usuario" required>

                    <label for="clave">Contraseña: </label>
                    <input type="password" name="clave" placeholder="Ingresa tu Contraseña" required>
                    <!-- Required hace obligatorio el campo-->
                       
                    <p style="color: darkred;">
                        <b>
                            <?php 
                                if(isset($_SESSION['login_error'])) {
                                    echo $_SESSION['login_error'];
                                }
                            ?>
                        </b>
                    </p>

                    <?php
                        if(isset($_SESSION['usuario_regitrado_exito']) && $_SESSION['usuario_regitrado_exito']) {
                            $_SESSION['usuario_regitrado_exito'] = false;
                            echo "<p style='color: green;'>Usuario registrado con éxito</p>";
                        }
                    ?>
                    
                    <input type="submit" value="Ingresar" class="boton boton-verde">
                    <a href="registrar.php">Registrarme</a>

                </fieldset>
            </form>         
        </main>

        <?php
            include "modulos/footer.php";
        ?>  

    </body>

    <?php 
        include "controladores/adminController.php";

        $ingreso = new AdminController();
        $ingreso -> Ingreso();
    ?>
</html>