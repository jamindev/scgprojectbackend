<?php
class db{
	public $db_host;
	public $db_user;
	public $db_pass;
	public $db_name;
	
	public function __construct(){
		$this->db_host = "database-1.cjqk7wdjxfby.us-east-1.rds.amazonaws.com";
		$this->db_user = "admin";
		$this->db_pass = "utopiamaya3";
		$this->db_name = "scgproject";
	}
}

/*class db{
	var $db_host = "localhost";
	var $db_user = "benamo0_rentkama";
	var $db_pass = "utopiamaya3";
	var $db_name = "benamo0_rentkama";
}*/
?>