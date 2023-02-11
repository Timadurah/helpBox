
<?php
// To send a subscription email using PHP, you can use the built-in `mail()` function. Here is an example:


$to = "subscribers@kilogrammy.com";
$subject = "Subscription Confirmation";
$message = "Thank you for subscribing to our newsletter!\n\n" .
           "Best regards,\n" .
           "The Team";
$headers = "From: subscribers@kilogrammy.com\r\n" .
           "Reply-To: subscribers@kilogrammy.com\r\n" .
           "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $message, $headers)) {
  echo "Subscription email sent successfully.";
} else {
  echo "Failed to send the subscription email.";
}


// This code sends an email from `sender@example.com` to `recipient@example.com` with the subject "Subscription Confirmation" and a message thanking the recipient for subscribing. The `mail()` function returns `TRUE` on success and `FALSE` on failure, which you can use to check if the email was sent successfully.

// Note that the `mail()` function requires a properly configured mail server to be able to send emails.

?>