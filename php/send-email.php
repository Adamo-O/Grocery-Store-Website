<?php


require 'phpmailer/PHPMailerAutoload.php';


function sendEmail($mailTo, $sub, $body)
{
  $mail = new PHPMailer();
  $mail->isSMTP();

  $mail->Host = "smtp.gmail.com";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';

  $mail->Username = "lameilleureepicerie@gmail.com";
  $mail->Password = "lameilleure-epicerie-1";

  $mail->setFrom("lameilleureepicerie@gmail.com", "La Meilleure Epicerie");
  $mail->addAddress($mailTo);
  $mail->addReplyTo("lameilleureepicerie@gmail.com");

  $mail->isHTML(true);
  $mail->Subject = $sub;
  $mail->Body = $body;
  

  if (!$mail->Send()) {
    return false;
  } else {
    return true;
  }
  
}

?>