<?php
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require("./includes/manage_db.php");

if(isset($_GET['signin'])){
    $manage_db = new manage_db();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];

    $query = $manage_db->return_query("SELECT * FROM users WHERE email='$email' AND password='$password'");

    if ($query->num_rows > 0) {
        $data = ["response" => "success", "email" => $email, "id" => "1"];
    }else{
        $data = ["response" => "failed", "email" => $email, "id" => "1"];
    }

    echo json_encode($data);
}

?>