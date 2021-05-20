<?php
    session_start();
    include "site-config/environment.php";
    $title = "Editar información | YourWebsite";
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
            <h1>Editar mi información</h1>
            <form method="post" action="admininicio.php">      
                <?php

                    include "controladores/usuariosController.php";            

                    $editar = new UsuariosController();
                    $editar -> EditarUsuario2();

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