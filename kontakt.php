<?php
if (isset($_POST['submit'])) {
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  

  $to = 'simen@simennysaether.no'; // 
  $subject = 'New Contact Form Submission';
  $headers = "From: $name <$email>" . "\r\n";

  $email_body = "Name: $name\n\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Message:\n$message";
  

  if (mail($to, $subject, $email_body, $headers)) {
    
    echo 'Din henvendelse er sendt. Vi kommer tilbake til deg snarest.';
  } else {
  
    echo 'Beklager, din beskjed ble ikke sendt - prøv igjen senere';
  }
}
?>