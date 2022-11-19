<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title> Welcome - <?php $_SESSION['username']?></title>  
</head>
  <body>
  <?php require 'partials/_nav.php' ?>

  
  <div class="alert alert-success my-3" role="alert">
  <h2 class="alert-heading my-3">Welcome to my login system - <?php echo $_SESSION['username']?></h2>
  <p>Hi! <?php echo $_SESSION['username']?>. Welcome to the best Login System. Hope you enjoy the system.
     Thank You.</p>
  <hr>
  
</div>

<div class="details">
  <div class="text-center">
    <h3>Here is your complete details:-</h3>
    <p>Username - <?php echo $_SESSION['username']?></p>
    <p>Email id - <?php echo  $_SESSION['email']?></p>
    <p>Signup date - <?php echo $_SESSION['dt']?></p>
    
    <p class="mb-0 my-5">Whenever you need to, be sure to log 
      out using button below.</p>
      <div class="d-grid gap-5 col-3 mx-auto">
      <a class="btn btn-outline-info btn-sm" href="/loginsystem/logout.php" role="button">Logout</a>
      </div>
  </div>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>