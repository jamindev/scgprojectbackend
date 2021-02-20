<?php
$data = ["message" => "Serving up the SCGProject api..."];
echo json_encode($data);
$data1 = ["message1" => "Actually getting data"];

if(isset($_GET['apple'])){
    echo json_encode($data1);
}
?>