<?php
// Replace with your email address
$to = "your_email@example.com";
$subject = "New Order from Nthambi71 Printers Website";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$details = $_POST['details'];

$message = "You have received a new order:\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";
$message .= "Service: $service\n";
$message .= "Details: $details\n";

$headers = "From: $email";

if(mail($to, $subject, $message, $headers)){
    echo "<h1>Thank you! Your order has been sent successfully.</h1>";
} else {
    echo "<h1>Sorry, there was a problem sending your order. Please try again later.</h1>";
}
?>