<?php
$data = ["message" => "Serving up the SCGProject api..."];
echo json_encode($data);
$data1 = ["message1" => "Serving up the SCGProject api..."];

if(isset($_GET['apple'])){
    echo json_encode($data1);
}
?>