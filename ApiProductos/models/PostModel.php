<?php

require_once "conexion.php";

class PostModel{

    static public function postData($Tabla, $data){

        $params = "";
        $columns = "";

        foreach ($data as $key => $value){
            $columns .= $key.",";

            $params .= ":".$key.",";

        }

        $params = substr($params, 0, -1);
        $columns = substr($columns, 0, -1);


        $sql = "INSERT INTO $Tabla($columns) 
        VALUES 
        ($params)";

        $stmt = connection::connect()->prepare($sql);

        foreach ($data as $key => $value){

            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);

        }
        if($stmt -> execute()){
            $response = array(
                "comment" => "Se inserto el registro"
            );

            return $response;
        }else{
            return connection::connect()->errorInfo();
        }

    }

}