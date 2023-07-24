<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container mt-5">
    <form action="t_email_validation.php" method="post">
            <p class="form-group">
                <label for="emailAddress">Email Address:</label>
                <input type="email" name="email" class="form-control" id="emailAddress" required>
            </p>
            <input type="submit" value="Next" class="btn btn-primary col mb-3" name="submit">
            <a href="login.php"><input type="button" class="btn btn-primary col" value="back"></a>
        </form>
    </div>
    <?php

// session_start();
include "config.php";

if(isset($_POST['submit'])){
    if($_POST['email'] != NULL){
        
            $email = $_POST['email'];
            
            $query = mysqli_query($link,"SELECT * FROM teacher WHERE email='$email'");
            $row = mysqli_num_rows($query);
            if($row==1){
                echo "Email is alread Used. Try another One";

            }else{
                session_start();
                $_SESSION['t_email'] = $email;
                header("location:t_register.php");
                echo "email = ".$_SESSION['t_email'];
            }
        
    }else{
        echo "enter the user name";
    }
    
    //session_destroy();
}

    ?>
</body>
</html>