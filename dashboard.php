<?php
header('Access-Control-Allow-Origin: *');

require("./includes/manage_db.php");

if(isset($_GET['myprofile'])){
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
    $data = ["response" => $query->num_rows];

    echo json_encode($data);
}

$data = ["response" => "some data"];

echo json_encode($data);
?>