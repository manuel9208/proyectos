<?php

require_once "conexion.php";

class PutModel{

    static public function putData($Tabla, $data, $IDCodigo){
        
        $set = "";
            
        foreach ($data as $key => $value){

            $set .= "`".$key."`"." = '".$value."',";

        }
   
        $set = substr($set, 0, -1);

        $sql = "UPDATE $Tabla SET $set WHERE Codigo = $IDCodigo ";
       
        $link = connection::connect();

        $stmt = $link->prepare($sql);

        if($stmt -> execute()){
            $response = array(
                "comment" => "Se actualizo el registro"
            );

            return $response;
        }else{
            return connection::connect()->errorInfo();
        }
    }
}