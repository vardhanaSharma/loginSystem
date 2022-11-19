<?php 

    if(isset($_POST['btn-send']))
    {
        $UserName = $_POST['UName'];
        $Email = $_POST['Email'];
        $Phoneno = $_POST['Phoneno'];
        $Msg = $_POST['msg'];

        if(empty($UserName) || empty($Email) || empty($Phoneno) || empty($Msg))
        {
            header('location:contact.php?error');
        }
        else
       {
        ini_set("SMTP","aspmx.l.google.com");
        $to = "vardhanasharma2001@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: Your name <vardhanasharma2001@gmail.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

        
           if(mail($to, $Email, $Msg, $headers))
           {
               header("location:contact.php?success");
           }
        }
    }
    else
    {
        header("location:contact.php");
    }
?>