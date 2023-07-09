<?php

require_once "models/PostModel.php";

class PostController{

    static public function postData($Tabla, $data){
        
        
 
        $response = PostModel::postData($Tabla, $data);

        $return = new PostController();

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