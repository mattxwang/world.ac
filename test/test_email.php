<?php
// the message
$msg = "Please visit the following link to activate account: <a href='http://world.ac/activate.php?" + str_rot13("jack.sarick@ucc.on.ca") + "'/>";

// send email
mail("jack.sarick@ucc.on.ca","My subject",$msg);

echo "It worked!";
?>