<?php
	session_start();
	include "config.php";
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
		header("location:t_home.php");
		exit;
	}
	
	
	if(isset($_POST['log_in'])){
		if($_POST['user_id'] != NULL){
			if($_POST['password'] != NULL){
				$id = $_POST['user_id'];
				$pass = $_POST['password'];
				$query = mysqli_query($link,"SELECT * FROM teacher WHERE user_id='$id' AND password='$pass'");
				$row = mysqli_num_rows($query);
				if($row==1){
					session_start();
					$_SESSION['t_loggedin']=true;
					$_SESSION['t_user_id']=$id;
					//$_SESSION['password']=$password;
					echo "successfully logged in";
					header("location:t_home.php");
				}else{
					echo "usr_nm or password valid not ";
				}
			}else{
				echo "enter the password ";
			}
		}else{
			echo "enter the user name";
		}
	}
	
?>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>


	<div class="card">
		<h1 class="card-header info-color white-text text-center py-4">
			<strong>Sign in</strong>
		</h1>
	</div>


	<div class="container">
		<div class="row align-items-center">
			
			<div class="col-12 col-md-6">
				<h2 class="text-info pb-5 text-center">Teacher Login</h2>
				<form method="post" action="t_login.php" class="form">
					<label for="user_id">
						<h4>USER ID:</h4>
					</label>
					<input type="text" placeholder="USER_ID" name="user_id" class="md-form form-control m-3">
					<label for="user_id">
						<h4>PASSWORD:</h4>
					</label>
					<input type="password" placeholder="PASSWORD" name="password" class="md-form form-control m-3">
					<input type="submit" placeholder="login" name="log_in" class="btn btn-primary btn-lg col btn-block mt-3">
				</form>
				<div class="row">
					<div class="col-12 col-md-6">
						<form method='post' action="t_email_validation.php">
							<input type="submit" value="register" name="regst" class="btn btn-primary btn-lg col btn-block">
						</form>
					</div>
					<div class="col-12 col-md-6">
						<form method='post' action="t_forgotpassword.php">
							<input type="submit" value="Forgot Password" name="frgtpswd"
								class="btn btn-primary btn-lg col btn-block">
						</form>
					</div>
				</div>


			</div>
			<div class="col-12 col-md-6">
				<form method='post' action="login.php">
					<input type="submit" value="Student Login" name="stud_login"
						class="btn btn-primary btn-lg col btn-block">
				</form>
			</div>
		</div>
	</div>
</body>

</html>