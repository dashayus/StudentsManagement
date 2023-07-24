<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Your Profile</title>
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
        .container {
            margin-top: 100px;
            margin-bottom: 50%;
            padding-top: 50px;
            padding-bottom: 50px;
            background-color: rgb(240, 240, 240);
            display: block;
            box-shadow: 8px 8px 50px #000;
            box-shadow: 40px 15px 140px  rgb(37, 129, 122);

        }
        .con{
            color: red;
            font-size: 23px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class='con'>
            <?php

            require_once('config.php');
            session_start();

            //echo 'Update your profile';

            if (isset($_POST['update'])) {
                $first_name = $_POST['first_name'];
                $email      = $_POST['email'];
                $phn_num    = $_POST['phn_num'];
                $dob        = $_POST['dob'];
 
                $id = $_SESSION['user_id'];
                //echo $id;
                
                if ($first_name!=null) {
                    $sql_1 = "UPDATE student SET name='$first_name' WHERE user_id='$id'";
                    $result_1 = mysqli_query($link,$sql_1);
                    echo '*Updated';
                }
                if ($email!=null) {
                    $query = mysqli_query($link,"SELECT * FROM student WHERE email='$email'");
						$row = mysqli_num_rows($query);
						if($row==1){
                            echo "Email you entered is already used ! Try another one .";
                        }else {                            
                            $sql_2 = "UPDATE student SET email='$email' WHERE user_id='$id'";
                            $result_2 = mysqli_query($link,$sql_2);
                            echo 'Updated';
                        }                    
                }
                if ($phn_num!=null) {
                    $sql_3 = "UPDATE student SET phn_no='$phn_num' WHERE user_id='$id'";
                    $result_3 = mysqli_query($link,$sql_3);
                    //echo 'Update';
                }
                if ($dob!=null) {
                    $sql_4 = "UPDATE student SET dob='$dob' WHERE user_id='$id'";
                    $result_4 = mysqli_query($link,$sql_4);
                    //echo 'Updated';
                }
                
                //UPDATE `student` SET `password` = '1234' WHERE `student`.`user_id` = 9;
                              

                //$sql = "UPDATE student SET fname='$first_name' , lname='$last_name' , password='$password' , email='$email' WHERE user_id='$id'";
                //$result = mysqli_query($link,$sql);

                //if ($result) {
                   /// echo "Record updated successfully";
                //} else {
                   // echo "Error updating record: " . mysqli_error($link);
                //}
             }
         

        ?>
        </div>
        <div class="container ">
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" class="form-control" name="first_name" id="firstName">
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email Address:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="phnNumber">Phone Number:</label>
                    <input type="tel" class="form-control" name="phn_num">
                </div>
                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="date-input form-control" name="dob">
                </div>

                <input type="submit" value="UPDATE" class="btn btn-primary btn-lg col btn-block" name="update">
                <br>
                <a href="home.php"><input type="button" class="btn btn-primary btn-lg col btn-block" value="HOME"></a>
            </form>
        </div>
        
    </div>

</body>

</html>