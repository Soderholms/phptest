<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "anton.l.soderholm@gmail.com";
$headers = "From: $name <$email>";
    $body = "You have received a message from $name with subject: $subject.\n\n$message";

if(mail($to, $subject, $body, $headers)) {
header("Location: index.html");
} else {
echo "Error sending email. Please try again later.";
}
}

?>