<?php 
	$server="localhost";
	$adusername="root";
	$adpassword="123456";
	$dbname="employee";
	//login
	if(isset($_POST['login'])){
		setcookie("email",$_POST['email'],time()+3600);
		setcookie("password",$_POST['password'],time()+3600);
		$email=$_POST['email'];
		$password=$_POST['password'];
		if(filter_has_var(INPUT_POST,'email')){
			if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
				$conn=new mysqli($server,$adusername,$adpassword,$dbname);
				if($conn->connect_error){

				}
				else{
					$sql="SELECT email,password from users where email='$email' and password='$password'";
					if(($conn->query($sql))->num_rows==1){
						header("location:submit.php");
					}
					else{
						echo "invalid email or password";
					}
				}
			}
			else{
				echo 'invalid-email-id';
			}
		}
	}


	//register
	if(isset($_POST['register'])){
		setcookie("email",$_POST['email'],time()+3600);
		setcookie("password",$_POST['password'],time()+3600);
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['cfm-password'];
		if(filter_has_var(INPUT_POST,'email')){
			if(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
				if($password===$repassword){
					$conn=new mysqli($server,$adusername,$adpassword,$dbname);
					if($conn->connect_error){
						die("Connection failed: " . $conn->connect_error);
					}
					else{
						$sql="SELECT email FROM users WHERE email='$email'";
						if(($conn->query($sql))->num_rows>0){
							echo 'email id already exist';
						}
						else{
							$sql="INSERT INTO users (name,email,password) VALUES('namet','$email','$password')";
							if($conn->query($sql) == TRUE){
								header("location:submit.php");
							}
							else{
								echo 'error'.'<br>'.$conn->error;
							}
						}
					}
				}
				else{
				echo 'password mismatched';
				}
			}
			else{
			echo 'invalid-email-id';
			}
		}
	}


?>