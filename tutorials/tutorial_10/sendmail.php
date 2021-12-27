<?php
$to= 'poepoecu93@gmail.com';
$subject ='Sending mail using sendmail.exe';//sending mail with sendmail.exe no composer
$message ='Click Here to Change Password
<a href="http://localhost/php_training/tutorials/tutorial_10/comfirm.php">Click Here</a>';
$headers ='From: [poemyatzin1995@gmail.com]'."\r \n".
            'MIME-Version: 1.0' . "\r\n". 
            'Content-type:text/html;charset=UTF-8' . "\r\n";
        if (mail($to,$subject,$message,$headers)){
          echo "message sent";
        }
        else{
          echo "Email sending fail";
        }

?>