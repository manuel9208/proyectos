<?php
header('Content-Type: application/json');
/*Este codigo es cuando la api no resive peticiones*/
/*echo '<pre>'; print_r($_SERVER['REQUEST_URI']); echo '</pre>';*/
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
/**Linea para limpiar el arreglo o quitar informacion vacia**/
$routesArray = array_filter($routesArray);
/*echo '<pre>'; print_r($routesArray); echo '</pre>';*/

if(count($routesArray) == 0){

    $json = array(
        'status' => 400,
        'result' => 'Not found'
       );
       /*echo json_encode($json);*/
       /*Con esta linea a la pagina y postman se le da el mismo status */
       echo json_encode($json, http_response_code($json["status"]));
    
       return;
}
/*Cuando la api si tiene una peticion */
if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])){
    
    $Tabla = $routesArray[1];

    if($_SERVER['REQUEST_METHOD'] == "GET"){ 

       include "servicios/get.php";
      
    }

    if($_SERVER['REQUEST_METHOD'] == "PUT"){

        $jsonData = file_get_contents('php://input');

        // Parse the JSON data into a PHP associative array
        $data = json_decode($jsonData, true);
        // Prepare the response
        $response = [
            'status' => 'success',
            "data" => $data,
            'message' => 'Data received and processed successfully'
        ];
        include "servicios/put.php";
        
    } 
    if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        $json = array(
            'status' => 200,
            'result' => 'Solicitud DELETE'
        );
        echo json_encode($json, http_response_code($json["status"]));
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $jsonData = file_get_contents('php://input');

        // Parse the JSON data into a PHP associative array
        $data = json_decode($jsonData, true);

        // Prepare the response
        $response = [
            'status' => 'success',
            "data" => $data,
            'message' => 'Data received and processed successfully'
        ];
        include "servicios/post.php";

    }         
}

?>