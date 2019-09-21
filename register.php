<?php
	if(isset($_POST['submit'])){
		setcookie('email',$_POST['email'],time()+3600);
		setcookie('password',$_POST['password'],time()+3600);
		if(filter_has_var(INPUT_POST, 'email')){
			if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
				if($_POST['password']!==$_POST['confirm-password']){
					echo '<script>alert("both password not matched")</script>';
				}
				else{
					header("location:submit.php");
				}
				

			}
			else{
				echo '<script>alert("incorrect email address")</script>';
			}
		}

	}
	
	?>
<!DOCTYPE html>
<html>
<head>
<title>Log in to ZED DIGITAL</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="navbar navbar-dark bg-dark">Hi there</div>
		
	</header>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="POST" action="register.php" class="was-validated">
					  <div class="form-group row">
					    <label for="email" class="col-2">Email address:</label>
					    <div class="col-10">
					    <input type="email" class="form-control" id="email" name="email" required>
						</div>
					  </div>
					  <div class="form-group row">
					    <label for="pwd" class="col-2">Password:</label>
					    <div class="col-10">
					    <input type="password" class="form-control" id="pwd" name="password" placeholder="password" required>
					</div>
					  </div>
					  <div class="form-group row">
					    <label for="pwd" class="col-2">Password:</label>
					    <div class="col-10">
					    <input type="password" class="form-control" id="pwd" name="confirm-password" placeholder="confirm-password" required>
					</div>
					  </div>
					  <div class="form-group form-check row">
					    <label class="form-check-label offset-2">
					      <input class="form-check-input" type="checkbox" required> Remember me
					    </label>
					  </div>
					  <div class="row">
						  <button type="submit" class="btn btn-primary offset-2 col-2" name="submit">Register</button>
						  <a href="index.php" class="btn btn-primary offset-2 col-2">Login</a>
						</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
