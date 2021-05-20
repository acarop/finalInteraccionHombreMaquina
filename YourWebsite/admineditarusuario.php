<?php
    session_start();
    include "site-config/environment.php";
    $title = "Editar empleado | YourWebsite";
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
            <h1>Editar un empleado</h1>
            <form method="post" action="adminusuarios.php">          
                <?php
                    include "controladores/usuariosController.php";            

                    $editar = new UsuariosController();
                    $editar -> EditarUsuario();

                    $actualizar = new UsuariosController();
                    $actualizar -> ActualizarUsuario();
                ?>
            </form>
        </main>
    </body>
            
    <?php
        include "modulos/footer.php";
    ?>  
</html>
