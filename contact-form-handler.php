<?php


$visitor_email = $_POST['email'];

$email_from  = 'bmathan777@gmail.com';
$email_subject="new form ";
$email_body="user_email : $visitor_email.\n";

$to = "softwarejobsc@gmail.com";
$headers = "from : $email_from \r\n";
$headers = "reply-to: $visitor_email \r\n";
mail($to_$email_subject,$email_body,$headers);
header("location : index.html";)
?>