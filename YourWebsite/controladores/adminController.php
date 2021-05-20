<?php
    include "modelos/adminModel.php";

    class AdminController {

        public function Ingreso() {

            if(isset($_POST["usuario"])){
                $_SESSION["login_error"]='';

                $datosC = array("usuario"=>$_POST["usuario"],"clave"=>$_POST["clave"]);

                $tablaBD = "usuarios";

                $respuesta = AdminModel::Ingreso($datosC, $tablaBD);
                
                if($respuesta["usuario"] == $_POST["usuario"] && $respuesta["clave"] == $_POST["clave"]){
                    
                    $_SESSION["usuario_nombre"] = $_POST["usuario"];
                    $_SESSION["usuario_id"] = $respuesta["id"];

                    if($respuesta["administrador"] == true) {
                        $_SESSION["usuario_admin"] = $respuesta["administrador"];
                        header("Location: ".$GLOBALS["SITE_URL"]."admininicio.php");
                    } else {
                        $_SESSION["usuario_admin"] = $respuesta["administrador"];
                        header("Location: ".$GLOBALS["SITE_URL"]."usuarioinicio.php");
                    }
                }
                else{
                    $_SESSION["login_error"]='Usuario o contraseña incorrectos.';
                    header("Location: ".$GLOBALS["SITE_URL"]."login.php");
                }
            }
        }

        public function logout() {
            $_SESSION["login_error"]='';
            $_SESSION["usuario_nombre"]='';
            $_SESSION["usuario_admin"]='';
            $_SESSION["usuario_id"]='';
            header("Location: ".$GLOBALS["SITE_URL"]."index.php");
        }
    }
?>