<?php 

session_start();
		include "config.php";
		//include("login.php");
	
		if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true){
		header('Location: login.php');
        }
		
		$id = $_SESSION['user_id'];
		
		$query ="SELECT * from student where user_id='$id'";
   		$result = mysqli_query($link,$query); 
    	while ($row = mysqli_fetch_array($result)) {
			
			$sem_1 = $row['1st_sem'];
			
			$sem_2 = $row['2nd_sem'];
			
			$sem_3 = $row['3rd_sem'];
			
			}
		//echo "  wlcm ";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark</title>
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
</head>
<body>
<div class="container pt-10">
		<table class="table table-striped table-hover mt-5">
			<thead>
			  <tr>
				<th><h3>Sem</h3></th>
				<th><h3>Mark</h3></th>
				<!-- <th><h3>Certificate</h3></th> -->
			  </tr>
			</thead>
			<tbody>
			  <tr>
				<td>First Sem</td>
				<td><?php echo $sem_1 ?></td>
			  </tr>
			  <tr>
				<td>Second Sem</td>
				<td><?php echo $sem_2 ?></td>
			  </tr>
			  <tr>
				<td>Third Sem</td>
				<td><?php echo $sem_3 ?></td>
			  </tr>
			</tbody>
		  </table>
	</div>
	<div class="container ">
		<a href="home.php">
			<input type="submit" value="Back" name="but_update"
				class="btn btn-info btn-lg btn-block row">
		</a>
	</div>
</body>
</html>