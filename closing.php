<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>

<!DOCTYPE html>
<html style="height:100%;">
<!-- || Page Head || -->
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<title>World Affairs Conference - Closing Panel</title>
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

<!-- | Menu Bar | -->
<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="morning.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">CLOSING PANEL
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
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


<!-- | Page Content | -->

<!-- Page Title Section -->
<center>
<table style="width:100%; margin-top:10px; border-collapse:collapse; width:70%; margin-top:15px;" cellpadding="0" cellspacing="0">
<tr><!-- Main Page Title Ribbon Row -->
<td style="background-image:url(img/left_edge.png); background-repeat:y-repeat; width:10px;"></td><!-- Left Nub -->
<td style="text-align:center;font-size:42px; color:#ffffff; font-weight:bold; background-color:#43b4b3; padding:10px 0 10px 0;">CLOSING PANEL: THREATS TO HUMANITY</td><!-- Title Content Nub/Section -->
<td style="background-image:url(img/right_edge.png); background-repeat:y-repeat; width:10px;"></td><!-- Right Nub -->
</tr>
<tr><!-- Date Info Row -->
<td></td>
<td style="text-align:center;">
	<span style="position:relative;">
		<div style="width:100%; background-color:rgba(0,0,0,0.2); height:4px; position:absolute; top:0px; left:0px;"></div>
		<span style="text-align:center;color:#ffffff; background-color:#43908f; padding:10px;">
			3:30 to 4:30PM | Tuesday February 3rd 2015
		</span>
		<div style="background-image:url(img/ribbon_tail_dark.png); height:10px;">&nbsp;</div>
	</span>
</td>
<td></td>
</tr>
</table>
</center>
<br />
<center><img style=" -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px;" width=200px src="img/boris-headshot.jpg"></center>

<div style="text-align:left;font-size:24px;color:#ffffff;padding:35px;">
This year's closing speaker is <b>Boris Cherniak</b>. Mr. Cherniak is a Soviet-born Canadian-based entertainer, psychological illusionist, hypnotherapist, comedian hypnotist and motivational speaker that performs internationally. He will be closing this year's confernece on a high note with his presentation.<br /><br />
The Closing Seminar of the World Affairs Conference has a rich history. With prominent speakers from across North America and beyond, the presentation has focused on ending the day on a high note. It has featured a variety of speakers who focus on important world issues spanning from human rights to gender issues to health ethics. Students leave Upper Canada College deep in thought about the conference and educated on important global issues. 
</div>
<br />

<!-- Big Test Info Section -->

<!-- Info to Come -->
<!-- <center><span style="text-align:CENTER;font-size:30px;color:#ffffff;padding:35px;background-color:#6CCA67; margin-bottom:100px;">MORE INFORMATION TO COME</span></center>
-->
<div>&nbsp;</div>
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
$rando = rand(1,3);
if($rando == 1){
	$teamNames = "Nick Elder, Derek Lam and Kinton Cheung";
}
elseif($rando == 2){
	$teamNames = "Derek Lam, Kinton Cheung and Nick Elder";
}
elseif($rando == 3){
	$teamNames = "Kinton Cheung, Nick Elder and Derek Lam";
}
?>

		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br /><?php echo $teamNames; ?></span>
</div>
</body>
</html>