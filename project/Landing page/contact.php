<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $checkInDate = $_POST["check-in"];
    $checkOutDate = $_POST["check-out"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "pratikraj9117@gmail.com";

    // Subject of the email
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Check-in Date: $checkInDate\n";
    $message .= "Check-out Date: $checkOutDate\n";
    $message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
