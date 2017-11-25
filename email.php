<?php
//if "email" variable is filled out, send email
if (isset($_POST['email']))  {
    //Email information
    $to = get_option( 'admin_email' );
    $headers = "$_POST['email']";
    $headers ="From: $_POST['email']";
    $headers ="Reply-to: $_POST['email']\r\n";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    //send email
    wp_mail($to, $subject, $message, $headers);

    //Email response
    echo "Thank you for contacting us!";
}

    //if "email" variable is not filled out, display the form
    else  {
?>
<form method="post">
    Email: <input name="email" type="text" /><br />
    Subject: <input name="subject" type="text" /><br />
    Message:<br />
    <textarea name="message" rows="15" cols="40"></textarea><br />
    <input type="submit" value="Submit" />
 </form>

<?php
  }
?>
