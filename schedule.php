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
	<title>World Affairs Conference - Schedule</title>
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
<style>
#table_gah{
   border-collapse: collapse;
   border-spacing: 0;
   border-radius:3px;
   width:1000px;
}
#td_column_gah{
   border-left: 1px solid #817781;
   border-right: 1px solid #817781;
   color:#ffffff;
   padding:10px;
   width:500px;
}
#td_gah{
   border-left: 1px solid #817781;
   border-right: 1px solid #817781;
   color:#ffffff;
   width:200px;
}
#td_stuff_gah{
   border-left: 1px solid #817781;
   border-right: 1px solid #817781;
   color:#ffffff;
   width:200px;
   background-color:#FFFFFF;
}
#th_gah{
   border: 1px solid #ddd;
   color:#ffffff;
   padding:15px;
}
.tr_1 {
	background-color:#4F494F;
}
#tr_last {
	border-bottom: 1px solid #817781;
}

</style>
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
		<td class="menu_button_box"><a class="menu_button_link" href="closing.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="plenaries.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">SCHEDULE
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
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
<center>

<span style="padding:10px; margin-bottom:100px;">


	<span style="color:#ffffff;font-size:30px;alight:left;"><b>Day 1</b> - Keynote Address</span><br>
	<hr> 

	<table id="table_gah" style="border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
	<th id="th_gah">Feb 2nd, 2015</th>
	<th id="th_gah">8am</th>
	<th id="th_gah">9</th>
	<th id="th_gah">10</th>
	<th id="th_gah">11</th>
	<th id="th_gah">12pm</th>
	<th id="th_gah">1</th>
	<th id="th_gah">2</th>
	<th id="th_gah">3</th>
	<th id="th_gah">4</th>
	<th id="th_gah">5</th>
	<th id="th_gah">6</th>
	<th id="th_gah">7</th>
	<th id="th_gah">8</th>
	<th id="th_gah">9</th>
	</tr>

	<tr class="tr_1">
		<td id="td_column_gah">Registration</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_stuff_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr>
		<td id="td_column_gah">Conference Opening</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah">
			<span style="vertical-align:middle;background-color:#FFF; width:25%; box-sizing:border-box;" class="fit_me_height"></span><span style="vertical-align:middle; width:75%; box-sizing:border-box;"></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr class = "tr_1">
		<td id="td_column_gah">Lionel Gelber Keynote Address</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah">
			<span style="vertical-align:middle; width:25%; box-sizing:border-box;"></span><span style="vertical-align:middle;background-color:#FFF; width:75%; box-sizing:border-box;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr>
		<td id="td_column_gah">Question and Answer Period</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah">
			<span style="vertical-align:middle; width:75%; box-sizing:border-box;background-color:#FFF" class="fit_me_height"></span><span style="vertical-align:middle;; width:25%; box-sizing:border-box;"></span>
		</td>
		<td id="td_gah"></td>
	</tr>
	<tr class = "tr_1" id = "tr_last">
		<td id="td_column_gah">Reception</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:75%; box-sizing:border-box;" ></span><span style="vertical-align:middle;width:25%; background-color:#FFF; box-sizing:border-box; " class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; background-color:#FFF;  width:25%; box-sizing:border-box;" class="fit_me_height" ></span><span style="vertical-align:middle;width:75%; box-sizing:border-box;" ></span>
		</td>
	</tr>
	</table>

	<br />


	<span style="color:#ffffff;font-size:30px;alight:left;"><b>Day 2</b> - The Conference</span><br>
	<hr> 

	<table id="table_gah" style="border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
	<th id="th_gah">Feb 3rd, 2015</th>
	<th id="th_gah">8am</th>
	<th id="th_gah">9</th>
	<th id="th_gah">10</th>
	<th id="th_gah">11</th>
	<th id="th_gah">12pm</th>
	<th id="th_gah">1</th>
	<th id="th_gah">2</th>
	<th id="th_gah">3</th>
	<th id="th_gah">4</th>
	<th id="th_gah">5</th>
	<th id="th_gah">6</th>
	<th id="th_gah">7</th>
	<th id="th_gah">8</th>
	<th id="th_gah">9</th>
	</tr>

	<tr class="tr_1">
		<td id="td_column_gah">Registration</td>
		<td id="td_stuff_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr>
		<td id="td_column_gah">Morning Panel</td>
		<td id="td_gah"></td>
		<td id="td_stuff_gah"></td>
		<td id="td_gah">
			<span style="vertical-align:middle;background-color:#FFF; width:25%; box-sizing:border-box;" class="fit_me_height"></span><span style="vertical-align:middle; width:75%; box-sizing:border-box;"></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr class = "tr_1">
		<td id="td_column_gah">Break</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:25%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:25%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle;width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr>
		<td id="td_column_gah">Plenary Session 1</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr class = "tr_1">
		<td id="td_column_gah">Plenary Session 2</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr>
		<td id="td_column_gah">Lunch</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr class ="tr_1">
		<td id="td_column_gah">Plenary Session 3</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>
	<tr id = "tr_last">
		<td id="td_column_gah">Closing Panel</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span><span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span>
		</td>
		<td id="td_gah"> 
			<span style="vertical-align:middle; width:50%; box-sizing:border-box; background-color:#FFF;" class="fit_me_height"></span><span style="vertical-align:middle; width:50%; box-sizing:border-box;" ></span>
		</td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
		<td id="td_gah"></td>
	</tr>

	</table>


</span>
</div>
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