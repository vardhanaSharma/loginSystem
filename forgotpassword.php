<?php
include 'partials/_dbconnect.php';
if(isset($_POST['reset-email'])){
    $query = "SELECT * FROM `user` WHERE `email`= '$_POST[email]'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "run";
    }else{
        echo "<script> alert('cannot run');
        window.location.herf ='loginsystem/login.php';
        </script>";
    }
}

?>
