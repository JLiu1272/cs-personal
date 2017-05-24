<?php
	
	if(isset($_GET["submit"])){
		echo "Hello";
	}
	/*if (isset($_POST["submit"])){
	   echo "Hello";		
	   $name = $_POST['name'];
	   $email = $_POST['email'];
	   $message = $_POST['message'];

	   $from = "Demo Contact Form";
	   $to = "jenniferliu1272@gmail.com";
	   $subject = "Message from Contact Demo";

	   $body = "From: $name\n E-Mail: $email\n Message:\n $message";
	}

	// Check if name has been entered
	if (!$_POST['name']) {
		$errName = 'Please enter your name';
	}

	// Check if email has been entered and is valid
	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$errEmail = 'Please enter a valid email address';
	}

	//Check if message has been entered
	if (!$_POST['message']) {
		$errMessage = 'Please enter your message';
	}

	// If there are no errors, send the email
	if (!$errName && !$errEmail && !$errMessage) {
			if (mail ($to, $subject, $body, $from)) {
				$result='<div>Thank You! I will be in touch</div>';
			} else {
				$result='<div>Sorry there was an error sending your message. Please try again later</div>';
			}
	}*/
?>
