<?php
$name = $_POST[''];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

@email_from = 'peter.kindeberg.sederblad@edu.cmeducations.se';

@email_subject = 'New Form Submission';

@email_body = "user Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message .\n";

$to = 'peter.sedberg@gmail.com';

@headers = "From: email_from \r\n";

@headers .= "Reply-To": $visitor_email \r\n";`

mail($to,$email_subject,$email_body,$headers);

header ("Location: contact.html");
?>

