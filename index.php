<?php
header("Access-Control-Allow-Origin: http://scgprojectfrontend.s3-website-us-east-1.amazonaws.com");

if(isset($_GET['msg'])){
    $data1 = ["message1" => "Actually getting data"];
    echo json_encode($data1);
}
?>