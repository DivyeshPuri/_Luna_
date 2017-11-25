<?php

if (isset($_POST['submit'])){

    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $college=$_POST["college"];
    $mobile_no=$_POST["mobile"];


    $body = 'Hi '.$name.' ,you have successfully registered in our kreiva event.<br />'.'Your mobile number is: '.$mobile_no.'.<br />Your college name is:'.$college.'.<br /> Your email id is: '.$email.'.<br /> Your password is:'.$password.'<br />';

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
    $mail->Username = '';                   // SMTP username
    $mail->Password = '';               // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->Port = 587;                                    //Set the SMTP port number - 587 for authenticated TLS
    $mail->setFrom($email);     //Set who the message is to be sent from
    $mail->addReplyTo($email, $name);  //Set an alternative reply-to address

    $mail->addAddress($email);               // Name is optional


    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = "Request";
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    if(!$mail->send()) {
        echo 'Message could not be sent.';
        print_r($mail->ErrorInfo);
        exit;
    }

    echo 'Message has been sent';
}
?>
