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

<!-- | Page Content | -->

<!-- Page Title Section -->
<center>
<table style="width:100%; margin-top:10px; border-collapse:collapse; width:70%; margin-top:15px;" cellpadding="0" cellspacing="0">
<tr><!-- Main Page Title Ribbon Row -->
<td style="background-image:url(img/left_edge.png); background-repeat:y-repeat; width:10px;"></td><!-- Left Nub -->
<td style="text-align:center;font-size:42px; color:#ffffff; font-weight:bold; background-color:#43b4b3; padding:10px 0 10px 0;">THIS PAGE IS STILL UNDER CONSTRUCTION</td><!-- Title Content Nub/Section -->
<td style="background-image:url(img/right_edge.png); background-repeat:y-repeat; width:10px;"></td><!-- Right Nub -->
</tr>
<tr><!-- Date Info Row -->
<td></td>
<!--
<td style="text-align:center;">
	<span style="position:relative;">
		<div style="width:100%; background-color:rgba(0,0,0,0.2); height:4px; position:absolute; top:0px; left:0px;"></div>
		<span style="text-align:center;color:#ffffff; background-color:#43908f; padding:10px;">
			Please check back later!
		</span>
		<div style="background-image:url(img/ribbon_tail_dark.png); height:10px;">&nbsp;</div>
	</span>
</td>
-->
<td></td>
</tr>
</table>
</center>
<br />

<div style="text-align: center"><img src="/img/construction-sign.png" width="165" /></div>

<!-- Big Test Info Section -->
<div style="text-align:center;font-size:24px;color:#ffffff;padding:35px;">
Hello there. We're still in the process of developing and creating the World Affairs Conference, and its website. Check back in a few weeks, and we'll have more content.
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