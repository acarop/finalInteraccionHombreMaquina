<?php

require_once "conexionBD.php";

class PedidoModel extends ConexionBD{

    //REGISTRAR EMPLEADOS
    public static function RegistrarProductos($datosC, $tablaBD){
        $query = "INSERT INTO $tablaBD (nombre, precio, descripcion, categoria) VALUES (:nombre, :precio, :descripcion, :categoria)";
        $pdo = ConexionBD::cBD()->prepare($query);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":precio", $datosC["precio"], PDO::PARAM_STR);
        $pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
        $pdo -> bindParam(":categoria", $datosC["categoria"], PDO::PARAM_STR);
        

        if($pdo -> execute()){
            return "Bien";
        }
        else {
            die(print_r($pdo->errorInfo()));
            return "Error";
        }

        $pdo->close();
    }

    //MOSTRAR EMPLEADOS
    static public function MostrarUsuarios($tablaBD){

        $pdo = ConexionBD::cBD()->prepare("SELECT id, nombre, apellido, sexo, fecha, dni, email, usuario, administrador FROM $tablaBD");

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

     // CAMBIAR ADMIN
     static public function CambiarAdmin($id, $admin, $tablaBD){
        $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET administrador = :administrador WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);
        $pdo -> bindParam(":administrador", $admin, PDO::PARAM_STR);

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