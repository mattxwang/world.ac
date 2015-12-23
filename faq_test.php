<?php
//Start the PHP session
session_start();

 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>FAQ - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	<style>
	.panel-body{
		text-align:justify;
		color:black;
	}
	.well{
		color:black;
	}
	</style>
</head>

<body style="position:relative;">
	<div class="container">
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>

		<div class="well well-lg" id = "general">
			<h2><a href="#general">General</a></h2>
		</div>
		<div class="panel-group" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralWhat">
					What is WAC?
					</a>
					</h4>
				</div>
				<div id="collapseGeneralWhat" class="panel-collapse collapse in" role="tabpanel">
					<div class="panel-body">
					The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralWhen">
					When is WAC?
					</a>
					</h4>
				</div>
				<div id="collapseGeneralWhen" class="panel-collapse collapse" role="tabpanel">
					<div class="panel-body">
					WAC spans two days: the <a href="keynote.php">Keynote Address</a>, featuring a prominent member of the community, is held on the night of February 1st and open to the public; and the Conference Day, which is held on February 2nd and is attended by delegates and faculty supervisors only.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralMedia">
					Who Do We Contact for Media Information?
					</a>
					</h4>
				</div>
				<div id="collapseGeneralMedia" class="panel-collapse collapse" role="tabpanel">
					<div class="panel-body">
					For any information regarding media coverage please contact the Head of the Department of Registration and Media: Emmanuel Wong (emmanuel.wong@ucc.on.ca). If you require any WAC branding for your work please feel free to use the following provided logos: <a href="misc_files/WAC_Logos.zip"><b>download here.</b></a>
					</div>
				</div>
			</div>
		</div>


		<div class="well well-lg" id = "general">
			<h2><a href="#general">General</a></h2>
		</div>
			<div id = "gen_what">
				<h3>What is WAC?</h3>
				<p> The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference.</p>
			</div>
			<div id = "gen_date">
				<h3>When is WAC?</h3>
				<p> There are two parts to WAC: the Keynote Address, which will be held on the night of February 1st, and the conference day, which is on the day of February 2nd.  </p>
			</div>
			<div id = "gen_days">
				<h3>Do students attend both days?</h3>
				<p>The first day of the conference consists just of the Lionel Gelber Keynote Address which is hosted in the evening. This event is open to the Toronto community, and anyone is welcome to attend. The second day of the conference begins at 8AM and is attended by only registered student delegates and their faculty supervisors. We do encourage students to attend the Keynote Address if it is of interest to them. It tends to feature a well know speaker of great importance to current affairs.</p>
			</div>
			<div id = "media">
				<h3>Media information</h3>
				<p>For any information regarding media coverage please contact the Head of the Department of Registration and Media: Emmanuel Wong (emmanuel.wong@ucc.on.ca). If you require any WAC branding for your work please feel free to use the following provided logos: <a href="misc_files/WAC_Logos.zip"><b>download here.</b></a></p>
			</div>

		<div id = "reg">
		<h2><a href="#reg">Registration</a></h2>
		</div>
		<div id="reg_student_cost">
		<h3>Registration Price</h3>
		<p>Registration for WAC 2016 is $50 CAD, per student. This should be submitted with delegate registration.</p>
		</div>
		<div id = "how_to_reg">
			<h3>How can I register my school?</h3>
			<p>To attend the world affairs conference you must submit your registration form and means of payment by the registration deadline. The registration information package, as well as the forms required to register are available for download, <b><a href="misc_files/reg_2015.pdf">here</a></b> and <b><a href ="misc_files/reg_2015_form.pdf">here</a></b>.</p>
		</div>
		<div id = "reg_who">
			<h3>Who can attend WAC?</h3>
			<p>WAC is open to anyone is currently in grades 9 to 12 with an interest in politics or current affairs. </p>
		</div>
		<div id = "reg_due">
			<h3>When is the registration due?</h3>
			<p>This, along with other information, will be sent out as we finish the registration package. </p>
		
			<p>The registration is due by mail on January 16th 2016. We may not be able to accept late registrants, so please ensure your forms are submitted promptly. </h3>
	
		</div>

		<div id = "cday">
		<h2><a href="#cday">Conference Day</a></h2>
		</div>
		<div id = "theday">
			<h3>What can I expect on the day of WAC?</h3>
			<p>School supervisors and their students are encouraged to arrive at or before 8AM for the registration check in process. Each student will receive their personal package with their name tag. The conference will then be kicked off with our morning panel. The closing ceremonies typically end at around 4:40PM</p>
		</div>
		<div id = "lunch">
			<h3>Are students provided lunch?</h3>
			<p>Yes, students are provided lunch free of charge on the day of the conference.</p>
		</div>
		<div id = "allergy">
			<h3>How do I notify WAC of special food accomodations?</h3>
			<p>This year, WAC can accomodate for vegetarian needs. Please submit this in either the registration package, or the website's account system. 
			</br>
			Unfortunately, we cannot tailor to specific food allergies. We suggest those delegates either bring a pack lunch, or go to a nearby restaurant.
			</p>
		</div>
		
	<?php
	include_once("footer.php")
	?>

	</div>

 <script src="js/jquery.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/nav-collapse.js"></script>
</body>
</html>