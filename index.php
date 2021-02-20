<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];
if( $http_origin == "http://scgprojectfrontend.s3-website-us-east-1.amazonaws.com" || $http_origin == "http://24.190.177.13" || $http_origin == "http://localhost:3000"){
    header("Access-Control-Allow-Origin: $http_origin");
}

if(isset($_GET['msg'])){
    $data1 = ["message1" => "Actually getting data"];
    echo json_encode($data1);
}
?>