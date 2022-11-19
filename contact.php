<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://www.google.com/recaptcha/api.js?render=6Le72z0gAAAAADZdCLDNWPuhpkzi4pMWAjENv6-h"></script>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
    <title>Contact Us Form</title>
</head>

<?php 
if(isset($_POST['submit'])){
    // print_r(($_POST)); die();
    $url = ' https://www.google.com/recaptcha/api/siteverify';
    $secret = '6Le62z0gAAAAAGxiwmFtSu5t2WeKXwjB_AYmeDfJ';
    $response = $_POST['token_generate'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    
    $request = file_get_contents($url.'?secret='.$secret.'&response='.$response);
    $resultt = json_decode($request);


// print_r($resultt);
if($resultt->success == true){
    ?> 
    <script>
        alert("Data saved");
    </script>
    <?php
}else{
    ?> 
    <script>
        alert("Data not saved");
    </script>
    <?php
}
}


?>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Contact Us </h2>
                        <hr>
                        <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Thank You for contacting us! Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>
                    
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="User Name" class="form-control mb-2">
                            <input type="email" name="Email" placeholder="Email" class="form-control mb-2">
                            <input type="text" name="Phoneno" placeholder="Phone no." class="form-control mb-2">
                            <textarea name="msg" class="form-control mb-2" placeholder="Write The Message"></textarea>
                            <input type="hidden" name="token_generate" id="token_generate">
                            <button class="btn btn-success" name="btn-send"> Send </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
      <br/>
      <input type="submit" value="Submit">
    </form> -->
</body>
</html>
<script>
      
        grecaptcha.ready(function() {
          grecaptcha.execute('6Le72z0gAAAAADZdCLDNWPuhpkzi4pMWAjENv6-h', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
              var response = document.getElementById('token_generate');
              response.value = token;
          });
        });
      
  </script>