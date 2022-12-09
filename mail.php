<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "anton.soderholm@icloud.com";
$headers = "From: $name <$email>";

if (mail($to, $subject, $message, $headers)) {
echo "Your message was sent successfully!";
} else {
        echo "An error occurred and your message could not be sent.";
}
}
?>