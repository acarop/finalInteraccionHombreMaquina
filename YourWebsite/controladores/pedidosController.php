<?php

    include "modelos/pedidosModel.php";

class PedidosController{

    

    //REGISTRAR LOS USUARIOS 

    public function RegistrarPedidos(){
        if(isset($_POST["tipo"])){
    
            $datosC = array("tipo"=>$_POST["tipo"], "detalle"=>$_POST["detalle"],"estado"=>$_POST["estado"],"fecha"=>$_POST["fecha"]);

            $tablaBD = "pedidos";

            $respuesta = PedidosModel::RegistrarPedidos($datosC,$tablaBD);

            if($respuesta == "Bien"){
                header("usuariocomprar.php");
            }
            else{
                echo "ERROR";
            }
        }
    }

    //MOSTRAR LOS Pedidos

    public function MostrarPedidosC(){

        $tablaBD = "pedidos";

        $respuesta = PedidosModel::MostrarPedidos($tablaBD);

        foreach ($respuesta as $key => $value){
            echo    '<tr>
                        <td>'.$value["tipo"].'</td>
                        <td>'.$value["detalle"].'</td>
                        <td>'.$value["estado"].'</td>
                        <td>'.$value["fecha"].'</td>
                        <td><a href="usuariopedidos.php?id='.$value["id"].'"><button>Contactar</button></a></td>
                        
                    </tr>';
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

        if(isset($_GET["id"])){
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
}