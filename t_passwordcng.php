<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
        
        .con{
            color: red;
            font-size: 23px;
        }
        .card {
            margin-top: 120px;
            margin-bottom: 120px;
            padding-top: 10px;
            background-color: rgb(183, 250, 203);
            border-top-left-radius: 50px;
            border-bottom-right-radius: 50px;
            
            
            box-shadow: 40px 15px 140px  rgb(37, 129, 122);
        }
        
        body {
            background-color: rgb(248,248,248);
        }
    </style>
</head>

<body>
    <!-- <div>
        
    </div> -->
    <div class="container">
        <div class="card">
            <div class="card-body px-lg-5 pt-0" id="pad">
                <form action="t_passwordcng.php" method="post">
                    <br>
                    <br>
                    <br>
                    <div class="md-form">
                        <label for="password">
                            <h4>New password:</h4>
                        </label>
                        <input type="password" name="password_1" class="form-control" id="materialLoginFormPassword"
                            id="firstName" required>
                    </div><br>
                    <div class="md-form">
                        <label for="lastName">
                            <h4>confirm Password:</h4>
                        </label>
                        <input type="password" name="password_2" class="form-control" id="materialLoginFormPassword"
                            id="lastName" required>
                    </div>
                    <br><br>

                    <input type="submit" value="change your password" class="btn btn-primary btn-lg col btn-block"
                        name="update"><br>
                        
                        <div class="con">
                        <?php

                            require_once('config.php');
                            session_start();

                            //echo 'CHANGE YOUR PASSWORD';
                            $t_id = $_SESSION['t_user_id'];
                            
                            if (isset($_POST['update'])) {
                                $password_1 = $_POST['password_1'];
                                $password_2 = $_POST['password_2'];
                                if (($password_1!=null)&&($password_2!=null)&&($password_1==$password_2)) {
                                    $sql = "UPDATE `teacher` SET `password` = '$password_1' WHERE `teacher`.`user_id` = '$t_id'";
                                    $result = mysqli_query($link,$sql);
                                    echo '*Updated';
                                }else {
                                    echo "*Not Matched";
                                }
                            }
                        ?>
                        </div>
                        
                        <br>
                    <a href="t_home.php"><input type="button" class="btn btn-primary btn-lg col btn-block"
                            value="HOME"></a>
                            <br>
                            <br>
                            <br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>