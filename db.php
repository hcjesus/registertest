<?php

class db
{
	private $host = "localhost";
	private $user = "root";
	private $pw = "";
	private $dbname = "registerdb";

	protected $connect;

	public function __construct(){
		try {
			$this->connect = new PDO("mysql:host=" .$this->host. ";dbname=" .$this->dbname ,$this->user, $this->pw);
			
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		return $this->connect;
	}

}

?>