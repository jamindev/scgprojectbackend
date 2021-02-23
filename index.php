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

if(isset($_POST['signup'])){
    $manage_db = new manage_db();
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $address_1 = $_POST['address_1'];
    $address_2 = $_POST['address_2'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $state_or_region = $_POST['state_or_region'];

    $query = $manage_db->return_query("SELECT * FROM users WHERE email='$email'");

    if ($query->num_rows > 0) {
        $data = ["response" => "Email is already being used!", "email" => $email, "id" => "1"];
    }else{
        $conn = $manage_db->connect();
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO users VALUES(null, '$first_name', '$last_name', '$email', '$password', '$address_1', '$address_2', '$city', '$state_or_region', '$country', 'customer', 'active', CURRENT_TIMESTAMP, null)";
        
        if (mysqli_query($conn, $sql)) {
            $id = mysqli_insert_id($conn);
        }
        //$manage_db->query("INSERT INTO users VALUES(null, '$first_name', '$last_name', '$email', '$password', '$address_1', '$address_2', '$city', '$state_or_region', '$country', 'customer', 'active', CURRENT_TIMESTAMP, null)");
        $data = ["response" => "posted", "email" => $email, "id" => $id];
    }

    echo json_encode($data);
}

?>