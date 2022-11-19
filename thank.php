<?php
session_start();

if(!isset($_SESSION['signedin']) || $_SESSION['signedin']!=true){
    header("location: signup.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<title> Thanks - <?php $_SESSION['username']?></title>  
</head>
  <body>
  <?php require 'partials/_nav.php' ?>

  
  <div class="alert alert-success my-3" role="alert">
  <h2 class="alert-heading my-3">Thank You for sign up - <?php echo $_SESSION['username']?></h2>
  <p>Hi! <?php echo $_SESSION['username']?>. Welcome to the best Login System. You can log in now.
     Thank You.</p>
  <hr>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>