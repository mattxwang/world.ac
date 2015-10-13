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
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<title>World Affairs Conference - Keynote</title>
	<link rel="stylesheet" href="css/base.css" />
	<link rel="icon" href="css/favicon.ico" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	window.onload=function() {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$(".border_bottom").remove();
		}
	}
	</script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">
<?php include_once("tracking.php") ?>

<!-- | WIP Menu Bar | -->
<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="index.php">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">KEYNOTE
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">SCHEDULE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>	
		<td class="menu_button_box"><a class="menu_button_link" href="faq.php">FAQ</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td style="width:100%;"></td>
		<td class="menu_button_box"><a href="http://www.ucc.on.ca"><img height=40px src="img/ucc.png" /></a><a href="http://www.branksome.on.ca/"><img height=40px src="img/bh.png" /></a></td>
		<td class="menu_button_box">
			<span style="position:relative; opacity:1;">
				<span style="position:absolute; bottom:-3px; left:0px; height:10px; background-color:#4c9190; width:100%;"></span>
				<a href="construction.php"><span style="background-color:#53b5b4; padding:10px; color:#FFF; position:relative;" class="button_top">REGISTER</span></a>
			</span>
		</td>
	</tr>
</table> 
<!-- | Menu Bar | -->
<!--
<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">KEYNOTE
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="morning.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="closing.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="plenaries.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="schedule.php">SCHEDULE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="faq.php">FAQ</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td style="width:100%;"></td>
		<td class="menu_button_box"><img height=40px src="img/ucc.png" /></td>
		<td class="menu_button_box">
			<span style="position:relative; opacity:1;">
				<span style="position:absolute; bottom:-3px; left:0px; height:10px; background-color:#4c9190; width:100%;"></span>
				<a href="misc_files/reg.pdf"><span style="background-color:#53b5b4; padding:10px; color:#FFF; position:relative;" class="button_top">REGISTER</span></a>
			</span>
		</td>
	</tr>
</table> 
-->

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

<br /><br /><br /><br />

<div style="background-color:rgba(0,0,0,0.3); color:#FFF; padding:0 30px 0 30px; vertical-align:middle; box-sizing:border-box; white-space:nowrap; position:absolute; bottom:0px; left:0px; width:100%;">
		<span class="footer" style="border-left:none;">
			<a href="http://www.ucc.on.ca">
				UPPER CANADA COLLEGE
			</a>
		</span>
		<span class="footer">
			<a href="plenaries.php">
				PLENARIES
			</a>
		</span>
		<span class="footer">
			<a href="misc_files/reg.pdf">
				REGISTER
			</a>
		</span>

<?php
$rando = rand(1,2);
$randa = rand(1,3);
if($rando == 1){
	$teamNames = "Jack Sarick, and Matthew Wang";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}
elseif($rando == 2){
	$teamNames = "Matthew Wang, and Jack Sarick";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}

?>
		
		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br /><?php echo $teamNames; ?><br />With help from last year's team:<br /><?php echo $lteamNames; ?></span>
</div>
</body>
</html>