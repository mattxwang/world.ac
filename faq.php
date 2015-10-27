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
	<title>FAQ</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body style="position:relative;">
<div class="container">

<?php include_once("tracking.php") ?>
<?php include_once("navbar.php") ?>


<!-- | Page Content | -->

<div class = "row">

<div class = "col-md-2 hidden-xs"> 
	<ul class="nav nav-pills nav-stacked bg-white nav-rounded" style="position:fixed;">
	  <li role="presentation"><a href="#general">General</a></li>
	  <li role="separator" class="divider-blue"></li>
	  <li role="presentation"><a href="#reg">Registration</a></li>
	  <li role="separator" class="divider-blue"></li>
	  <li role="presentation"><a href="#cday">Conference Day</a></li>
	</ul>
</div>

<div class = "col-md-10" style ="color:#FFFFFF"> 
	<div id = "general">
	<h2>General</h2>
	</div>
	<div id = "gen_what">
		<h3>What is WAC?</h3>
		<p class = "text-justify"> The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 50 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference.</p>
	</div>
	<div id = "gen_date">
		<h3>2016 dates</h3>
		<p class = "text-justify"> There are two parts to WAC: the Keynote Address, which will be held on the night of February 1st, and the conference day, which is on the day of February 2nd.  </p>
	</div>
	<div id = "gen_days">
		<h3>Do students attend both days?</h3>
		<p class = "text-justify">The first day of the conference consists just of the Lionel Gelber Keynote Address which is hosted in the evening. This event is open to the Toronto community, and anyone is welcome to attend. The second day of the conference begins at 8AM and is attended by only registered student delegates and their faculty supervisors. We do encourage students to attend the Keynote Address if it is of interest to them. It tends to feature a well know speaker of great importance to current affairs.</p>
	</div>
	<div id = "media">
		<h3>Media information</h3>
		<p class = "text-justify">For any information regarding media coverage please contact the Head of the Department of Registration and Media: Emmanuel Wong (emmanuel.wong@ucc.on.ca). If you require any WAC branding for your work please feel free to use the following provided logos: <a href="misc_files/WAC_Logos.zip"><b>download here.</b></a></p>
	</div>

	<div id = "reg">
	<h2>Registration</h2>
	</div>
	<div id="reg_student_cost">
	<h3>Registration Price</h3>
	<p class = "text-justify">Registration for WAC 2016 is being organized right now. Updates will be sent out shortly.</p>
	</div>
	<div id = "how_to_reg">
		<h3>How can I register my school?</h3>
		<p class = "text-justify">To attend the world affairs conference you must submit your registration form and means of payment by the registration deadline. <!-- The registration information package, as well as the forms required to register are available for download, please click the blue 'register' button at the top right of the page to view the PDF file. Please note the forms are located at the end of this file, which also includes the registration information package.--></p>
	</div>
	<div id = "reg_who">
		<h3>Who can attend WAC?</h3>
		<p class = "text-justify">WAC is open to anyone is currently in grades 9 to 12 with an interest in politics or current affairs. </p>
	</div>
	<div id = "reg_due">
		<h3>When is the registration due?</h3>
		<p class = "text-justify">This, along with other information, will be sent out as we finish the registration package. </p>
		<!--
		<p class = "text-justify">The registration is due by mail on December 16th 2014. We may not be able to accept late registrants so please ensure your forms are submitted promptly. </h3>
		-->
	</div>

	<div id = "cday">
	<h2>Conference Day</h2>
	</div>
	<div id = "theday">
		<h3>What can I expect on the day of WAC?</h3>
		<p class = "text-justify">School supervisors and their students are encouraged to arrive at or before 8AM for the registration check in process. Each student will receive their personal package with their name tag. The conference will then be kicked off with our morning panel. The closing ceremonies typically end at around 4:40PM</p>
	</div>
	<div id = "lunch">
		<h3>Are students provided lunch?</h3>
		<p class = "text-justify">Yes students are provided lunch free of charge on the day of the conference.</p>
	</div>
	<div id = "allergy">
		<h3>How do I notify WAC of allergies?</h3>
		<p class = "text-justify">If you would like to notify us of a food allergy that we should be aware of, please include any details we will need on a separate piece of paper within your return envelope.</p>
	</div>
</div>

</div>



<!--FOOTER-->
<?php
include_once("footer.php")
?>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>