<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("../includes/hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>

<!DOCTYPE html>
<html>
<!-- || Page Head || -->
<head>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
	<title>World Affairs Conference - Morning Panel</title>
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
<style>
#table_gah{
   border-collapse: collapse;
   border-spacing: 0;
   border-radius:3px;
   width:850px;
}
#td_gah{
   border: 1px solid #ddd;
   color:#ffffff;
   padding:15px;
   width:250px;
}
#th_gah{
   border: 1px solid #ddd;
   color:#ffffff;
   padding:15px;
}

</style>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<!-- | Menu Bar | -->
<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="morning.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="closing.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="plenaries.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">SCHEDULE
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		<td style="width:100%;"></td>
		<td class="menu_button_box">
			<span style="position:relative; opacity:1;">
				<span style="position:absolute; bottom:-3px; left:0px; height:10px; background-color:#4c9190; width:100%;"></span>
				<a href="misc_files/reg.pdf"><span style="background-color:#53b5b4; padding:10px; color:#FFF; position:relative;" class="button_top">APPLY</span></a>
			</span>
		</td>
	</tr>
</table> 


<!-- | Page Content | -->
<center>

<span style="padding:10px; margin-bottom:100px;">

<span style="color:#ffffff;text-size:22px;alight:left;"><b>Monday February 3rd 2014</b></span>
<table id="table_gah">
<tr>
<th id="th_gah">EVENT</th>
<th id="th_gah">LOCATION</th>
<th id="th_gah">TIME</th>
</tr>
<tr>
<td id="td_gah">Registration</td>
<td id="td_gah">Main Foyer</td>
<td id="td_gah">6:00 to 7:00 PM</td>
</tr>
<tr>
<td id="td_gah">Conference Opening</td>
<td id="td_gah">Laidlaw Hall</td>
<td id="td_gah">7:00 to 7:15 PM</td>
</tr>
<tr>
<td id="td_gah">Lionel Gelber Keynote Address</td>
<td id="td_gah">Laidlaw Hall</td>
<td id="td_gah">7:15 to 8:00 PM</td>
</tr>
<tr>
<td id="td_gah">Question and Answer Period</td>
<td id="td_gah">Laidlaw Hall</td>
<td id="td_gah">8:00 to 8:45 PM</td>
</tr>
<tr>
<td id="td_gah">Reception</td>
<td id="td_gah">Student Center</td>
<td id="td_gah">8:45 to 9:15 PM</td>
</tr>
</table>

<br />
<span style="color:#ffffff;text-size:22px;alight:left;"><b>Tuesday February 4th 2014</b></span>
<table id="table_gah">
<tr>
<th id="th_gah">EVENT</th>
<th id="th_gah">LOCATION</th>
<th id="th_gah">TIME</th>
</tr>
<tr>
<td id="td_gah">Registration</td>
<td id="td_gah">Main Foyer</td>
<td id="td_gah">8:00 to 9:00 AM</td>
</tr>
<tr>
<td id="td_gah">Morning Panel</td>
<td id="td_gah">Laidlaw Hall</td>
<td id="td_gah">9:00 to 10:15 AM</td>
</tr>
<tr>
<td id="td_gah">Break</td>
<td id="td_gah">Student Center</td>
<td id="td_gah">10:15 to 10:30 AM</td>
</tr>
<tr>
<td id="td_gah">Plenary Session One</td>
<td id="td_gah">Refer to Name Tag</td>
<td id="td_gah">10:30 to 11:30 AM</td>
</tr>
<tr>
<td id="td_gah">Plenary Session Two</td>
<td id="td_gah">Refer to Name Tag</td>
<td id="td_gah">11:35 to 12:35 PM</td>
</tr>
<tr>
<td id="td_gah">Lunch</td>
<td id="td_gah">Lett Gym</td>
<td id="td_gah">12:25 to 1:20 PM</td>
</tr>
<tr>
<td id="td_gah">Plenary Session Three</td>
<td id="td_gah">Refer to Name Tag</td>
<td id="td_gah">1:20 to 2:20 PM</td>
</tr>
<tr>
<td id="td_gah">Plenary Session Four</td>
<td id="td_gah">Refer to Name Tag</td>
<td id="td_gah">2:25 to 3:25 PM</td>
<td></td>
</tr>
<tr>
<td id="td_gah">Closing Ceremonies</td>
<td id="td_gah">Laidlaw Hall</td>
<td id="td_gah">3:35 to 4:15 PM</td>
</tr>
</table>


</span>

</center>

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
			<a href="misc_files/reg.php">
				APPLY
			</a>
		</span>
		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br />Derek & Kinton & Nick, Elder & Lam & Cheung not respectively</span>
</div>

</body>
</html>