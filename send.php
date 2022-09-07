<?php

$to_mail = "shandsomm@gmail.com";
$sub = "Hello";
$body = "Hyyy";
$header = "From: soumyaranjan.cbu@yahoo.com";

ini_set("SMTP", "smtp.mail.yahoo.com");
ini_set("smtp_port", "465");
if(mail($to_mail, $sub, $body, $header)) {
    echo "Mail send to " . $to_mail;
}
else {
    echo "failed";
}