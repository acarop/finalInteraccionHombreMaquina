<?php

require_once "conexionBD.php";

class CoreModel extends ConexionBD{

    //REGISTRAR EMPLEADOS
    public static function EnviarMensaje($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre, email, telefono, mensaje,usuario_id) VALUES (:nombre, :email, :telefono, :mensaje,:usuario_id)");

        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
        $pdo -> bindParam(":telefono", $datosC["telefono"], PDO::PARAM_STR);
        $pdo -> bindParam(":mensaje", $datosC["mensaje"], PDO::PARAM_STR);
        $pdo -> bindParam(":usuario_id", $datosC["usuario_id"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return "Bien";
        }
        else{
            return "Error";
        }

        $pdo->close();
    }


    static public function MostrarMensajes($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, email, telefono, mensaje, usuario_id FROM $tablaBD");

        $pdo -> execute();

        return $pdo->fetchAll();

        $pdo->close();

    }

    static public function EliminarMensaje($datosC, $tablaBD){
        $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        if($pdo -> execute()){
            return "Bien";
        }
        else{
            return "Error";
        }

        $pdo->close();
    }

}