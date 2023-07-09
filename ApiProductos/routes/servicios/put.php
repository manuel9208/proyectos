<?php
require_once "models/conexion.php";
require_once "controllers/Put.Controller.php";

$Tabla = strtok($Tabla, '?');

$response = new PutController();
$response -> putData($Tabla,$data,$_GET["IDCodigo"]);
