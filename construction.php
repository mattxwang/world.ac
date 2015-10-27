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
	<title>Page Under Construction</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">
<?php include_once("tracking.php") ?>
<?php include_once("navbar.php") ?>
<div style="text-align:center">

<h1>UNDER CONSTRUCTION</h1>

<img src="/img/construction-sign.png" width="165" />

<!-- Big Test Info Section -->
<div style="font-size:24px;color:#ffffff;padding:2vw;">
Hello there. We're still in the process of developing and creating the World Affairs Conference, and its website. Check back in a few weeks, and we'll have more content.
</div>

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