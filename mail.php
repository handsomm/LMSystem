<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  require 'private/PHPMailer-master/src/Exception.php';
  require 'private/PHPMailer-master/src/PHPMailer.php';
  require 'private/PHPMailer-master/src/SMTP.php';

function send_mail($recipient,$subject,$message)
{

  $mail = new PHPMailer();
  $mail->IsSMTP();

  $mail->SMTPDebug  = 0;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.mail.yahoo.com";
  //$mail->Host       = "smtp.mail.yahoo.com";
  $mail->Username   = "soumyaranjan.cbu@yahoo.com";
  $mail->Password   = "ylrdesbtbznzhtyi";

  $mail->IsHTML(true);
  $mail->AddAddress($recipient);
  $mail->SetFrom("soumyaranjan.cbu@yahoo.com", "Shibu");
  //$mail->AddReplyTo("reply-to-email", "reply-to-name");
  //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
  $mail->Subject = $subject;
  $content = $message;

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    //echo "Error while sending Email.";
    //var_dump($mail);
    return false;
  } else {
    //echo "Email sent successfully";
    return true;
  }

}

?>