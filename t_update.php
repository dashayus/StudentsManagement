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
                $t_first_name = $_POST['first_name'];
                $t_email      = $_POST['email'];
                $t_phn_num    = $_POST['phn_num'];
                // $t_dob        = $_POST['dob'];
 
                $t_id = $_SESSION['t_user_id'];
                //echo $id;
                
                if ($t_first_name!=null) {
                    $sql_1 = "UPDATE teacher SET name='$t_first_name' WHERE user_id='$t_id'";
                    $result_1 = mysqli_query($link,$sql_1);
                    echo '*Updated';
                }
                if ($t_email!=null) {
                    $query = mysqli_query($link,"SELECT * FROM teacher WHERE email='$t_email'");
						$row = mysqli_num_rows($query);
						if($row==1){
                            echo "Email you entered is already used ! Try another one .";
                        }else {                            
                            $sql_2 = "UPDATE teacher SET email='$t_email' WHERE user_id='$t_id'";
                            $result_2 = mysqli_query($link,$sql_2);
                            if ($result_2!=0) {
                                echo "updated";
                            }
                        }                    
                }
                if ($t_phn_num!=null) {
                    $sql_3 = "UPDATE teacher SET phn_no='$t_phn_num' WHERE user_id='$t_id'";
                    $result_3 = mysqli_query($link,$sql_3);
                    //echo 'Update';
                }
                
             }
         

        ?>
        </div>
        <div class="container ">
            <form action="t_update.php" method="post">
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
                <input type="submit" value="UPDATE" class="btn btn-primary btn-lg col btn-block" name="update">
                <br>
                <a href="t_home.php"><input type="button" class="btn btn-primary btn-lg col btn-block" value="HOME"></a>
            </form>
        </div>
        
    </div>

</body>

</html>