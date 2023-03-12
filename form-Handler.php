<?php
$name = $_POST['name'];
$ = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'mailto://contact@mixplusmed.com';

$email_subject = 'New Form Submission';

$email_body Visitor_email= "User Name: $name.\n".
              "User Email: $Visitor_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";


$to = 'adapovn@gmal.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-to: $Visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>