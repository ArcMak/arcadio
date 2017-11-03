<?php
// Check for empty fields
if(empty($_POST['name'])  	||
   empty($_POST['email']) 	||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'arcmak@gmail.com';

// Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Contato de $name em arcadio.developintech.com";
$email_body = "Messagem do seu site (arcadio-cv-web).\n\nNome: $name\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: noreply@developintech.com\n";
// This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "responder para: $email_address";
mail($to, $email_subject, $email_body, $headers);

return true;
?>
