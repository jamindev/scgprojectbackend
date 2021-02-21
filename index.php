<?php
// $http_origin = $_SERVER['HTTP_ORIGIN'];
// if( $http_origin == "http://scgprojectfrontend.s3-website-us-east-1.amazonaws.com" || $http_origin == "http://24.190.177.13" || $http_origin == "http://localhost:3000" || $http_origin == "http://localhost:3000/signup"){
//     header("Access-Control-Allow-Origin: $http_origin");
// }// Allow from any origin
// if (isset($_SERVER['HTTP_ORIGIN'])) {
//     header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
//     //header('Access-Control-Allow-Credentials: true');
//     //header('Access-Control-Max-Age: 86400');    // cache for 1 day
// }
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require("./includes/manage_db.php");

if(isset($_GET['msg'])){
    $email = "not yet";
    $manage_db = new manage_db();
    $query = $manage_db->return_query("SELECT * FROM users");

    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc()) {
            $email = $row['email'];
        }
    }

    $data1 = ["message1" => $email];
    echo json_encode($data1);
}


if(isset($_POST['email'])){
    $manage_db = new manage_db();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state_or_region = $_POST['state_or_region'];

    $query = $manage_db->return_query("INSERT INTO users VALUES(null, '$first_name', '$last_name', '$email', '$password', '$address_1', '$address_2', '$city', '$state_or_region', '$country', 'customer', 'active', CURRENT_TIMESTAMP, null)");

    // if ($query->num_rows > 0) {
    //     // output data of each row
    //     while($row = $query->fetch_assoc()) {
    //         $email = $row['email'];
    //     }
    // }

    $data1 = ["response" => "posted", "email" => $email, "id" => "1"];
    echo json_encode($data1);
}

?>