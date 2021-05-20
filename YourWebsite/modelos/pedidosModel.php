<?php

require_once "conexionBD.php";

class PedidosModel extends ConexionBD{

    //REGISTRAR EMPLEADOS
    public static function RegistrarPedidos($datosC, $tablaBD){

        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (tipo, detalles, estado, fecha) VALUES (:tipo, :detalles,:estado, :fecha)");

        $pdo -> bindParam(":tipo", $datosC["tipo"], PDO::PARAM_STR);
        $pdo -> bindParam(":detalles", $datosC["detalles"], PDO::PARAM_STR);
        $pdo -> bindParam(":estado", $datosC["estado"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha", $datosC["fecha"], PDO::PARAM_STR);
        
        if($pdo -> execute()){
            return "Bien";
        }
        else{
            return "Error";
        }

        $pdo->close();
    }

    //MOSTRAR EMPLEADOS
    static public function MostrarPedidos($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, tipo, detalles, estado, fecha FROM $tablaBD");

        $pdo -> execute();

        return $pdo->fetchAll();

        $pdo->close();

    }

    //EDITAR EMPLEADOS
    static public function EditarUsuario($datosC,$tablaBD){
        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, sexo, fecha, dni, email, usuario, clave FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

        $pdo -> execute();

        return $pdo->fetch();
        
        $pdo->close();
    }

    //ACTUALIZAR EMPLEADO
    static public function ActualizarUsuario($datosC,$tablaBD){
        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre = :nombre, apellido = :apellido, sexo = :sexo, fecha = :fecha, dni = :dni, email = :email, usuario = :usuario, clave = :clave WHERE id = :id");

        $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
        $pdo -> bindParam(":sexo", $datosC["sexo"], PDO::PARAM_STR);
        $pdo -> bindParam(":fecha", $datosC["fecha"], PDO::PARAM_STR);
        $pdo -> bindParam(":dni", $datosC["dni"], PDO::PARAM_STR);
        $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
        $pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);

        if($pdo -> execute()){
            return "Bien";
        }
        else{
            return "Error";
        }

        $pdo->close();
    }

    //BORRAR EMPLEADO
    static public function BorrarUsuario($datosC,$tablaBD){
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
?>