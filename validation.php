<?php

session_start();
 
include_once('User.php');
 
$user = new User();
 
 /*   Login de usuario */

if(isset($_POST['login'])){
	

	if(preg_match('/^[a-zA-Z0-9]+$/', strip_tags($_POST["username"]))){

		$username = strip_tags($_POST["username"]);

		$cryptPass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

		$auth1 = $user->loginUser($username, $cryptPass);

		if(!$auth1){
			$_SESSION['messageLogin'] = 'Invalid username or password';
	    	header('location:index.php');
		}
		else{
			$_SESSION['user'] = $auth1;
			header('location:home.php');
		}
	}
	else{
		$_SESSION['messageLogin'] = 'Invalid username or password';
	    header('location:index.php');
	}	 
	
}
else{
	$_SESSION['messageLogin'] = 'You need to login first';
	header('location:index.php');
}



/* Registrar usuario*/

if(isset($_POST['register'])){	
 
	if(preg_match('/^[a-zA-Z0-9]+$/', strip_tags($_POST["username"]))){

		$username = strip_tags($_POST["username"]);
		$email = $_POST['email'];
		$cryptPass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

		$exist = $user->existUser($username,$email);

		if($exist){
			$_SESSION['messageRegister'] = 'Username / Password alredy in use';
	    	header('location:register.php');
		}else{
			$auth2 = $user->registerUser($username,$email, $cryptPass);

			if($auth2 == "ok"){
				$_SESSION['messageRegister'] = 'Registro Exitoso';
		    	header('location:index.php');
			}
			else{
				$_SESSION['messageRegister'] = 'Invalid data verify';
		    	header('location:register.php');
			}
		} 

	}
	else{
		$_SESSION['messageRegister'] = 'Invalid data verify';
	    header('location:register.php');
	}
	
}



/* Cambiar Password */

if(isset($_POST['change'])){
	
	$id = $_POST['id'];
	$cryptPass = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
 
	$auth3 = $user->updatePassword($id,$cryptPass);
 	
	if($auth3 == "ok"){
		$_SESSION['message'] = 'Registro Exitoso';
    	header('location:home.php');
	}
	else{
		$_SESSION['message'] = 'Operation incomplete';
    	header('location:change-password.php');
	}
}

?>