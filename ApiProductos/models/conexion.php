<?php

class connection{
    static public function infoDatabase(){
        $infoDB = array(
            "database" => "almacen",
            "user" => "root",
            "pass" => ""
        );
        return $infoDB;

    }
    /**Conexion a la base de datos**/
    static public function connect(){
        try{
            $link = new PDO(
            "mysql:host=localhost;dbname=".connection::infoDatabase()["database"],
            connection::infoDatabase()["user"],
            connection::infoDatabase()["pass"]
        );

        $link->exec("set names utf8");

        }catch(PDOException $e){

            die("Error: ".$e->getMessage());

        }

        return $link;
    }
}