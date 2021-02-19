<?php
class db{
	public $db_host;
	public $db_user;
	public $db_pass;
	public $db_name;
	
	public function __construct(){
		$this->db_host = "localhost";
		$this->db_user = "root";
		$this->db_pass = "";
		$this->db_name = "lucryx";
	}
}

/*class db{
	var $db_host = "localhost";
	var $db_user = "benamo0_rentkama";
	var $db_pass = "utopiamaya3";
	var $db_name = "benamo0_rentkama";
}*/
?>