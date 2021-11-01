<?php
 $name= $_POST['name'];
 $visitor_email = $_POST['email'];
 $message =$_POST['message'];

 $email_from ='satul380@gmail.com';
 $email_subject = "submission";
  $email_body = "user name: $name.
                   "user email: $visitor_email.\n"
                   "user message: $message.\n";

   $to = "atulrajput2798@gmail.com" ;
   
   $headers = "from: $email_from \r\n";
   $headers = "reply-to: $visitor_email \r\n";
   mail($to, $email_subject, $email_body, $headers);
   header ("location: index3.html");

   ?>