<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    $to = "willstevens2000@hotmail.co.uk"; // Replace this with your email address
    $subject = "New Message from Contact Form";
    $headers = "From: $name <$email>";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Unable to send message. Please try again later.";
    }
} else {
    echo "Error: Form submission method not allowed.";
}
?>
