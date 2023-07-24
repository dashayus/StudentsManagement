<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container mt-5">
        <form method="post" action="t_mark.php">
            <div class="md-form">
                <label for="user_id">
                    <h4>USER ID:</h4>
                </label>
                <input type="text" class="form-control" id="materialLoginFormEmail" placeholder="USER_ID"
                    name="user_id" required>
            </div>
            <br>
            <div class="md-form">
                <label for="mark">
                    <h4>Sem 1 :</h4>
                </label>
                <input type="number" class="form-control" id="materialLoginFormMark" placeholder="Mark" name="sem_1">
            </div>
            <div class="md-form">
                <label for="mark">
                    <h4>Sem 2 :</h4>
                </label>
                <input type="number" class="form-control" id="materialLoginFormMark" placeholder="Mark" name="sem_2">
            </div>
            <div class="md-form">
                <label for="mark">
                    <h4>Sem 3 :</h4>
                </label>
                <input type="number" class="form-control" id="materialLoginFormMark" placeholder="Mark" name="sem_3">
            </div>
            <br><br>
            <input type="submit" placeholder="Update" value="update" name="update"
                class="btn btn-primary btn-lg col btn-block">
            <!-- <input type="button" placeholder="Forgot password"> -->
        </form>
    </div>
    <div class="container text-danger h5">
    <?php
require_once "config.php";
    if (isset($_POST['update'])) {
                $user_id = $_POST['user_id'];
                $sem_1      = $_POST['sem_1'];
                $sem_2    = $_POST['sem_2'];
                $sem_3        = $_POST['sem_3'];
 
                //$id = $_SESSION['user_id'];
                //echo $id;
                
                if ($user_id!=null) {
                    
                    if ($sem_1!=null) {
                        $sql_1 = "UPDATE `student` SET `1st_sem` = '$sem_1' WHERE `student`.`user_id` = '$user_id'";
                        if(mysqli_query($link, $sql_1)){
                            echo "*Records added successfully.";
                        } else{
                            echo "ERROR: Could not able to execute $sql_1. " . mysqli_error($link);
                        }                        
                        //$result_1 = mysqli_query($link,$sql_1);
                        //echo 'Update';
                    }
                    if ($sem_2!=null) {
                        $sql_2 = "UPDATE `student` SET `2nd_sem` = '$sem_2' WHERE `student`.`user_id` = '$user_id'";
                        $result_2 = mysqli_query($link,$sql_2);
                        //echo 'Updated';
                    }
                    if ($sem_3!=null) {
                        $sql_3 = "UPDATE `student` SET `3rd_sem` = '$sem_3' WHERE `student`.`user_id` = '$user_id'";
                        $result_3 = mysqli_query($link,$sql_3);
                        //echo 'Updated';
                    }
                }else {
                    echo "enter the User Id.";
                }
            }
?>

    </div>

    <div class="container mb-5">
        <a href="t_home.php">
            <input type="submit" value="Back" name="but_update" class="btn btn-info btn-lg btn-block mt-3 row">
        </a>
    </div>
</body>

</html>