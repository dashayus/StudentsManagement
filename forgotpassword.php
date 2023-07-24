<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Recover</title>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <div class="container my-5">
    <div class="row">

      <div class="col-md-7">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Recover your password</h4>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="row">
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Enter your email id" required>
                </div>
              </div>
              <div class="col-md-6">
                <button type="submit" name="fetch_btn" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card">
          <div class="card-body">

            <?php

                    include "config.php";
                  if (isset($_POST['fetch_btn'])) {
                    $email = $_POST['email'];
                    $query = "SELECT * FROM student where email='$email'";
                    $query_run = mysqli_query($link,$query);

                    if (mysqli_num_rows($query_run)>0) {
                      while($row = mysqli_fetch_array($query_run)){
                        // echo $row['username'];
                        ?>
                        <!-- <div class="form-group">
                          <input type="text" name="email" value="<?php echo $row['username']; ?>" class="form-control" placeholder="Username" required>
                        </div> -->
                        <div class="form-group">
                          <p>password</p>
                          <input type="text" name="email" value="<?php echo $row['password']; ?>" class="form-control" placeholder="password" required>
                        </div>
                        <!-- <div class="form-group">
                          <input type="text" name="email" value="<?php echo $row['gender']; ?>" class="form-control" placeholder="gender" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="email" value="<?php echo $row['phone']; ?>" class="form-control" placeholder="phone" required>
                        </div> -->



            <?php
                      }                      
                    }
                    else {
                      echo "no record found";
                    }
                  }
            ?>


          </div>
        </div>
      </div>

    </div>

  </div>

  
</body>

</html>