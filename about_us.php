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
	<title>Page Under Construction</title>
	<link rel="stylesheet" href="css/base.css" />
	<link rel="icon" href="css/favicon.ico" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	window.onload=function() {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$(".border_bottom").remove();
		}
		$(".fit_me_height").each(function() {
			$(this).height($(this.parentNode).innerHeight());
		})
	}
	</script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<?php include_once("tracking.php") ?>
<!-- | Menu Bar (Construction) | -->

<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="index.php">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
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
<br />

<!-- Info to Come -->
<!-- <center><span style="text-align:CENTER;font-size:30px;color:#ffffff;padding:35px;background-color:#6CCA67; margin-bottom:100px;">MORE INFORMATION TO COME</span></center>
-->
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div>&nbsp;</div>
<div style="background-color:rgba(0,0,0,0.3); color:#FFF; padding:0 30px 0 30px; vertical-align:middle; box-sizing:border-box; white-space:nowrap; position:absolute; bottom:0px; left:0px; width:100%;">
		<span class="footer" style="border-left:none;">
			<a href="http://www.ucc.on.ca">
				UPPER CANADA COLLEGE
			</a>
		</span>
		<span class="footer">
			<a href="construction.php">
				PLENARIES
			</a>
		</span>
		<span class="footer">
			<a href="construction.php">
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