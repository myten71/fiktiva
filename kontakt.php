<?php
if (isset($_POST['submit'])) {
  // Get form inputs
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set up email
  $to = 'simen@simennysaether.no'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $headers = "From: $name <$email>" . "\r\n";
  
  // Compose the email body
  $email_body = "Name: $name\n\n";
  $email_body .= "Email: $email\n\n";
  $email_body .= "Message:\n$message";
  
  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    // Email sent successfully
    echo 'Thank you for your message. We will get back to you shortly.';
  } else {
    // Failed to send email
    echo 'Sorry, an error occurred while sending your message. Please try again later.';
  }
}
?>