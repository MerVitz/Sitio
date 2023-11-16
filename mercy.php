<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "your@email.com"; // Replace with your email address
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your submission! We will get back to you soon.";
} else {
    echo "Invalid request";
}
?>
