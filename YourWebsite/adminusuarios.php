<?php
    session_start();
    include "site-config/environment.php";
    $title = "Administrar Usuarios | YourWebsite";
    include "controladores/usuariosController.php";
    $eliminar = new UsuariosController();
    $eliminar -> BorrarUsuario();
    $actualizar = new UsuariosController();
    $actualizar -> ActualizarUsuario();
    $mostrar = new UsuariosController();
    $mostrar -> CambiarAdmin(); 
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
            <h1>Empleados</h1>
            <table id="t1" border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Sexo</th>
                        <th>Fecha</th>
                        <th>DNI</th>
                        <th>Email</th>
                        <th>Usuario</th>
                        <th>Admin</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $mostrar -> MostrarUsuariosC();           
                    ?>
                </tbody>

            </table>
        </main>

        <?php	
            include "modulos/footer.php";
        ?>
    </body>
</html>