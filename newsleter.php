<?php
if(isset( $_POST['email']))
$email = $_POST['email'];
$content="  Email: $email ";
$recipient = "info@kikalitebeauty.com";
$subject = "Newletter from visitor";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
/* Redirect visitor to the thank you page */

header('Location: newsletter.html');
exit();
?>

