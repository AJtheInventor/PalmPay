<?php
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new user. ".
" Here are the details:\n Name: $name \n ".
$headers = "From: $to\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header('Location: contact-form-thank-you.html');
?>
