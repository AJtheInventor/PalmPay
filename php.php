<?php 

  $email_from = 'shulman.aj@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "You have received a new message from the user $name.\n $email.\n".;
  mail($email_from,$email_subject,$email_body,$headers);
?>
