<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");


}

?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>
  

</body>

</html>
