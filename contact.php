<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you can process the data (e.g., send an email, store in a database, etc.)
    // For demonstration purposes, let's just redirect back with a success status
    header("Location: form.php?status=success");
    exit;
}
?>
