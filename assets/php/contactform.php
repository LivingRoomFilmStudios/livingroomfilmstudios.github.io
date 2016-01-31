<?php
// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('America/Los_Angeles');
//converting veriables
$time = echo date("m/d/Y h:i:sa")
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = 'trevor.peitzman@gmail.com';
$subject="Contact Form Submission at" .$time.; 
//creating message
$content = "New contact form submission \n From: ".$name.",\n Email: ".$email.",\n ".$message.;
//sending message
mail($recipient, $message, $content);
?>
