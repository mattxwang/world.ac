<?php
//Start the PHP session
session_start();
//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Registration - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container">
	
			
<form class="form-signin" action="new_user_info.php" method="post">

<input type="text" id="first_name" class="form-control" placeholder="First Name" name="first_name" required="" autofocus="">

<input type="text" id="last_name" class="form-control" placeholder="Last Name" name="last_name" required="" autofocus=""> 
<select class="form-control" id="school" name="school" placeholder="DELEGATE SCHOOL" required="">
<option value="UCC">UCC</option>
<option value="BSS">BSS</option>
<option value="BH">BH</option>
<option value="UTS">UTS</option>
<option value="TFS">TFS</option>
</select>

<h4>Special Notes:</h4>
<p>
These special notes will be used to accomodate special needs. Examples include allergies, physical assistance, or religious accomodations.
</br>
</br>
Leave blank if none needed.
</p>
<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" placeholder="SPECIAL INFO"></textarea>

<button class="btn btn-lg btn-primary" type="submit" value="Login">Register</button>

</br>
</form>

<?php
include_once("footer.php")
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>
