<?php
if(isset($_GET['msg'])){
    $data1 = ["message1" => "Actually getting data"];
    echo json_encode($data1);
}
?>