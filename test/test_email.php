<?php
// the message
$message = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$message = wordwrap($message,70);

$to = "jack.sarick@ucc.on.ca"

$subject = "This is a test"

$headers = 'From: donotrespond@world.ac';

// send email
mail($to, $subject, $message, $headers);

echo "It worked!";
?>