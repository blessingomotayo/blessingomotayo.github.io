<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['Message'];
$formcontent=" From: $name \n email: $email \n Message: $message";
$recipient = "blessing.omotayo@carleton.ca";
$subject = "Contact Form";
$mailheader = "From: $email. By: $name \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' > Return Home</a>";
?>
