<?php 
  ob_start();
  session_start();
  require_once('inc/db.php');
  
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    
    $get_user = "SELECT * FROM users WHERE user_name = '$username' AND user_pass = '$password'";
    $run_user = mysqli_query($con, $get_user);
    
    if($run_user === false) {
      echo "Query execution error: " . mysqli_error($con);
    } else {
      
      $check = mysqli_num_rows($run_user);
    if($check == 1){
      $_SESSION['username'] = $username;
      echo "<script>window.open('index.php', '_self')</script>";
    }
    else{
      echo "<script>alert('Invalid username or password')</script>";
    }
    }

  }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link href="images/myLogo.png" rel="icon" type="image/png">
    <Link rel="stylesheet" href="css/bootstrap.min.css" >
    <Link rel="stylesheet" href="css/custom.css" >
    <link href="https://fonts.googleapis.com/css?family=Raleway:300, 400" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/c1b65d9ebe.js" crossorigin="anonymous"></scrip>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


    <style>
        body {
            font-family: "Raleway", sans-serif;
        }
    </style>

    <title>Trident Academy</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row mt-5">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form action="" method="post" class="">
              <h2 class="text-danger">Please Sign In ( Admin Area )</h2><hr />
              <label for="" class="text-danger">Username</label>
              <input type="text" name="username" placeholder="USERNAME" required class="form-control"><br />

              <label for="" class="text-danger">Password</label>
              <input type="text" name="password" placeholder="PASSWORD" required class="form-control"><br />

              <button type="submit" name="submit" class="btn btn-danger btn-block">Submit</button>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
    </div>
  </body>
</html>
