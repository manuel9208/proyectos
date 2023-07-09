<?php

require_once "conexion.php";

class GetModel {

    static public function GetData($Tabla){

        $sql = "SELECT * FROM $Tabla WHERE flag=0; ";

        $stmt = connection::connect()->prepare($sql);

        $stmt -> execute();

        return $stmt -> fetchAll(PDO::FETCH_CLASS);
    }
}