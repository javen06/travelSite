<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'info@traveltheworld.com'

$email_subject = 'New Form Submission'

$email_body = "Username: $name.\n".
            "User Email: $visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message .\n";


$to = 'javenlim09@gmail.com';


$headers = "From: $email_from \r\n"

$headers .="Reply-To: $visitor_email \r\n;

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html")
?>


//How to Make Website Education Institution Website Design Pt4.