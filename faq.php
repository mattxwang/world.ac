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
	<title>World Affairs Conference - FAQ</title>
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
body {
	color:#FFFFFF;
}
hr {
	color:#817781;
}
.header {
	font-size:14px;
	font-weight:bold;
	align:left;
	color:#FFFFFF;
}
.text {
	font-size:14px;
	align:left;
	color:#FFFFFF;
}
.tablecontent {
	width:280px;
   border-collapse: collapse;
   border-spacing: 0;
   border-radius:3px;
   color:#00e4ff;

}
.tablecontent2 {
	width:280px;
   border-collapse: collapse;
   border-spacing: 0;
   border-radius:3px;
   color:#FFFFFF;
}
.sectionhead {
	font-size:20px;
	align:left;
}
#gen_what {
	padding-bottom:14px;
}
#gen_date {
	padding-bottom:14px;
}
#gen_hours{
	padding-bottom:14px;
}
#reg_who{
	padding-bottom:14px;
}
#contact {
	padding-bottom:14px;
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
		<!--
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="morning.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="closing.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="plenaries.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="schedule.php">SCHEDULE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">FAQ<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		-->
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">PLENARIES</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="construction.php">SCHEDULE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">FAQ<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		<td style="width:100%;"></td>
		<td class="menu_button_box"><img height=40px src="img/ucc.png" /></td>
		<td class="menu_button_box">
			<span style="position:relative; opacity:1;">
				<span style="position:absolute; bottom:-3px; left:0px; height:10px; background-color:#4c9190; width:100%;"></span>
				<a href="construction.php"><span style="background-color:#53b5b4; padding:10px; color:#FFF; position:relative;" class="button_top">REGISTER</span></a>
			</span>
		</td>
	</tr>
</table> 


<!-- | Page Content | -->

<div style="padding-left:200px;padding-right:200px;">


<span style="padding:10px; margin-bottom:100px;">

	<span style="color:#ffffff;font-size:30px;alight:left;padding-bottom:15px;"><b>Have a question about WAC?</b></span><br>
<div>
	<table class="tablecontent" style="float:left;">
		<tr>
			<td style="font-weight:bold;color:#FFF;">General</td>
		</tr>
		<tr>
			<td><a href="#gen_what">What is WAC?</a></td>
		</tr>
		<!--
		<tr>
			<td><a href="#gen_date">2016 dates</a></td>
		</tr>
		<tr>
			<td><a href="#gen_hours">Conference hours</a></td>
		</tr>
		-->
		<tr>
			<td><a href="#gen_days">Do students attend both days?</a></td>
		</tr>
		<tr>
			<td><a href="#media">Media information</a></td>
		</tr>
	</table>
	<table class="tablecontent" style="float:left;">
		<tr>
			<td style="font-weight:bold;color:#FFF;">Registration</td>
		</tr>
		<tr>
			<td><a href="#how_to_reg">How can I register my school?</a></td>
		</tr>
		<tr>
			<td><a href="#reg_student_cost">What is the cost per student?</a></td>
		</tr>
		<tr>
			<td><a href="#reg_who">Who can attend WAC?</a></td>
		</tr>
		<!--
		<tr>
			<td><a href="#reg_due">When is the registration due?</a></td>
		</tr>
		-->

	</table>
	<table class="tablecontent" style="float:left;">
		<tr>
			<td style="font-weight:bold;color:#FFF;">Conference Day</td>
		</tr>
		<tr>
			<td><a href="#theday">What can I expect on the day of WAC?</a></td>
		</tr>
		<tr>
			<td><a href="#lunch">Are students provided lunch?</a></td>
		</tr>
		<tr>
			<td><a href="#allergy">How do I notify WAC of allergies?</a></td>
		</tr>
	</table>
	<table class="tablecontent" style="float:left;">
		<tr>
			<td style="font-weight:bold;color:#FFF;">Contact</td>
		</tr>
		<tr>
			<td><a href="#contactinfo">Contact info</a></td>
		</tr>
	</table>

<br><br><br><br><br><br><br><br>

</div>


<div class = "sectionhead">General</div><hr>
	<div id = "gen_what">
		<span class="header">What is WAC?</span><br>
		<span class="text"> The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 50 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference.</span>
	</div>
	<div id = "gen_date">
		<span class="header">2016 dates</span><br>
		<span class+"text"> We haven't quite decided the exact date of WAC. More information will be known as registration packages get sent out. </span>
		<!--
		<span class="text"> The 2015 World Affairs Conference (WAC) will be held from <strong>February 2-3 2015 </strong> at Upper Canada College in Toronto, Canada.</span>
		-->
	<!--
	<div id = "gen_hours">
		<span class="header">Conference hours</span><br>
		<span class="text"> Please refer to the <a href="schedule.php">schedule</a> page. </span>
	</div>
	-->
	<div id = "gen_days">
		<span class="header">Do students attend both days?</span><br>
		<span class="text">The first day of the conference consists just of the Lionel Gelber Keynote Address which is hosted in the evening. This event is open to the Toronto community, and anyone is welcome to attend. The second day of the conference begins at 8AM and is attended by only registered student delegates and their faculty supervisors. We do encourage students to attend the Keynote Address if it is of interest to them. It tends to feature a well know speaker of great importance to current affairs.</span>
	</div><br />
	<div id = "media">
		<span class="header">Media information</span><br>
		<span class="text">For any information regarding media coverage please contact the Head of the Department of Registration and Media: Emmaneul Wong (emmanuel.wong@ucc.on.ca). If you require any WAC branding for your work please feel free to use the following provided logos: <a href="misc_files/WAC_Logos.zip"><b>download here.</b></a></span>
	</div>

<br><br><div class = "sectionhead">Registration</div><hr>
	<span id="reg_student_cost" style="font-size:20px;font-weight:bold;"><!--Registration for WAC 2016 is now open at $50 (USD or CAD) per person.-->Registration for WAC 2016 is being organized right now. Updates will be sent out shortly.</span><br><br>
	<div id = "how_to_reg">
		<span class="header">How can I register my school?</span><br>
		<span class="text">To attend the world affairs conference you must submit your registration form and means of payment by the registration deadline. <!-- The registration information package, as well as the forms required to register are available for download, please click the blue 'register' button at the top right of the page to view the PDF file. Please note the forms are located at the end of this file, which also includes the registration information package.--></span>
	</div><br />
	<div id = "reg_who">
		<span class="header">Who can attend WAC?</span><br>
		<span class="text">WAC is open to anyone is currently in grades 9 to 12 with an interest in politics or current affairs. </span>
	</div>
	<div id = "reg_due">
		<span class="header">When is the registration due?</span><br>
		<span class="text">This, along with other information, will be sent out as we finish the registration package. </span>
		<!--
		<span class="text">The registration is due by mail on December 16th 2014. We may not be able to accept late registrants so please ensure your forms are submitted promptly. </span>
		-->
	</div>

<br><br><div class = "sectionhead">Conference Day</div><hr>
	<div id = "theday">
		<span class="header">What can I expect on the day of WAC?</span><br>
		<span class="text">School supervisors and their students are encouraged to arrive at or before 8AM for the registration check in process. Each student will receive their personal package with their name tag. The conference will then be kicked off with our morning panel. The closing ceremonies typically end at around 4:40PM</span>
	</div><br />
	<div id = "lunch">
		<span class="header">Are students provided lunch?</span><br>
		<span class="text">Yes students are provided lunch free of charge on the day of the conference.</span>
	</div><br />
	<div id = "allergy">
		<span class="header">How do I notify WAC of allergies?</span><br>
		<span class="text">If you would like to notify us of a food allergy that we should be aware of, please include any details we will need on a separate piece of paper within your return envelope.</span>
	</div>



<br><br><br><br><div class = "sectionhead">Contact</div><hr>
	<div id = "contactinfo">
		<table class="tablecontent2" style="float:left;">
			<tr><td>Emmanuel Wong</td></tr>
			<tr><td>Registration Correspondent</td></tr>
			<tr><td>Upper Canada College</td></tr>
			<tr><td>emmanuel.wong@ucc.on.ca</td></tr>
		</table>
		<table class="tablecontent2" style="float:left;">
			<tr><td>Gregory McDonald</td></tr>
			<tr><td>Faculty Advisor</td></tr>
			<tr><td>Upper Canada College</td></tr>
			<tr><td>416-488-1125 ext. 3330</td></tr>
			<tr><td>gmcdonald@ucc.on.ca</td></tr>
		</table>
		<table class="tablecontent2" style="float:left;">
			<tr><td>Jarrod Baker</td></tr>
			<tr><td>Faculty Advisor</td></tr>
			<tr><td>Branksome Hall School</td></tr>
			<tr><td>416-920-6625 ext. 267</td></tr>
			<tr><td>jbaker1@branksome.on.ca</td></tr>
		</table>
		<!--
		<table class="tablecontent2" style="float:left;">
			<tr><td>Tracy Dalglish</td></tr>
			<tr><td>Faculty Advisor</td></tr>
			<tr><td>Branksome Hall School</td></tr>
			<tr><td>416-920-6625 ext. 280</td></tr>
			<tr><td>tdalglish@branksome.on.ca</td></tr>
		</table>
		-->
	</div>

</div>

</span>
</div>


<!--FOOTER-->
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