<?php

include "modelos/productoModel.php";

class ProductosController{

    

    //REGISTRAR LOS USUARIOS 

    public function RegistrarUsuarios(){
        if(isset($_POST["nombreR"])){
    
            $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"],"sexo"=>$_POST["sexo"],"fecha"=>$_POST["fechaR"],"dni"=>$_POST["dniR"],"email"=>$_POST["emailR"],"usuario"=>$_POST["usuarioR"],"clave"=>$_POST["claveR"]);

            $tablaBD = "usuarios";

            $respuesta = UsuarioModel::RegistrarUsuarios($datosC, $tablaBD);

            if($respuesta == "Bien"){
                $_SESSION['usuario_regitrado_exito'] = true;
                header("location:login.php");
            }
            else{
                echo "ERROR";
            }
        }
    }

    //MOSTRAR LOS EMPLEADOS

    public function MostrarUsuariosC(){

        $tablaBD = "usuarios";

        $respuesta = UsuarioModel::MostrarUsuarios($tablaBD);

        foreach ($respuesta as $key => $value){
            echo    '<tr>';
            echo    '<td>'.$value["nombre"].'</td>';
            echo    '<td>'.$value["apellido"].'</td>';
            echo    '<td>'.$value["sexo"].'</td>';
            echo    '<td>'.$value["fecha"].'</td>';
            echo    '<td>'.$value["dni"].'</td>';
            echo    '<td>'.$value["email"].'</td>';
            echo    '<td>'.$value["usuario"].'</td>';
            echo    '<td><a href="adminusuarios.php?id='.$value["id"].'&admin='.!$value["administrador"].'">';
            if($value["administrador"]) {
                echo    '<button>Si</button></a>';
            } else {
                echo    '<button>No</button></a>';
            }
            echo    '</td>';
            echo    '<td><a href="admineditarusuario.php?id='.$value["id"].'"><button>Editar</button></a></td>';
            echo    '<td><a href="adminusuarios.php?id='.$value["id"].'"><button>Borrar</button></a></td>';
            echo    '</tr>';
        }
    }


    //EDITAR EMPLEADO
    public function EditarUsuario(){
        $datosC = $_GET["id"];

        $tablaBD = "usuarios";

        $respuesta = UsuarioModel::EditarUsuario($datosC,$tablaBD);

        echo '
        <form method="post" action="">
            <fieldset>
                <input type="hidden" value="'.$respuesta["id"].'" name="id">

                <label for="nombre">Nombre: </label>
                <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombre" required>

                <label for="apellido">Apellido: </label>
                <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellido" required>

                <label for="sexo">Sexo: </label>
                <label class="radio-inline">
                <input type="radio" name="sexo" value="F"checked>Femenino
                </label>
                <label class="radio-inline">
                <input type="radio" name="sexo" value="M" >Masculino
                </label>

                <?php
                    if (isset($_POST["sexo"])){
                        $_POST["sexo"]; 
                    }
                ?>
                
                <label for="apellido">Fecha: </label>
                <input type="text" placeholder="Fecha" value="'.$respuesta["fecha"].'" name="fecha" required>

                <label for="apellido">DNI: </label>
                <input type="number" placeholder="Dni" value="'.$respuesta["dni"].'" name="dni" required>

                <label for="apellido">Email: </label>
                <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="email" required>

                <label for="apellido">Usuario: </label>
                <input type="text" placeholder="Usuario" value="'.$respuesta["usuario"].'" name="usuario" required>

                <input value="'.$respuesta["clave"].'" name="clave" type="hidden">         

                <input type="submit" value="Actualizar" class="boton boton-verde">
            </fieldset> 
        </form>';
    }

    public function EditarUsuario2(){
        $datosC = $_GET["id"];

        $tablaBD = "usuarios";

        $respuesta = UsuarioModel::EditarUsuario($datosC,$tablaBD);

        echo '
        <fieldset> 
        
            <input type="hidden" value="'.$respuesta["id"].'" name="id">

            <label for="nombre">Nombre: </label>
            <input type="text" placeholder="Nombre" value="'.$respuesta["nombre"].'" name="nombre" required>

            <label for="apellido">Apellido: </label>
            <input type="text" placeholder="Apellido" value="'.$respuesta["apellido"].'" name="apellido" required>

            <label for="apellido">Fecha: </label>
            <input type="text" placeholder="Fecha" value="'.$respuesta["fecha"].'" name="fecha" required>

            <label for="apellido">DNI: </label>
            <input type="number" placeholder="Dni" value="'.$respuesta["dni"].'" name="dni" required>

            <label for="apellido">Email: </label>
            <input type="email" placeholder="Email" value="'.$respuesta["email"].'" name="email" required>

            <label for="apellido">Usuario: </label>
            <input type="text" placeholder="Usuario" value="'.$respuesta["usuario"].'" name="usuario" required>

            <label for="clave">Nueva clave: </label>
            <input value="'.$respuesta["clave"].'" name="clave" type="password" placeholder="Ingresa nueva clave">         

            <input type="submit" value="Actualizar" class="boton boton-verde">
        </fieldset> ';
    }

    public function ActualizarUsuario(){
        if(isset($_POST["nombre"])){
            $datosC = array("id"=>$_POST["id"],"nombre"=>$_POST["nombre"],"apellido"=>$_POST["apellido"],"sexo"=>$_POST["sexo"], "fecha"=>$_POST["fecha"],"dni"=>$_POST["dni"],"email"=>$_POST["email"],"usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"]);

            $tablaBD = "usuarios";

            $respuesta = UsuarioModel::ActualizarUsuario($datosC,$tablaBD);

            if($respuesta == "Bien"){
                header("admineditarusuario.php");
            }
            else{
                echo "ERROR";
            }


        }
    }


    //ELIMINAR EMPLEADO
    public function BorrarUsuario(){

        if(isset($_GET["id"]) && !isset($_GET["admin"])){
            $datosC = $_GET["id"];

            $tablaBD = "usuarios";

            $respuesta = UsuarioModel::BorrarUsuario($datosC,$tablaBD);

            if($respuesta == "Bien"){
                header("Location:adminusuarios.php");
            }
            else{
                echo "ERROR";
            }

            if($respuesta == "Error"){
                header("Location:adminusuarios.php");
                echo "ERROR";
            }
            else{
                echo "ERROR";
            }

        }
    }

    // CAMBIAR ADMIN
    public function CambiarAdmin(){

        if(isset($_GET["admin"]) && isset($_GET["id"])){
            $admin = $_GET["admin"];
            $id = $_GET["id"];

            $tablaBD = "usuarios";

            $respuesta = UsuarioModel::CambiarAdmin($id, $admin, $tablaBD);

            if($respuesta == "Bien"){
                header("Location:adminusuarios.php");
            }
            else{
                echo "ERROR";
            }

            if($respuesta == "Error"){
                header("Location:adminusuarios.php");
                echo "ERROR";
            }
            else{
                echo "ERROR";
            }

        }
    }
}