<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Perform any necessary form validation or processing here
  // For example, you can check if the fields are not empty or validate the email format

  // Send the email
  $to = 'tenepallirangampetahemanth@gmail.com'; // Replace with your own email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";

  $headers = "From: $name <$email>";

  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo 'Thank you for your message. We will get back to you soon!';
  } else {
    // Error sending email
    echo 'Sorry, there was an error sending your message. Please try again later.';
  }

  exit;
}
?>

