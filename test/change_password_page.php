<?php 
	require("common.php");
	 
	if(!isset($_SESSION['user'])) 
	{ 
		header("Location: login_page.php"); 
		die("Redirecting to login_page.php"); 
	}  
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Change Password - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container-fluid">

	<form action="change_password.php" method="post">

		<h3>Delegate First Name</h3>
		<h5>This is how your first name will appear on the delegate nametag.</h5>
		<input type="text" id="first_name" class="form-control" placeholder="First Name" name="first_name" required="" autofocus="">

		<h3>Delegate Last Name</h3>
		<h5>This is how your last name will appear on the delegate nametag.</h5>
		<input type="text" id="last_name" class="form-control" placeholder="Last Name" name="last_name" required=""> 

		<h3>Delegate School</h3>
		<h5>This is how your school will appear on the delegate nametag.</h5>
		<p>If your school is not in this dropdown menu, your school's registration form was submitted incorrectly. Please <a href="contact_us.php">contact us</a> for further information.
		</p>
		<select class="form-control" id="school" name="school" placeholder="DELEGATE SCHOOL" required="">
			<option value="UCC">UCC</option>
			<option value="BSS">BSS</option>
			<option value="BH">BH</option>
			<option value="UTS">UTS</option>
			<option value="TFS">TFS</option>
		</select>

		<h3>Special Notes:</h3>
		<h5>
		These special notes will be used to accomodate special needs. Examples include allergies, physical assistance, or religious accomodations.
		</br>
		Leave blank if none needed.
		</h5>
		<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" placeholder="SPECIAL INFO"></textarea>

		<button class="btn btn-lg btn-primary" type="submit" value="Login">Register</button>

	</form>

	<form action="change_password.php" method="post">
		<input id="password" name="password" placeholder="current password">
		<input id="password_new_1" name="password_new_1" placeholder="New password">
		<input id="password_new_2" name="password_new_2" placeholder="confirm new password">
		<button id="submitbutton" name="submitbutton" type="submit">Change</button>
	</form>
	


<?php
include_once("footer.php")
?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>