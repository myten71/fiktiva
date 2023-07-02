<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Validate form data
  $errors = array();
  if (empty($name)) {
    $errors[] = "Name is required";
  }
  if (empty($email)) {
    $errors[] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }
  if (empty($message)) {
    $errors[] = "Message is required";
  }

  // If there are no errors, send the email
  if (empty($errors)) {
    $to = "simen@simennysaether.no"; // Replace with your email address
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
      $success_message = "Thank you for your message. We will get back to you soon!";
    } else {
      $error_message = "Oops! Something went wrong. Please try again later.";
    }
  }
}
?>