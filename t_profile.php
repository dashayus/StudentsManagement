<?php 

        session_start();
		include "config.php";
		//include("login.php");
	
		if(!isset($_SESSION['t_loggedin']) || $_SESSION['t_loggedin']!==true){
		header('Location: t_login.php');
        }
		
		$id = $_SESSION['t_user_id'];
		
		$query ="SELECT * from teacher where user_id='$id'";
   		$result = mysqli_query($link,$query); 
    	while ($row = mysqli_fetch_array($result)) {
			
			$t_name = $row['name'];
			
			$t_email = $row['email'];
			
			$t_phone = $row['phn_no'];
			
			$t_gender = $row['gender'];
			
			}
		echo "  wlcm ";

?>
<html>

<head>
	<title>
		Profile
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>

		<style>
			.container{
				margin-top: 70px;
			}
			.card{
				box-shadow: 8px 8px 100px rgb(37, 129, 122);
			}
			.table{
				margin-top: 150px;
				box-shadow: 40px 15px 140px  rgb(37, 129, 122);
			}
		</style>
</head>

<body>
	<div class="card">
		<h1 class="card-header info-color white-text text-center py-4">
			<strong>Profile</strong>
		</h1>
	</div>
	<div class="container">
		<table class="table table-striped table-hover">
			<thead>
			  <tr>
				<th><h3>Row</h3></th>
				<th><h3>Data</h3></th>
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>Name</td>
				<td><?php echo $t_name ?></td>
			  </tr>
			  <tr>
				<td>Email</td>
				<td><?php echo $t_email ?></td>
			  </tr>
			  <tr>
				<td>Phone Number</td>
				<td><?php echo $t_phone ?></td>
			  </tr>
			  <tr>
				<td>Gender</td>
				<td><?php echo $t_gender ?></td>
			  </tr>
			  </tbody>
		  </table>
	</div>
	<div class="container ">
		<form method='post' action="t_update.php">
			<input type="submit" value="Update Your Profile" name="t_but_update"
				class="btn btn-info btn-lg btn-block row">
		</form>
		<a href="t_home.php">
			<input type="submit" value="Back" name="t_but_update"
				class="btn btn-info btn-lg btn-block row">
		</a>
	</div>
	
	<br>
	<br>
	<br>
	<br>
	
</body>

</html>