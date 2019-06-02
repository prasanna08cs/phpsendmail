<?php
 //i created fro testing purpse 
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@hostinger-tutorials.com";
    $to = "prasanna08cs@gmail.com";
    $subject = "Email from website";
    $message = @$_POST['name']."-".@$_POST['email'];
    $headers = "From:" . $from;
    echo mail($to,$subject,$message, $headers);
    echo "The email message was sent.";

 

?>
