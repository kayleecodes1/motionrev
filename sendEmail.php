<?php
	
	$name = trim($_POST['name']);
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$site_owners_email = 'team@motionrev.com'; // Replace this with your own email address
	$site_owners_name = 'Motion Revolution Team'; // replace with your name
	
	if ((strlen($name) < 2) || ($name == 'Your name')) {
		$error['name'] = "Please enter your name";	
	}
	
	
	if ((!preg_match('/^[a-z0-9&\'\.\-_\+]+@[a-z0-9\-]+\.([a-z0-9\-]+\.)*+[a-z]{2}/is', $email) || ($email) == 'Email')) {
		$error['email'] = "Please enter a valid email address";	
	}
	
	
	if ((strlen($subject) < 2) || ($subject) == 'Subject')  {
		$error['subject'] = "Please enter subject name";	
	}
	
	
	if ((strlen($message) < 3) || ($message) == 'Enter your message') {
		$error['message'] = "Please leave a message.";
	}	
	
	if (!$error) {
		
		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "mail.motionrev.com";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "team@motionrev.com";        // Make sure to replace this with your shell enabled user
		$mail->Password = "3tr3util3";      // Make sure to use the proper password for your user
		
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = $subject;
		$mail->AddAddress($site_owners_email, $site_owners_name);
//		$mail->AddAddress('team@motionrev.com', 'Motion Revolution Team');
		$mail->Body = $message;
		
		$mail->Send();
		
		echo "<li class='success'> Thanks, " . $name . ". We've received your e-mail and will be in touch soon! </li>";
		
	} # end if no error
	else {

		$response = (isset($error['name'])) ? "<li>" . $error['name'] . "</li> \n" : null;
		$response .= (isset($error['email'])) ? "<li>" . $error['email'] . "</li> \n" : null;
		$response .= (isset($error['subject'])) ? "<li>" . $error['subject'] . "</li> \n" : null;
		$response .= (isset($error['message'])) ? "<li>" . $error['message'] . "</li>" : null;
		
		echo $response;
	} # end if there was an error sending

?>
