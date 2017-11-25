<?php
if (!empty($_POST)){
	$name = $_POST['name'];
	$email = $_POST['email'];
	//$subject = $_POST['subject'];
	$body = $_POST['message'];

	send_mail($email, $body, $name);
}


function send_mail($email,$body,$name){

	require('PHPMailer/PHPMailerAutoload.php');
	
	
	$mail = new PHPMailer;
	$mail->isSMTP();  
	$mail->SMTPOptions = array(
	    'ssl' => array(
	        'verify_peer' => false,
	        'verify_peer_name' => false,
	        'allow_self_signed' => true
	    )
	);       
	//$mail->SMTPDebug = 4;                             // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                       // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = '201652023@iiitvadodara.ac.in';                   // SMTP username
	$mail->Password = 'sandhya12';               // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
	$mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
	$mail->setFrom($email);     //Set who the message is to be sent from
	$mail->addReplyTo($email, $name);  //Set an alternative reply-to address
	//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
	$mail->addAddress($email);               // Name is optional
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	//$mail->addAttachment('/usr/labnol/file.doc');         // Add attachments
	//$mail->addAttachment('/images/image.jpg', 'new.jpg'); // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = "request";
	$mail->Body    = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   print_r($mail->ErrorInfo);
	   exit;
	}
header("location:index.php");
	echo 'Message has been sent';
}
?>
