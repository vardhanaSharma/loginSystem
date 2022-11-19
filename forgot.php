<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Forgot password</title>
  </head>
  <body>

    <div class="container my-4">
     <h1 class="text-center">Reset Password Page</h1>
     <form action="/loginsystem/forgot.php" method="post">
        <div class="form-group text-center my-5">
            <label for="email">Enter your email</label>
            <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
            <div class="d-grid gap-5 col-3 mx-auto">
      <a class="btn btn-secondary btn-sm" href="/loginsystem/forgotpassword.php" role="button" name= reset-email>Send Otp</a>
      </div>
        </div>
         
     </form>
     
    </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>