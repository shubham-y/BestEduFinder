<?php

$myemail = 'shubham.anil.98@gmail.com';
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$mobile = $_POST['mobile']; 
$message = $_POST['message']; 
$reason = $_POST['reason']; 


$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Mobile: \n $mobile \n Message: \n $message  \n Reason: \n $reason";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

// mail($to,$email_subject,$email_body,$headers);
if (mail($to, $email_subject, $email_body, $headers)) {
   echo("
      Message successfully sent!
   ");
} else {
   echo("
      Message delivery failed...
   ");
}

//redirect to the 'thank you' page
//header('Location: index.html');



?>