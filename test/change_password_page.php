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