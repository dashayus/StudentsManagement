<?php
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            #pd {
                margin-top: 75px;
            }
    
            /* body {
                background-color: rgb(230, 245, 244);
            } */
    
            .linktainer {
                display: flex;
                flex-direction: column;
                /* padding: 10px; */
                height: 100px;
            }
            
    
            .btn {
                /* border: 1.4px solid rgb(173, 3, 3); */
                /* border-style: dashed; */
                height: 75px;
                box-shadow: 8px 8px 50px rgb(37, 129, 122);
            }
    
            h1 {
                color: rgb(255, 8, 8);
                font-family: 'Gloria Hallelujah', cursive;
                font-family: 'Philosopher', sans-serif;
                font-size: 50px;
            }
            
    
            .card {
                box-shadow: 8px 8px 50px rgb(37, 129, 122);
                margin-bottom: 150px;
                margin-top: 20px;
                border-radius: 60px;
            }
        </style>
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

        <div>
            <?php
		
		session_start();
		include "config.php";
		//include("login.php");
	
		if(!isset($_SESSION['t_loggedin']) || $_SESSION['t_loggedin']!==true){
		header('Location: t_login.php');
		}
		//echo "welcome";
		//echo $_SESSION['user_id'];
		$id = $_SESSION['t_user_id'];
		//echo $id;
		
	?>
        </div>

        <div class="card">
            <h1 class="card-header info-color white-text text-center py-4">
                <strong>Hi Welcome </strong>
            </h1>
        </div>
        <div class="card-body px-lg-5 pt-0 row" id="pd">
            <div class="col-12 col-md-6 mb-3">
                <form method='post' action="t_profile.php">
                    <input type="submit" value="View your profile" name="but_profile"
                        class="btn btn-outline-info btn-lg btn-block row ">
                </form>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <form method='post' action="t_update.php">
                    <input type="submit" value="Update Your Profile" name="but_update"
                        class="btn btn-outline-info btn-lg btn-block row">
                </form>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <form method='post' action="t_passwordcng.php">
                    <input type="submit" value="Change Your Password" name="but_change"
                        class="btn btn-outline-info btn-lg btn-block row">
                </form>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <form method='post' action="t_mark.php">
                    <input type="submit" value="Update Students Mark" name="but_mark"
                        class="btn btn-outline-info btn-lg btn-block row">
                </form>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <form method='post' action="t_logout.php">
                    <input type="submit" value="Logout" name="but_logout" class="btn btn-outline-info btn-lg btn-block row">
                </form>
            </div>
    
        </div>

</body>

</html>