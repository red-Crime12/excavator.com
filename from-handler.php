<?php
$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];



$email_from = 'info@excavator.com';

$email_subject = 'New Form Submission';

$email_body = "User Name $name.\n".
               "User Email $visiter_email.\n".
               "User Subject $subject.\n".
               "User Message $message.\n";


 $to ='mohsinkhizer142@gmail.com';

 $headers = "from: $email_from \r\n";
 $headers = "Reply-To: $visiter_email \r\n";

 mail($to,$email_subject,$email_body,$headers);
 header("location: contact.html")
 

?>