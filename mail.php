<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST["email"];
    $to = "mohan@zentpeople.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
	$headers = "From:" . $from;
	mail($to,$subject,$message, $headers);
    echo "Thankyou for submitting your message. We will Contact you soon";
?>

