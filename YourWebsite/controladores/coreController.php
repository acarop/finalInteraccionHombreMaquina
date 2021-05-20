<?php


include "modelos/coreModel.php";

class CoreController{

    //ENVIAR MENSAJE

    public function EnviarMensaje(){
        if(isset($_POST["nombre"])){
            $usuario_id = NULL;
            if(isset($_SESSION["usuario_id"]) && $_SESSION["usuario_id"] != ''){
                $usuario_id = $_SESSION["usuario_id"];
            }
            
            $datosC = array("usuario_id"=>$usuario_id,"nombre"=>$_POST["nombre"], "email"=>$_POST["email"],"telefono"=>$_POST["telefono"],"mensaje"=>$_POST["mensaje"]);

            $tablaBD = "contacto";

            $respuesta = CoreModel::EnviarMensaje($datosC,$tablaBD);

            if($respuesta == "Bien"){
                echo "MENSAJE ENVIADO";
            }
            else{
                echo "ERROR";
            }
        }
    }

    public function MostrarMensajes(){

        $tablaBD = "contacto";

        $respuesta = CoreModel::MostrarMensajes($tablaBD);

        return $respuesta; 
        /*foreach ($respuesta as $key => $value){
        echo    '<tr>
                    <td>'.$value["nombre"].'</td>
                    <td>'.$value["email"].'</td>
                    <td>'.$value["telefono"].'</td>
                    <td>'.$value["mensaje"].'</td>
                    <td><a href="adminusuarios.php?id='.$value["id"].'"><button>Responder</button></a></td>
                    <td><a href="admineditarusuario.php?id='.$value["id"].'"><button>Borrar</button></a></td>
                    <td><a href="adminusuarios.php?id='.$value["id"].'"><button>Marcar como spam</button></a></td> 
                </tr>';
        }*/
    }

    public function EliminarMensaje(){

        if(isset($_GET["id"])){
            $datosC = $_GET["id"];

            $tablaBD = "contacto";

            $respuesta = CoreModel::EliminarMensaje($datosC, $tablaBD);

            if($respuesta == "Bien"){
                header("Location:admininicio.php");
            }
            else{
                echo "ERROR";
            }

            if($respuesta == "Error"){
                header("Location:admininicio.php");
                echo "ERROR";
            }
            else{
                echo "ERROR";
            }

        }
    }

}

?>