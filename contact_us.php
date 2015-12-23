<?php
//Start the PHP session
session_start();

 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Contact Us - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	
</head>

<body style="position:relative;">
	<?php include_once("import_info.php") ?>
	<?php include_once("navbar.php") ?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>Contact Us</h1>
				<p>
				<h3>Conference Organisation</h3>
				<b>Logan Ye</b>, Conference Chair, <a href="mailto:logan.ye@ucc.on.ca">logan.ye@ucc.on.ca</a></br>
				<b>Naz Gocek</b>, Conference Chair, <a href="mailto:ngocek@branksome.on.ca">ngocek@branksome.on.ca</a></br>
				<b>Blaise O'Malley</b>, Conference Chair, <a href="mailto:bomalley@branksome.on.ca">bomalley@branksome.on.ca</a></br>
				<b>Nikhil Kassum</b>, Head of Programs, <a href="mailto:nikhil.kassume@ucc.on.ca">nikhil.kassum@ucc.on.ca</a></br>
				<b>Ernest Leung</b>, Head of Operations, <a href="mailto:ernest.leung@ucc.on.ca">ernest.leung@ucc.on.ca</a></br>
				<b>Emmanuel Wong</b>, Head of Registration, <a href="mailto:emmanuel.wong@ucc.on.ca">emmanuel.wong@ucc.on.ca</a></br>
				<b>Nitish Dhingra</b>, Secretary/Treasurer, <a href="mailto:nitish.dhingra@ucc.on.ca">nitish.dhingra@ucc.on.ca</a></br>

				
				</br>
				<h3>Website Design</h3>
				<b>Matthew Wang</b>, Website Design, <a href="mailto:matthew.wang@ucc.on.ca">matthew.wang@ucc.on.ca</a></br>
				<b>Jack Sarick</b>, Website Design, <a href="mailto:jack.sarick@ucc.on.ca">jack.sarick@ucc.on.ca</a></br>
				</p>
			</div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-4">
				<h1>Social Media</h1>
				<a href="https://www.facebook.com/worldaffairsconference?fref=ts">
				<img src="img/facebook.png" class="img-responsive" style="width:30%;"></img>
				</a>
				<a href="https://twitter.com/WorldAffairsCon">
				<img src="img/twitter.png" class="img-responsive" style="width:30%;"></img>
				</a>
			</div>
		</div>
		<?php
		include_once("footer.php")
		?>
	</div>
	 <script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/nav-collapse.js"></script></body>
</html>