<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];
if( $http_origin == "http://scgprojectfrontend.s3-website-us-east-1.amazonaws.com" || $http_origin == "http://24.190.177.13" || $http_origin == "http://localhost:3000"){
    header("Access-Control-Allow-Origin: $http_origin");
}

// require("./includes/manage_db.php");

if(isset($_GET['msg'])){
    $email = "not yet";
    // $manage_db = new manage_db();
    // $query = $manage_db->return_query("SELECT * FROM users");
    // $i = 0;
    // while($i<mysqli_num_rows($query)){
    //     $email = mysql_result($query, $i, 'email') or die(mysql_error());
    // }

    $data1 = ["message1" => $email];
    echo json_encode($data1);
}
?>