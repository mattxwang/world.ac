<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- || Page Head || -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Contact Us</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<?php include_once("tracking.php") ?>
<?php include_once("navbar.php") ?>
<body style="position:relative;">
	<div style="width:30%; color:#ffffff;padding:5%">
		<h1>Contact Us</h1>
		<p>
			<b>Conference Chairs:</b></br>
			Logan Ye (Head of Registration, UCC, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a>)</br>
			Nikhil Kassum (Head of Registration, UCC, <a href="mailto:nikhil.kassume@ucc.on.ca">nikhil.kassum@ucc.on.ca</a>)</br>
			<b>Registration:</b></br>
			Emmanuel Wong (Head of Registration, UCC, <a href="mailto:emmanuel.wong@ucc.on.ca">emmanuel.wong@ucc.on.ca</a>)</br>
			<b>Operations:</b></br>
			Ernest Leung (Head of Operations, UCC, <a href="mailto:ernest.leung@ucc.on.ca">ernest.leung@ucc.on.ca</a>)</br>
			<b>Website Design:</b></br>
			Jack Sarick (Web Design Lead, UCC, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a>)</br>
			Matthew Wang (Web Design Lead, UCC, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a>)</br>
			</br></br><b>Faculty:</b></br>
			Gregory McDonald (UCC Faculty Lead, UCC <a href="mailto:gmcdonald@ucc.on.ca">gmcdonald@ucc.on.ca</a>)</br>
			</br></br>
		</p>

	</div>
	<div style="padding:35px; text-align:center; color:#ffffff;">
		<h1>Contact Us</h1>
		<p class="lead">
			<b>Conference Chairs:</b></br>
			Logan Ye (Head of Registration, UCC, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a>)</br>
			Nikhil Kassum (Head of Registration, UCC, <a href="mailto:nikhil.kassume@ucc.on.ca">nikhil.kassum@ucc.on.ca</a>)</br>
			<b>Registration:</b></br>
			Emmanuel Wong (Head of Registration, UCC, <a href="mailto:emmanuel.wong@ucc.on.ca">emmanuel.wong@ucc.on.ca</a>)</br>
			<b>Operations:</b></br>
			Ernest Leung (Head of Operations, UCC, <a href="mailto:ernest.leung@ucc.on.ca">ernest.leung@ucc.on.ca</a>)</br>
			<b>Website Design:</b></br>
			Jack Sarick (Web Design Lead, UCC, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a>)</br>
			Matthew Wang (Web Design Lead, UCC, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a>)</br>
			</br></br><b>Faculty:</b></br>
			Gregory McDonald (UCC Faculty Lead, UCC <a href="mailto:gmcdonald@ucc.on.ca">gmcdonald@ucc.on.ca</a>)</br>
			</br></br>
		</p>
	</div>

<?php
include_once("footer.php")
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>