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
	<title>Keynote Address</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
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
<td style="text-align:center;font-size:45px; color:#ffffff; font-weight:bold; background-color:#43b4b3; padding:10px 0 10px 0;">LAST YEAR'S KEYNOTE ADDRESS<br /><spans style="font-size:35px;font-weight:normal;">Edward Snowden</span></td><!-- Title Content Nub/Section -->
<td style="background-image:url(img/right_edge.png); background-repeat:y-repeat; width:10px;"></td><!-- Right Nub -->
</tr>
<tr><!-- Date Info Row -->
<td></td>
<td style="text-align:center;">
	<span style="position:relative;">
		<div style="width:100%; background-color:rgba(0,0,0,0.2); height:4px; position:absolute; top:0px; left:0px;"></div>
		<span style="text-align:center;color:#ffffff; background-color:#43908f; padding:10px;">
			"The Whistleblower of the Decade"
		</span>
		<div style="background-image:url(img/ribbon_tail_dark.png); height:10px;">&nbsp;</div>
	</span>
</td>
<td></td>
</tr>
</table>
</center>
<br />
<!-- The Speaker Section -->
<table style="padding-left:40px;padding-right:40px;width:70%; border-collapse:collapse; margin:0 auto;" cellspacing="0" cellpadding="0">
<tr>
<td style="padding-right:30px;"><img src="img/speaker_pic_blank_large.png" /></td>
<td>
	<span class="left_speech_bubble_triangle" style="margin:0px;"></span>
</td>
<td style="width:100%;">
<span style="width:100%; background-color:#ffffff; border-radius:7px; color:#888; font-style:italic; padding:30px; line-height:140%; font-size:16px; box-sizing:border-box;">
This year's speaker has yet to be decided. Check in later to find out who our next guest of honour is!
</span>
</td>
</tr>
</table>
<br />

<!-- The Snowden Section -->
<table style="padding-left:40px;padding-right:40px;width:70%; border-collapse:collapse; margin:0 auto;" cellspacing="0" cellpadding="0">
<tr>
<td style="padding-right:30px;"><img src="img/speaker_pic.png" /></td>
<td>
	<span class="left_speech_bubble_triangle" style="margin:0px;"></span>
</td>
<td style="width:100%;">
<span style="width:100%; background-color:#ffffff; border-radius:7px; color:#888; font-style:italic; padding:30px; line-height:140%; font-size:16px; box-sizing:border-box;">
<!-- <b>Edward Snowden</b> will be giving this years Lionel Gelber Keynote Address. More information will be provided shortly. -->
Last year, <b>Edward Snowden</b> gave the WAC 2015 Lionel Gelber Keynote Address. In June 2013, Snowden leaked highly classified information about the scale and scope of NSA and CIA counter-terrorism and counter-intelligence operations around the globe. Since then, he has become a household name and is among the most influential privacy activists in the world. At the Keynote Address, Snowden explained his views on global privacy issues, government involvement in citizens' lives, and the dangers of the digital age. 
</span>
</td>
</tr>
</table>
<br />

<!-- Past Speakers Section -->
<table style="width:70%; margin:0 auto; border-collapse:collapse; margin-bottom:100px;" cellpadding="0" cellspacing="0">
<tr>
<td style="text-align:center;font-size:16px;color:#ffffff;padding-left:10px;">
	<div style="border-radius:5px; background-color:#43b4b3; padding:30px 15px 30px 15px; color:#FFF;">Other Past Speakers</div>
</td>
<td style="padding-right:7px;">
	<div class="right_speech_bubble_triangle"></div>
</td>
<td>

<table style="background-color:#ffffff; width:100%; border-collapse:collapse; color:#888;  padding:30px; line-height:140%; font-size:16px;" cellspacing="0" cellpadding="0">

<tr>
<td style="background-color:#5ec673; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">Dr. Samantha Nutt - <i>Founder of War Child North America</i></td>
</tr>

<tr>
<td style="background-color:#43b4b3; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">Stephen Lewis - <i>former United Nations ambassador</i></td>
</tr>

<tr>
<td style="background-color:#5ec673; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">Ralph Nader - <i>American political activist</i></td>
</tr>

<td style="background-color:#43b4b3; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">Lord David Owen - <i>former British Foreign Secretary </i></td>
</tr>

<tr>
<td style="background-color:#5ec673; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">Marc Garneau - <i>astronaut turned politician</i></td>
</tr>

<td style="background-color:#43b4b3; width:8px;"></td>
<td style="padding:10px 0 10px 10px;">John Stackhouse - <i>editor of the Globe and Mail</i></td>
</tr>

</table>

</td>
</tr>
</table>
<div>&nbsp;</div>

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