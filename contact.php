<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $subject = $_POST['subject'];
        $to = 'advr9087@gmail.com';
        $headers = "From: $email";
        
        $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        if (mail($to, $subject, $mailBody, $headers)) {
            header("Location: thank-you.html"); // Redirect to thank you page upon successful submission
            exit();
        } else {
            echo "Failed to send email. Please try again later.";
        }
    } else {
        echo "Form submission failed. Please try again.";
    }
?>
