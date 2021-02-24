<?php
	require("db.php");

	class manage_db extends db{
//1.
		function connect(){
			$db_host = $this->db_host;
			$db_user = $this->db_user;
			$db_pass = $this->db_pass;
			$db_name = $this->db_name;
			$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			return $connect;
		}

//2.
		function query($sql){
			$connect = $this->connect();
			mysqli_query($connect, $sql) or die(mysql_error());
		}

//3.
		function return_query($sql){
			$connect = $this->connect();
			$query = mysqli_query($connect, $sql);
			return $query;
		}

	}

?>