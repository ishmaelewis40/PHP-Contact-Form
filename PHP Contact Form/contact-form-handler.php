<?php
$name =$_POST['name'];
$guest_email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'ishmaelewis40@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                 "User Email: $guest_email.\n".
                      "User Message: $message.\n"
    
    $to = "lewislevi865@gmail.com";
    
    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $guest_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: indext.html")
?>