<?php 

	$to = ""; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$notes = $_POST['notes'];


	$subject = "Form submission";
	$message = $sender_name . " has send the contact message. His / Her contact subject is " .  $subject . " and his / her phone number is " . $phone;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>