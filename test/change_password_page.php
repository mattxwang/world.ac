<?php 
	require("common.php");
	 
	if(!isset($_SESSION['user'])) 
	{ 
		header("Location: login_page.php"); 
		die("Redirecting to login_page.php"); 
	}  
?> 

<form action="change_password.php" method="post">
	<input id="password" placeholder="current password">
	<input id="password_new_1" placeholder="New password">
	<input id="password_new_2" placeholder="confirm new password">
	<button id="submitbutton" type="submit">Change</button>
</form>