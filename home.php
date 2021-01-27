<?php 
	session_start();
 
	if(isset($_SESSION['user'])){		
		$data = $_SESSION['user'];
	}else{
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<div class="container d-flex justify-content-center">
		
		<div class="col-md-4 form mt-5">
			<h1 class="text-center py-3">Homepage</h1>
			<div class="">
				<div class=" ">
					<h4>User Info: </h4>
					<p><strong> Name:</strong> <?php echo $data['name']; ?></p>
					<p><strong> E-Mail: </strong> <?php echo $data['email']; ?></p>			
				</div>
				<div>
					<a href="logout.php" class="btn btn-primary btn-block">Logout</a>						
				</div>
				<div class="text-center my-2">
					<a href="change-password.php" > Change Password</a>
				</div>
				
			</div>
		</div>		
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>