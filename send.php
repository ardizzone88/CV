<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$address = "david.ard@hotmail.com";
$subject = "Contact me";
$letter = "From: $name \n";
$letter .= "Email: $email \n";
$letter .= "Message: $message";

mail($address, $subject, $letter);
header('Location:contact.html');
?>