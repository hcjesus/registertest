<?php 

	session_start();
 
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Login</title>
  </head>
  <body>

    <div class="container d-flex justify-content-center">
    	<div class="col-md-4 form mt-5">
    		<h1 class="pt-3 text-center">Login Page</h1>
    		<?php 
		  		if(isset($_SESSION['messageLogin'])){
			?>
				<div class="alert alert-danger text-center">
					<?php echo $_SESSION['messageLogin']; ?>
				</div>
				<?php 
					unset($_SESSION['messageLogin']);
				}
		  	?>
    		<div class="">
    			<form method="post" action="validation.php" class="loginform">
       				<div class="form-group">
       					<label for="username" >Username</label>
			        	<input type="text" class="form-control"name="username" >
      				</div>
			      	<div class="form-group">
			      		<label for="password">Password</label>
			        	<input type="password" class="form-control" name="password">
			      	</div>
			      	<button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
			      	<div class="text-center my-2">
			      		<a href="register.php" >Register</a>
			      	</div>			      					    
    			</form>
    		</div>
    		
    	</div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>