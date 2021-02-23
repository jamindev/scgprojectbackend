<?php
header('Access-Control-Allow-Origin: *');

require("./includes/manage_db.php");

if(isset($_GET['myprofile'])){
    $manage_db = new manage_db();
    $email = $_GET['email'];

    $query = $manage_db->return_query("SELECT * FROM users WHERE email='$email'");

    if ($query->num_rows > 0) {
        while($row = $query->fetch_assoc()) {
            $first_name = $row['first_name'];
            $city = $row['city'];
        }
        $data = ["response" => "retrieved", "email" => $email, "first_name" => $first_name, "city"=> $city];
    }else{
        $data = ["response" => "failed"];
    }

    echo json_encode($data);
}


if(isset($_POST['place_order'])){
    $manage_db = new manage_db();
    $customer_id = $_POST['id'];
    $manufacturer = $_POST['manufacturer'];
    $years = $_POST['years'];
    $condition_description = $_POST['condition_description'];
    
    // $query = $manage_db->return_query("SELECT * FROM payment_information WHERE customer_id='$id'");

    // if ($query->num_rows > 0) {
    //     while($row = $query->fetch_assoc()) {
    //         $payment_information_id = $row['id'];
    //     }
    // }

    // test payment_information_id
    $payment_information_id = 10;

    $manage_db->query("INSERT INTO orders VALUES(null, $customer_id, $payment_information_id, '$manufacturer', '$years', '$condition_decription', CURRENT_TIMESTAMP, null)");
    $data = ["response" => "order_placed"];

    echo json_encode($data);
}

?>