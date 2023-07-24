<?php
    require_once('config.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Philosopher:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <style>
        .container {
            margin-top: 100px;
            margin-bottom: 50%;
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: rgb(240, 240, 240);
            display: block;
            box-shadow: 8px 8px 50px rgb(37, 129, 122);
        }

        .card {
            box-shadow: 8px 8px 50px rgb(37, 129, 122);
        }

        h1 {
            font-stretch: extra-condensed;
            font-family: 'Gloria Hallelujah', cursive;
            font-family: 'Philosopher', sans-serif;
            color: red;
            font-size: 50px;
        }

        h5 {
            color: red;

        }

        .variable {
            color: green;
        }
    </style>
</head>

<body>


    <div class="card">

        <h1 class="card-header info-color white-text text-center py-4">
            <strong>Sign Up</strong>
        </h1>
    </div>
    <div class="container">
        <div>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="Name">
                        <h4>Student Name:</h4>
                    </label>
                    <input type="text" name="first_name" class="form-control" id="firstName" required>
                </div>
                <div class="form-group">
                    <label for="Password">
                        <h4>Password:</h4>
                    </label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phn_num">
                        <h4>Phone number:</h4>
                    </label>
                    <input type="tel" name="phn_num" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="gender">
                        <h4>Gender:</h4>
                    </label>
                    <div class="row ">
                        <div class="col">


                            <div>
                                <input type="radio" name="radio" id="radio1" checked="true" value="male">
                                <label class="radio" for="radio1">Male</label> <br>
                                <input type="radio" name="radio" id="radio2" value="female">
                                <label for="radio2">Female</label><br>
                                <!-- <input type="radio" name="radio" id="radio3" /> 
                                        <label for="radio3">Radio Button 3</label> -->
                            </div>


                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="DOB">
                        <h4>Date of Birth:</h4>
                    </label>
                    <input type="date" name="dob" class="date-input form-control" required>
                </div>

                <input type="submit" value="Sign up" name="submit" class="btn btn-primary btn-lg col btn-block"> <br>

            </form>
        </div>

        <div style="text-color:red;">
            <?php

            // if (isset($_SESSION['email'])) {
            //     echo $_SESSION['email'];
            // }
            $email = $_SESSION['email'];
            
            if (isset($_POST['submit'])) {

               $first_name = $_POST['first_name'];
               //$email      = $_POST['email'];
               $password   = $_POST['password'];
               $phn        = $_POST['phn_num'];
               $gender     = $_POST['radio'];
               $dob        = $_POST['dob'];

               $sql = "INSERT INTO `student` (`name`, `email`, `password`, `phn_no`, `gender`, `dob`) VALUES ('$first_name', '$email', '$password', '$phn', '$gender', '$dob');";

               $stmt = mysqli_query($link,$sql);
               if ($stmt) {
                   echo "<h5>"."INSERTED"."</h5>";
                   $query = "SELECT * FROM `student` WHERE email='$email';";
                   $stmt_1 = mysqli_query($link,$query);
                   while ($row = mysqli_fetch_array($stmt_1)) {            
                        echo "<br>";
                        echo "\033 Your UserId is : \033".$row['user_id'];
                        
                        echo "<br>"."\033 Go And Login! \033";
                    }
               }else{
                echo "ERROR: Could not able to execute . ";
            }

               //echo $first_name." ".$email."  ".$password." ".$phn." ".$gender." ".$dob ;
            }
            //session_destroy();
        ?>
        </div><br><br>
        <div><a href="login.php"><input type="button" value="back" class="btn btn-primary btn-lg col btn-block"></a>
        </div>
    </div>

</body>

</html>