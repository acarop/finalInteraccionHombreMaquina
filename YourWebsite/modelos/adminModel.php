<?php

require_once "conexionBD.php";

class AdminModel extends ConexionBD {

    static public function Ingreso($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, administrador, id FROM $tablaBD WHERE usuario = :usuario");

        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

        $pdo -> execute();
        
        return $pdo->fetch();

        $pdo->close();

    }

}

?>