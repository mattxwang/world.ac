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
		<link rel="stylesheet" href="css/base.css" />
		<script src="js/google_analytics.js"></script>
		<style>
		.panel-body{
			text-align:justify;
			color:black;
		}
		h2{
			font-weight: bold;
		}
		</style>
	</head>

	<body>
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>
		<div class="container">
			<h1 style="text-align: center;">Frequently Asked Questions</h1>
			<h3>Click on a question to expand the answer.</h3>
			<h5> Is your question not answered? You can <b><a href="contact_us.php">contact us</a></b> for more information.</h5>

			<div class="panel-group" id="general" role="tablist" aria-multiselectable="true">
				<h2><a href="#general">General</a></h2>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralWhat">
						What is WAC?
						</a>
						</h4>
					</div>
					<div id="collapseGeneralWhat" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 1000 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference.
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
						<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralWho">
						Who can attend WAC?
						</a>
						</h4>
					</div>
					<div id="collapseGeneralWho" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						The Keynote Address is open to the Toronto public; anybody can attend. The Conference Day, in contrast, can only be attended by registered delegates and faculty advisors.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#general" href="#collapseGeneralMedia">
						Who do we contact for media information?
						</a>
						</h4>
					</div>
					<div id="collapseGeneralMedia" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						For any information regarding media coverage please contact the Head of the Department of Registration and Media: <b>Emmanuel Wong (emmanuel.wong@ucc.on.ca)</b>. If you require any WAC branding for your work please feel free to use the following provided logos: <a href="misc_files/WAC_Logos.zip"><b>download here.</b></a>
						</div>
					</div>
				</div>
			</div>

			<div class="panel-group" id="reg" role="tablist" aria-multiselectable="true">
				<h2><a href="#reg">Registration</a></h2>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#reg" href="#collapseRegSchool">
						How can I register my school?
						</a>
						</h4>
					</div>
					<div id="collapseRegSchool" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						To attend the World Affairs Conference this year, the registration form and means of payment need to be submitted by <b>January 16th 2016</b>. The registration information package, as well as the forms required to register are available for download, <b><a href="misc_files/reg_2015.pdf">here</a></b> and <b><a href ="misc_files/reg_2015_form.pdf">here</a></b>.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#reg" href="#collapseRegStudent">
						Can I register as an individual student?
						</a>
						</h4>
					</div>
					<div id="collapseRegStudent" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						Students cannot register individually. We suggest students contact their principal, head of school, or itnerested teacher(s), and have them contact WAC.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#reg" href="#collapseRegDue">
						When is registration due?
						</a>
						</h4>
					</div>
					<div id="collapseRegDue" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						Registration is due by mail by <b>January 16th 2016</b>. We may not be able to accept late registrants, so please ensure your forms are submitted promptly.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#reg" href="#collapseRegFood">
						Can I inform WAC of special food accomodations?
						</a>
						</h4>
					</div>
					<div id="collapseRegFood" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						Delegates can notify WAC of their food (or otherwise) accomodations through the <a href="account.php">account system</a>.
						We can guarantee that there will be vegetarian food that is available during the conference lunch.
						Unfortunately, we are not certain that we can accomodate every dietary concern.  We suggest delegates with dietary concerns either bring a pack lunch, or go to a nearby restaurant.
						</div>
					</div>
				</div>
			</div>

			<div class="panel-group" id="keynote" role="tablist" aria-multiselectable="true">
				<h2><a href="#keynote">Keynote Address</a></h2>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#keynote" href="#collapseKeynoteWhat">
						What happens during the Keynote Address?
						</a>
						</h4>
					</div>
					<div id="collapseKeynoteWhat" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						During the <b><a href="keynote.php">Keynote Address</a></b>, a prominent member of the community (<a href="keynote.php">Nanor Balyozian this year</a>) will give an address on current affairs at Laidlaw Hall. The Keynote Address is open to the public, and will also feature a Q&A session. Coat Check will also be provided.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#keynote" href="#collapseKeynoteWhen">
						When does the Keynote Address start?
						</a>
						</h4>
					</div>
					<div id="collapseKeynoteWhen" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						You can find the full schedule for the keynote address <a href="schedule.php">here</a>.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#keynote" href="#collapseKeynoteWho">
						Who can attend the Keynote Address?
						</a>
						</h4>
					</div>
					<div id="collapseKeynoteWho" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						Anybody can attend the Keynote Address. We recommend that all delegates that attend the Conference Day also attend the Keynote Address.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#keynote" href="#collapseKeynoteSpeaker">
						Who is speaking at the Keynote Address?
						</a>
						</h4>
					</div>
					<div id="collapseKeynoteSpeaker" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						<a href="keynote.php">Nanor Balyozian</a> is speaking this year, a Syrian refugee discussing the refugee crisis from an often unheard but impactful perspective. A more detailed description of her and her address can be found <a href="keynote.php">here</a>.
						</div>
					</div>
				</div>
			</div>

			<div class="panel-group" id="conf" role="tablist" aria-multiselectable="true">
				<h2><a href="#conf">Conference Day</a></h2>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#conf" href="#collapseConfWhat">
						What happens during the Conference Day?
						</a>
						</h4>
					</div>
					<div id="collapseConfWhat" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						During the Conference Day, delegates will attend the <b><a href="opening.php">Opening Panel</a></b>, on the Future of the Internet.
						They will then proceed to attend three out of the six <b><a href="plenaries.php">plenaries</a></b> that they have been assigned to, with a lunch break in between.
						Finally, delegates will attend the <b><a href="closing.php">Closing Panel</a></b>, hosted by Sami Jo Small. A full schedule can be found <b><a href="construction.php">here</a></b>.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#conf" href="#collapseConfWhen">
						Is there a check in process?
						</a>
						</h4>
					</div>
					<div id="collapseConfWhen" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						School supervisors and their students are encouraged to arrive at or before 8AM for the registration check in process. Each student will receive their personal delegate package with their nametag and plenary assignments.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#conf" href="#collapseConfSchedule">
						What times do all of these events happen?
						</a>
						</h4>
					</div>
					<div id="collapseConfSchedule" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						The schedule for this year can be found <a href="schedule.php">here</a>. As well, one will be included in the delegate and faculty packages.
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab">
						<h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#conf" href="#collapseConfLunch">
						Will students be provided lunch?
						</a>
						</h4>
					</div>
					<div id="collapseConfLunch" class="panel-collapse collapse" role="tabpanel">
						<div class="panel-body">
						Lunch is provided to both student and faculty delegates free of charge on the day of the conference. A vegetarian option will be provided. Delegates are also free to bring a pack lunch or go to a restaurant to fit their dietary concerns.
						</div>
					</div>
				</div>
			</div>

			<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>
