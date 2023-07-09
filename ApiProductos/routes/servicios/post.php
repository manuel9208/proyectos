<?php

require_once "models/conexion.php";
require_once "controllers/post.controller.php";

/*if(isset($_POST)){
    
    echo '<pre>'; print_r($Tabla); echo '</pre>';
    return;
}*/

$response = new PostController();
$response -> postData($Tabla,$data);
