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
	<title>Keynote Address - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
	p{
		text-align:justify;
	}
	</style>
</head>

<body style="position:relative;">
	<?php include_once("navbar.php") ?>
	<div class = "container">
	<div style = "text-align:center;">
		<h1>This Year's Keynote Speaker</h1>
		<h2>Mystery Speaker</h2>
		<img src="img/speaker_pic_blank_large.png"></img>
		<h3>Check Back Later</h3>
	</div>
	<p>
		This year's Keynote Speaker hasn't been decided yet! We'll announce the speaker soon, so remember to check back!
	</p>	
	<div style = "text-align:center;">
		<h2>Last Year's Keynote Speaker</h2>
		<h1>Edward Snowden</h1>
		<img src="img/speaker_pic.png"></img>
		<h3>The Whistleblower of the Decade</h3>
	</div>
	<div style = "text-align:center;">
		<h1>Previous Speakers</h1>
	</div>
	<p>
		WAC has featured many current, popular, and influential speakers in the past. Here's a quick summary of some big names at WAC:
		</br>
		<b>Dr. Samantha Nutt</b> - Founder of War Child North America
		</br>
		<b>Stephen Lewis</b> - former United Nations ambassador
		</br>
		<b>Ralph Nader</b> - American political activist
		</br>
		<b>Lord David Owen</b> - former British Foreign Secretary
		</br>
		<b>Marc Garneau</b> - astronaut turned politician
		</br>
		<b>John Stackhouse</b> - editor of the Globe and Mail
	</p>
	<p>
		Last year, <b><a href ="https://en.wikipedia.org/wiki/Edward_Snowden" style = "color:white">Edward Snowden</a></b> gave the WAC 2015 Lionel Gelber Keynote Address. In June 2013, Snowden leaked highly classified information about the scale and scope of NSA and CIA counter-terrorism and counter-intelligence operations around the globe. Since then, he has become a household name and is among the most influential privacy activists in the world. At the Keynote Address, Snowden explained his views on global privacy issues, government involvement in citizens' lives, and the dangers of the digital age. 
	</p>	
	<?php
	include_once("footer.php")
	?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>