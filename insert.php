<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'jamesjhay2001@gmail.com';

$email_subject = "New form submission";

$email_body = "User Name: $name .\n".
                 "User Email: $email.\n".
                 "User message: $message.\n":


$to = "victordickson1998@gmail.com"

$headers ="from: $email_from \r\n";

$headers = "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: vicntel website.html");



?>