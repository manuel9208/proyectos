<?php

require_once "controllers/GET.Controller.php";



$response = new GetController();
$response -> getData($Tabla);

/*echo '<pre>'; print_r($response); echo '</pre>';*/




