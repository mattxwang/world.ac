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
	.well{
		color: black;
	}
	.col-md-4{
		text-align: center;
	}
	.col-md-3{
		text-align: center;
	}
	p{
		text-align: justify;
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
				</a>
				<div class="collapse" id="collapseLogan">
					<p>
					<h2><b>Logan Ye</b></h2>
					<h3>Conference Chair</h3>
					My name's Logan Ye and I'm the UCC Conference Chair for the World Affairs Conference. I direct the vision of the conference with my counterparts from Branksome Hall. I also help the plenary, media and registration team complete their respective tasks.
					</br>
					See you at WAC!
					</p>
				</div>
			</div>
			<div class = "col-md-4">

				<a href ="#collapseNaz" data-toggle="collapse"><img src = "img/bio/headshots/naz.png" style = "height:50%"></img>

				</a>
				<div class="collapse" id="collapseNaz">
					<p>
					<h2><b>Naz Gocek</b></h2>
					<h3>Conference Chair</h3>
					I'm Naz and I'm one of the Branksome Hall Conference Chairs for the World Affairs Conference this year. I manage the vision and direction of WAC with my Branksome counterpart Blaise and UCC counterpart Logan. I also direct Branksome's registration. 
					</br>
					Hope to see you at WAC!
					</p>
				</div>
			</div>
			<div class = "col-md-4">

				<a href ="#collapseBlaise" data-toggle="collapse"><img src = "img/bio/headshots/blaise.png" style = "height:50%"></img>
				</a>
				<div class="collapse" id="collapseBlaise">
					<p>
					<h2><b>Blaise O'Malley</b></h2>
					<h3>Conference Chair</h3>
					I'm Blaise O'Malley, and I am super excited to be one of the Branksome Conference Chairs for the World Affairs Conference 2016. My role is to help plan the conference with the other Chairs, as well as assist with plenaries and communications.
					</br>
					Can't wait to see you there!
					</p>
				</div>
			</div>

		</div>
		<div class = "row">
			<div class = "col-md-3">

				<a href ="#collapseNikhil" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png" style = "height:50%"></img>
			
				</a>
				<div class="collapse" id="collapseNikhil">
					<p>
					<h2><b>Nikhil Kassum</b></h2>
					<h3>Head of Programs</h3>
					My name is Nikhil Kassum and I am the UCC Programs Chair for the World Affairs Conference 2016. I am in charge of the academic content of the conference with my counterparts from Branksome Hall as we oversee all plenary and panel sessions. 
					</br>
					I'm really looking forward being a part of WAC 2016 and hope that all of you really enjoy it. 
					</p>
				</div>
			</div>
			<div class = "col-md-3">

				<a href ="#collapseErnest" data-toggle="collapse"><img src = "img/bio/headshots/ernest.png" style = "height:50%"></img>

				</a>
				<div class="collapse" id="collapseErnest">
					<p>
					<h2><b>Ernest Leung</b></h2>
					<h3>Head of Operations</h3>
					Hey everyone! My name is Ernest Leung and I’m honoured to be able to serve on the World Affairs Conference executive this year. As Head of Operations, I work with all different teams to ensure that the logistics of WAC run smoothly and that everything goes according to plan the day of. 
					</br>
					I’m super excited for WAC this February! See you all there!
					</p>
				</div>
			</div>
			<div class = "col-md-3">

				<a href ="#collapseEmmanuel" data-toggle="collapse"><img src = "img/bio/headshots/emmanuel.png" style = "height:50%"></img>
				</a>
				<div class="collapse" id="collapseEmmanuel">
					<p>
					<h2><b>Emmanuel Wong</b></h2>
					<h3>Head of Registration</h3>
					I'm Emmanuel Wong, head of the registration for WAC this year. In my role, I'll be preparing and releasing information packets about this years' conference.
					</br>
					I'm looking forward to seeing you all there!
					</p>
				</div>
			</div>
			<div class = "col-md-3">

				<a href ="#collapseJustin" data-toggle="collapse"><img src = "img/bio/headshots/justin.png" style = "height:50%"></img>

				</a>
				<div class="collapse" id="collapseJustin">
					<p>
					<h2><b>Justin Lu</b></h2>
					<h3>Head of Security /Communications</h3>
					Hi everyone! My name is Justin Lu, and this year I will be your head of secruity and communications. Although this is my first year on the wac executive, I have been attending the conference since grade 9.
					</br>
					This year's conference will be fantastic. I hope you enjoy yourselves!
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
