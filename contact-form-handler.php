<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
		
	$email_from = $email;

	$email_subject = "New Form Submission: $subject";
	
	$email_body = "From: $name.\n".
				  "Email: $email.\n".
				  "Message: $message.\n";

	$to = "nekotturu@students.natickps.org";

	$headers = "From: $email_from \r\n";
	
	$headers .= "Reply-To: $email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: contact.html");	

	exit;
?>