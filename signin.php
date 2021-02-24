<?php
header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');

require("./includes/manage_db.php");

if(isset($_GET['signin'])){
    $manage_db = new manage_db();
    $email = $_GET['email'];
    $password = md5($_GET['password']);

    $query = $manage_db->return_query("SELECT * FROM users WHERE email='$email' AND password='$password'");

    if ($query->num_rows > 0) {
        while($row = $query->fetch_assoc()) {
            $id = $row['id'];
            $email = $row['email'];
        }
        $data = ["response" => "success", "email" => $email, "id" => $id];
    }else{
        $data = ["response" => "failed"];
    }

    echo json_encode($data);
}

?>