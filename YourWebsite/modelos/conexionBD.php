<?php
    class ConexionBD{
        static public function cBD(){
            $bd = new PDO("mysql:host=".$GLOBALS['DB_HOST'].";dbname=".$GLOBALS['DB_NAME'],$GLOBALS['DB_USER'],$GLOBALS['DB_PASSWORD']);
            return $bd;
        }
    }
?>