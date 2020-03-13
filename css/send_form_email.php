<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_from = "izabellakornelis@gmail.com";
    $email_subject = "Git Portfolio Contact";
    $email_body = "You have received a new message from the user $name.".
 
 
    // validation expected data exists
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];

 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 

 // create email headers
 $to = "yourname@yourwebsite.com";

 $headers = "From: $email_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);  
?>

 
<!-- include your own success html here -->
 
Thank you for contacting me. I will be in touch with you very soon.
 
<?php
}
?>