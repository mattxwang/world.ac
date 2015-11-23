<?php
//Start the PHP session
session_start();

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
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
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
	.bg-bh{
		background-color:#36CC79;
	}
	.bg-ucc{
		background-color:#5E7794;
	}
	</style>
</head>

<body style="position:relative;">
	<?php include_once("tracking.php") ?>
	<?php include_once("navbar.php") ?>
	<h2 style="text-align:center;font-family:nexa; color:#ffffff;">Meet the WAC Team</h2>
	</br>
	<div id="about-us-carousel" class="carousel slide" data-ride="carousel" style ="height:50%;">
		<div class="carousel-inner" role="listbox">
			<div class="item active bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/matt.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Matthew Wang</b></span>
						</br>
						<span style="font-size:2.5vw">Web Design/Media</span>
						</br>
						Hi, I’m Matthew Wang! I’m part of this year’s media team, as well as the designer of this lovely website. Last year, I helped with web design, media, and tech: I’m pumped to do it all again this year! 
						</br>
						I’m excited to make WAC as awesome as it was last year. See you there!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/logan.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Logan Ye</b></span>
						</br>
						<span style="font-size:2.5vw">Conference Chair</span>
						</br>
						My name's Logan Ye and I'm the UCC Conference Chair for the World Affairs Conference this year. I direct the general vision of the conference with my counterparts from Branksome Hall. I also help the plenary, media and registration team complete their respective tasks.
						</br>
						See you at WAC!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-bh">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/naz.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Naz Gocek</b></span>
						</br>
						<span style="font-size:2.5vw">Conference Chair</span>
						</br>
						I'm Naz and I'm one of the Branksome Hall Conference Chairs for the World Affairs Conference this year. I manage the vision and direction of WAC with my Branksome counterpart Blaise and UCC counterpart Logan. I also direct Branksome's registration. 
						</br>
						Hope to see you at WAC!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-bh">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/blaise.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Blaise O'Malley</b></span>
						</br>
						<span style="font-size:2.5vw">Conference Chair</span>
						</br>
						I'm Blaise O'Malley, and I am super excited to be one of the Branksome Conference Chairs for the World Affairs Conference 2016. My role is to help plan the conference with the other Chairs, as well as assist with plenaries and communications.
						</br>
						Can't wait to see you there!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>

			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/jack.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b><a href = "http://jack.antinode.ca">Jack Sarick</a></b></span>
						</br>
						<span style="font-size:2.5vw">Web Design</span>
						</br>
						I’m Jack Sarick, a student currently enrolled in UCC. I’m the head of Robotics, Computer Science/Digital Media, and am ready to apply that experience to WAC.
						</br>
						I’m happy to be part of the team. See you there!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/nitish.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Nitish Dhingra</b></span>
						</br>
						<span style="font-size:2.5vw">Secretary/Treasurer</span>
						</br>
						Hi everyone, my name is Nitish and I’m extremely excited to be helping run this year’s World Affairs Conference. My role as secretary/treasurer surrounds helping make sure WAC runs as smoothly as possible and is enjoyable for all our delegates. 
						</br>
						I am looking forward to seeing you this February at UCC! 
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/ernest.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Ernest Leung</b></span>
						</br>
						<span style="font-size:2.5vw">Head of Operations</span>
						</br>
						Hey everyone! My name is Ernest Leung and I’m honoured to be able to serve on the World Affairs Conference executive this year. As Head of Operations, I work with all different teams to ensure that the logistics of WAC run smoothly and that everything goes according to plan the day of. 
						</br>
						I’m super excited for WAC this February! See you all there!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-1">
					</div>
					<div class = "col-md-3">
						<img src = "img/bio/headshots/emmanuel.png" style = "height:80%;"></img>
					</div>
					<div class = "col-md-1">
					</div>
					<div class = "col-md-6">
						<p>
						<span style="font-size:4vw"><b>Emmanuel Wong</b></span>
						</br>
						<span style="font-size:2.5vw">Head of Registration</span>
						</br>
						I'm Emmanuel Wong, head of the registration for WAC this year. In my role, I'll be preparing and releasing information packets about this years' conference.
						</br>
						I'm looking forward to seeing you all there!
						</p>
					</div>
					<div class = "col-md-1">
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/justin.png" class = "half_image"></img>
					</div>
					<div class = "col-md-8" style = "text-align:justify;">
						<p>
						<h2><b>Justin Lu</b></h2>
						<h3>Head of Security/Communications</h3>
						Hi everyone! My name is Justin Lu, and this year I will be your head of secruity and communications. Although this is my first year on the wac executive, I have been attending the conference since grade 9.
						</br>
						This year's conference will be fantastic. I hope you enjoy yourselves!
						</p>
					</div>
				</div>
			</div>

		</div>

		<a class="left carousel-control" href="#about-us-carousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#about-us-carousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>

	</div>
	</br>
	<div style="padding:35px;font-family:nexa; text-align:center; color:#ffffff;">
		<p>
		WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. 
		</br>
		This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.

		<h2>We'd Like to Thank:</h2>
		<h3>Last Year's Website Team</h3>
		Nick Elder, Derek Lam, Kinton Cheung
		</br>
		<h3>Website Consultants</h3>
		Aidan Harradence, Alex Roberts, Austin Felix, Camran Hansen, Evan Boeckh, John Mace, Kevin Olds, Matt Jackman, Zack Nathan
		</br>

		<h3>And to all of the other people who've made WAC awesome!</h3>
		</p>
	</div>
	</br>
	</br>
	<?php
	include_once("footer.php")
	?>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
</html>
