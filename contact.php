<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    $to = "your-email@example.com"; // Change this to your email address
    $subject = "New Message from Contact Form";
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Message sent successfully!";
    } else {
        // Error sending email
        echo "Error: Unable to send message. Please try again later.";
    }
}
?>
