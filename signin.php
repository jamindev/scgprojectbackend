<?php
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require("./includes/manage_db.php");

if(isset($_GET['signin'])){
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
        $manage_db->query("INSERT INTO users VALUES(null, '$first_name', '$last_name', '$email', '$password', '$address_1', '$address_2', '$city', '$state_or_region', '$country', 'customer', 'active', CURRENT_TIMESTAMP, null)");
        $data = ["response" => "posted", "email" => $email, "id" => "1"];
    }

    echo json_encode($data);
}

?>