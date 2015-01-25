<?php 
var_dump($_POST);



  ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "emailtest@yoanmarchal.com";
    $to = "marchalyoan@gmail.com";
    $subject = "PHP Mail Test script";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Test email sent";