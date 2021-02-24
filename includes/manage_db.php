<?php
	require("db.php");

$login_error = "";

//error_reporting(0);
	class manage_db extends db{
//1.
		function connect(){
			//$db_host = "database-1.cjqk7wdjxfby.us-east-1.rds.amazonaws.com";
			$db_host = $this->db_host;
			$db_user = $this->db_user;
			$db_pass = $this->db_pass;
			$db_name = $this->db_name;
			$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
			return $connect;
		}

//2.
		/*function select_db(){
			$db_info = new db();
			$connect = $this->connect();
			mysql_select_db($db_name, $connect);
		}*/

//3.
		function query($sql){
			$connect = $this->connect();
			//$this->select_db();
			mysqli_query($connect, $sql) or die(mysql_error());
		}

//4.
		function return_query($sql){
			$connect = $this->connect();
			//$this->select_db();
			$query = mysqli_query($connect, $sql);
			return $query;
		}

	}

?>