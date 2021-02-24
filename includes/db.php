<?php
class db{
	protected $db_host;
	protected $db_user;
	protected $db_pass;
	protected $db_name;
	
	public function __construct(){
		$this->db_host = "database-1.cjqk7wdjxfby.us-east-1.rds.amazonaws.com";
		$this->db_user = "admin";
		$this->db_pass = "utopiamaya3";
		$this->db_name = "scgproject";
	}
}

?>