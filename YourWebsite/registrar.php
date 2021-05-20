<?php
    session_start();
    include "site-config/environment.php";
    include "controladores/usuariosController.php";
    $title = "Registrarme | YourWebsite";
    $registrar = new UsuariosController();
    $registrar -> RegistrarUsuarios();
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
            <h2 class="fw-300 centrar-texto">Registrarme</h2>
            <form method="post" action="">
                <fieldset>
                    <!-- crea campos relacionados (linea que rodea el form)-->
                    
                    <!-- Le da un título al campo-->
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombreR" placeholder="Ingresa tu Nombre" required>

                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellidoR" placeholder="Ingresa tu Apellido" required>

                    <label for="sexo">Sexo: </label>
                    <label class="radio-inline">
                    <input type="radio" name="sexo" value="F"checked >Femenino
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="sexo" value="M" >Masculino
                    </label>

                    <?php
                        if (isset($_POST['sexo'])){
                            $_POST['sexo']; 
                        }
                    ?>

                    <label for="fecha">Fecha de nacimiento: </label>
                    <input type="date" name="fechaR" placeholder="Ingresa tu Fecha de nacimiento" required>

                    <label for="dni">DNI: </label>
                    <input type="number" name="dniR" placeholder="Ingresa tu DNI" required>

                    <label for="email">email: </label>
                    <input type="email" name="emailR" placeholder="Ingresa tu email" required>

                    <label for="usuario">Usuario: </label>
                    <input type="text" name="usuarioR" placeholder="Ingresa tu Usuario" required>

                    <label for="contraseña">Contraseña: </label>
                    <input type="password" name="claveR" placeholder="Ingresa tu Contraseña" required>
                    <!-- Required hace obligatorio el campo-->
                    
                    <input type="submit" value="Registrarme" class="boton boton-verde" name="registrar">

                </fieldset> 
            </form> 
        </main>
    </body>
        
    <?php
        include "modulos/footer.php";
    ?>  
</html>
