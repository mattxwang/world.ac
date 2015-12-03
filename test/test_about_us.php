<?php
//Start the PHP session
session_start();

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- Conference Chair: Logan Ye
Secretary/Treasurer: Nitish Dhingra
Head of Programs: Nikhil Kassum
Head of Operations/Facilities: Ernest Leung (with Nikhil Kassum assisting)
Registration/Media Head: Emmanuel Wong
Registration/Media Team: Philip Nicoletti, Karman Cheema, Rob Dean, Scotty Andrade
Plenary Heads: Matthew Jagdeo, Simon Osak, Emerson Braithwaite, Alex Quinn, Komahan Paramaanantam, Miles Hoaken
Head of Morning/Closing & Keynote: Joseph Noss
Morning/Closing Team: William Lloyd, David Niddam-Dent
Head of Communications and Head of Security: Justin Lu-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Meet the WAC Team - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	.bg-bh{
		background-color:#809C29;
	}
	.bg-ucc{
		background-color:#5E7794;
	}
	.bg-web{
		background-color:#C61B26;
	}
	.bg-plenary{
		background-color:#DC8944;
	}
	p{
		text-align: justify;
	}
	.well{
		color: black;
	}

	</style>
</head>

<!-- FOR SOME REASON CONTAINERS SCREW UP THE CAROUSEL GOING FULLSCREEN -->
<body style="position:relative;">
	<?php include_once("navbar.php") ?>
	<div class = "container">
		<div style="text-align:center;">
			<h2>Meet the WAC Team</h2>
			<p>
			WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. 
			</br>
			This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.
			</p>
		</div>
		</br>

		<div class = "row">
			<div class = "col-md-4">

				<a href ="#collapseLogan" data-toggle="collapse"><img src = "img/bio/headshots/logan.png" style = "height:50%"></img>
				<!--
				<h2><b>Logan Ye</b></h2>
				<h3>Conference Chair</h3>
				-->
				</a>
				<div class="collapse" id="collapseLogan">
					<p>
					<h2><b>Logan Ye</b></h2>
					<h3>Conference Chair</h3>
					My name's Logan Ye and I'm the UCC Conference Chair for the World Affairs Conference this year. I direct the general vision of the conference with my counterparts from Branksome Hall. I also help the plenary, media and registration team complete their respective tasks.
					</br>
					See you at WAC!
					</p>
				</div>
			</div>

		</div>



		<div style="padding:35px;text-align:center;">
			
			Some other people also help make WAC awesome; while they aren't on the team this year, they definitely deserve some thanks.
			<h2>We'd Like to Thank:</h2>
			<p>
			<h3>Last Year's Website Team</h3>
			Nick Elder, Derek Lam, Kinton Cheung
			<h3>The Media Team</h3>
			Matthew Wang, Tyler Tam
			<h3>Website Consultants</h3>
			Aidan Harradence, Alex Roberts, Austin Felix, Camran Hansen, Evan Boeckh, John Mace, Kevin Olds, Matt Jackman, Zack Nathan

			<h3>And to all of the other people who've made WAC awesome!</h3>
			</p>
		</div>
		<?php
		include_once("footer.php")
		?>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>
