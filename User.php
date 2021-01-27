<?php

include_once("db.php");

class User extends db
{
	public function __construct(){
 
        parent::__construct();
    }
	public function loginUser($user, $pw){

		$stmt = $this->connect->prepare("SELECT * FROM users WHERE name = :name AND pass = :pass");

		$stmt -> bindParam(":name", $user, PDO::PARAM_STR);
		$stmt -> bindParam(":pass", $pw, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
		$stmt = null;

	}

	public function registerUser($username, $email, $pass){

		$stmt = $this->connect->prepare("INSERT INTO users(name,email,pass) VALUES(:name,:email,:pass)");

		$stmt -> bindParam(":name", $username, PDO::PARAM_STR);
		$stmt -> bindParam(":email", $email, PDO::PARAM_STR);
		$stmt -> bindParam(":pass", $pass, PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";		
		}

		$stmt->close();		
		$stmt = null;

	}


	public function updatePassword($id, $pass){

		$stmt = $this->connect->prepare("UPDATE users SET pass = :pass WHERE id = :id");

		$stmt -> bindParam(":pass", $pass, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

		if($stmt->execute()){
			return "ok";	
		}else{
			return "error";		
		}

		$stmt->close();		
		$stmt = null;

	}

	public function existUser($username, $email){
		$stmt = $this->connect->prepare("SELECT * FROM users WHERE name = :name OR email = :email");

		$stmt -> bindParam(":name", $username, PDO::PARAM_STR);
		$stmt -> bindParam(":email", $email, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
		$stmt = null;	
	}

}


?>