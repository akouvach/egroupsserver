<?php
// required headers
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

header("Content-Type: application/json; charset=UTF-8");

if($_SERVER['REQUEST_METHOD']!='POST') {
    $json = (object)["ok"=>false,"errorcode"=>300,"payload"=> "Solo peticiones POST"];
    exit();
}

?>
