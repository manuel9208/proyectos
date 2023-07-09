<?php

/*Mostrara los errores*/
/*Linea para postman*/
ini_set('display_errors',1);
ini_set("Log_Errors",1);
ini_set("Error_log", "C:\xampp\htdocs\ApiProductos\Error_Log");

/*require_once "models/conexion.php";

echo '<pre>'; print_r(connection::infoDatabase()["database"]); echo '</pre>'; 

return;*/

require_once "controllers/routes.controllers.php";

$index = new routesController();
$index -> index();