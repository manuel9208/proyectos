<?php

require_once "models/PutModel.php";

class PutController{

    static public function putData($Tabla, $data, $IDCodigo){

        $response = PutModel::putData($Tabla, $data, $IDCodigo);

        $return = new PutController();
        $return -> fncResponse($response);

    }

    /**Respues del controllador */
    public function fncResponse($response){
        if(!empty($response)){

            $json = array(
            'status' => 200,
            'result' => $response
        );
        }else{

                $json = array(
                'status' => 404,
                'result' => 'Not Found'
                );

        }
        
        echo json_encode($json, http_response_code($json["status"]));

    }
}

