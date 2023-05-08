<?php
$to = "harshithagandham33@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a test email message.";
$from = "harshithagandham33@gmail.com";
$headers = "From:" . $from;

mail($to,$subject,$message,$headers)
?>