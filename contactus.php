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
<div class="container-fluid">
<div class="row" style="color:#ffffff;">
	<div class="col-md-4">
		<h1>Contact Us</h1>
		<p>
		<h3>Conference Organisation</h3>
		<b>Logan Ye</b>, Conference Chair, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a></br>
		
		</br>
		<h3>Website Design</h3>
		<b>Matthew Wang</b>, Website Design, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></br>
		<b>Jack Sarick</b>, Website Design, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a></br>

		<!--
			<h3>Conference Chairs:</h3></br>
			Logan Ye (Conference Chair, UCC, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a>)</br>
			Nikhil Kassum (Head of Registration, UCC, <a href="mailto:nikhil.kassume@ucc.on.ca">nikhil.kassum@ucc.on.ca</a>)</br>
			</br>
			<h3>Registration:</h3></br>
			Emmanuel Wong (Head of Registration, UCC, <a href="mailto:emmanuel.wong@ucc.on.ca">emmanuel.wong@ucc.on.ca</a>)</br>
			</br>
			<h3>Operations:</h3></br>
			Ernest Leung (Head of Operations, UCC, <a href="mailto:ernest.leung@ucc.on.ca">ernest.leung@ucc.on.ca</a>)</br>
			</br>
			<h3>Website Design:</h3></br>
			Matthew Wang (Web Design, UCC, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a>)</br>
			Jack Sarick (Web Design, UCC, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a>)</br>]
			</br></br><h3>Faculty:</h3></br>
			Gregory McDonald (UCC Faculty Lead, UCC <a href="mailto:gmcdonald@ucc.on.ca">gmcdonald@ucc.on.ca</a>)</br>
			</br></br>
			-->
		</p>
	</div>
	<div class="col-md-2">
		<h1>Social Media</h1>
		<a href="https://www.facebook.com/worldaffairsconference?fref=ts">
		<img src="img/facebook.png" class="img-responsive" style="width:30%;vertical-align: text-bottom;"></img>
		</a>
		<p>Facebook Page</p>
	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-4">
		
	</div>
	<!-- REMOVE THIS
	<div style="width:30%; color:#ffffff;padding:2%">
		<h1>Contact Us</h1>
		<p>
		<h2>Conference Organisation</h2>
		<b>Logan Ye</b>, Conference Chair, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a></br>
		
		</br>
		<h2>Website Design</h2>
		<b>Matthew Wang</b>, Website Design, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></br>
		<b>Jack Sarick</b>, Website Design, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a></br>

		<!--
			<h3>Conference Chairs:</h3></br>
			Logan Ye (Conference Chair, UCC, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a>)</br>
			Nikhil Kassum (Head of Registration, UCC, <a href="mailto:nikhil.kassume@ucc.on.ca">nikhil.kassum@ucc.on.ca</a>)</br>
			</br>
			<h3>Registration:</h3></br>
			Emmanuel Wong (Head of Registration, UCC, <a href="mailto:emmanuel.wong@ucc.on.ca">emmanuel.wong@ucc.on.ca</a>)</br>
			</br>
			<h3>Operations:</h3></br>
			Ernest Leung (Head of Operations, UCC, <a href="mailto:ernest.leung@ucc.on.ca">ernest.leung@ucc.on.ca</a>)</br>
			</br>
			<h3>Website Design:</h3></br>
			Matthew Wang (Web Design, UCC, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a>)</br>
			Jack Sarick (Web Design, UCC, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a>)</br>]
			</br></br><h3>Faculty:</h3></br>
			Gregory McDonald (UCC Faculty Lead, UCC <a href="mailto:gmcdonald@ucc.on.ca">gmcdonald@ucc.on.ca</a>)</br>
			</br></br>

			SECOND COMMENT WAS HERE
			
		</p>
	</div> -->
	<!--
	<div style="width:30%; color:#ffffff;padding:2%">
		<h1>Social Media</h1>
		<a href="https://www.facebook.com/worldaffairsconference?fref=ts">
		<img src="img/facebook.png" class="img-responsive"></img>
		</a>
	</div>
	-->
</div>
<?php
include_once("footer.php")
?>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>