<?php 

	session_start();
 
	if(isset($_SESSION['user'])){
    $data =   $_SESSION['user'];
	}else{
    header('location:index.php');
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
    <div class="container">
    	<div class="d-flex justify-content-center">
    		<div class="col-md-4 form mt-5">
          <h2 class="text-center">Change Password</h2>
    			<form method="post" action="validation.php" class="m-3 pt-2 changeform">
       				<div class="form-group">
                <input type="text" class="form-control" name="id" hidden value="<?php echo $data['id'] ?>">
                <p><strong> Name:</strong>   <?php echo $data['name'] ?> </p>
              </div>
              <div class="form-group">
                <p><strong>E-Mail:</strong>   <?php echo $data['email']?></p>
      				</div>
			      	<div class="form-group">
			      		<label for="password">Password</label>
			        	<input type="password" class="form-control" name="password" id="password">
			      	</div>
              <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword">
              </div>
				    <button type="submit" name="change" class="btn btn-primary btn-block">Update</button>
            <div class="text-center my-2">
              <a href="home.php" name="register" class="">Back</a>
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