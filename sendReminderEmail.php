<?php
session_start();

if(isset($_SESSION['username'])) {
    $to = $_SESSION['email']; // Assuming you have an 'email' field in your user database
    $subject = "Appointment Reminder";
    $message = "You have an appointment tomorrow at {APPOINTMENT TIME}.";
    $headers = "From: webmaster@example.com";

    mail($to, $subject, $message, $headers);
    echo "Reminder email sent!";
} else {
    echo "<h1>Access Denied</h1>";
}
?>
