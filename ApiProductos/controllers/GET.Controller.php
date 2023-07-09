<?php

require_once "models/GetModel.php";

class GetController{

    static public function getData($Tabla){

        $response = GetModel::GetData($Tabla);

        $return = new GetController();
        $return -> fncResponse($response);

    }

    /**Respues del controllador */
    public function fncResponse($response){
        if(!empty($response)){

            $json = array(
            /*'status' => 200,*/
            /*'total' => count($response),*/
            'result' => $response
        );
        }else{

                $json = array(
                'status' => 404,
                'result' => 'Not Found'
        );

        }
        
        echo json_encode($response);
        /*echo json_encode($json, http_response_code($json["status"]));*/

    }


}
