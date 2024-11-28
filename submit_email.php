<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate the email address
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    // Check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define the recipient email address (your email)
        $to = "yakingins@gmail.com";  // Replace with your email
        $subject = "New Subscription to Seconddoor";
        $message = "You have a new subscriber! \n\nEmail: $email";
        $headers = "From: no-reply@seconddoor.com\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            // If the email was sent successfully, redirect the user to the thank-you page
            header("Location: thank_you.html");
            exit();
        } else {
            echo "There was an error sending the email. Please try again later.";
        }
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request method.";
}
?>
