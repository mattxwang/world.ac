<?php
//Start the PHP session
session_start();

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- || Page Head || -->

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
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
	</style>
</head>

<!-- FOR SOME REASON CONTAINERS SCREW UP THE CAROUSEL GOING FULLSCREEN -->
<body style="position:relative;">
	<?php include_once("tracking.php") ?>
	<?php include_once("navbar.php") ?>
	<div style="text-align:center; color:#ffffff;">
		<h2>Meet the WAC Team</h2>
		<p>
		WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. 
		</br>
		This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.
		</p>
	</div>
	</br>
	<div id="carousel-chair" class="carousel slide" data-ride="carousel" data-interval="5523">
		<div class="carousel-inner" role="listbox">
			<div class="item active bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/logan.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
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
			<div class="item bg-bh">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/naz.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Naz Gocek</b></h2>
						<h3>Conference Chair</h3>
						I'm Naz and I'm one of the Branksome Hall Conference Chairs for the World Affairs Conference this year. I manage the vision and direction of WAC with my Branksome counterpart Blaise and UCC counterpart Logan. I also direct Branksome's registration. 
						</br>
						Hope to see you at WAC!
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-bh">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/placeholder.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
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
		</div>
		<!--
		<a class="left carousel-control" href="#carousel-chair" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-chair" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		-->

	</div>

	<div id="carousel-web" class="carousel slide" data-ride="carousel" data-interval="8321">
		<div class="carousel-inner" role="listbox">
			<div class="item active bg-web">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/matt.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Matthew Wang</b></h2>
						<h3>Web Design/Media</h3>
						Hi, I’m Matthew Wang! I’m part of this year’s media team, as well as the designer of this lovely website. Last year, I helped with web design, media, and tech: I’m pumped to do it all again this year! 
						</br>
						I’m excited to make WAC as awesome as it was last year. See you there!
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-web">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/jack.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b><a href = "http://jack.antinode.ca">Jack Sarick</a></b></h2>
						<h3>Web Design</h3>
						I’m Jack Sarick, a student currently enrolled in UCC. I’m the head of Robotics, Computer Science/Digital Media, and am ready to apply that experience to WAC.
						</br>
						I’m happy to be part of the team. See you there!
						</p>
					</div>
				</div>
			</div>
		</div>
		<!--
		<a class="left carousel-control" href="#carousel-web" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-web" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		-->

	</div>

	<div id="carousel-exec" class="carousel slide" data-ride="carousel" data-interval="4192">
		<div class="carousel-inner" role="listbox">
			<div class="item active bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/nitish.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Nitish Dhingra</b></h2>
						<h3>Secretary/Treasurer</h3>
						Hi everyone, my name is Nitish and I’m extremely excited to be helping run this year’s World Affairs Conference. My role as secretary/treasurer surrounds helping make sure WAC runs as smoothly as possible and is enjoyable for all our delegates. 
						</br>
						I am looking forward to seeing you this February at UCC! 
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/ernest.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Ernest Leung</b></h2>
						<h3>Head of Operations</h3>
						Hey everyone! My name is Ernest Leung and I’m honoured to be able to serve on the World Affairs Conference executive this year. As Head of Operations, I work with all different teams to ensure that the logistics of WAC run smoothly and that everything goes according to plan the day of. 
						</br>
						I’m super excited for WAC this February! See you all there!
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-ucc">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/emmanuel.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Emmanuel Wong</b></h2>
						<h3>Head of Registration</h3>
						I'm Emmanuel Wong, head of the registration for WAC this year. In my role, I'll be preparing and releasing information packets about this years' conference.
						</br>
						I'm looking forward to seeing you all there!
						</p>
					</div>
				</div>
			</div>

		</div>
		<!--
		<a class="left carousel-control" href="#carousel-exec" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-exec" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		-->

	</div>

	<div id="carousel-plenary" class="carousel slide" data-ride="carousel" data-interval="2782">
		<div class="carousel-inner" role="listbox">
			<div class="item active bg-plenary">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/nitish.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>David Niddam-Dent</b></h2>
						<h3>Head of Plenary</h3>
						Hi everyone, my name is Nitish and I’m extremely excited to be helping run this year’s World Affairs Conference. My role as secretary/treasurer surrounds helping make sure WAC runs as smoothly as possible and is enjoyable for all our delegates. 
						</br>
						I am looking forward to seeing you this February at UCC! 
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-plenary">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/ernest.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Ernest Leung</b></h2>
						<h3>Head of Operations</h3>
						Hey everyone! My name is Ernest Leung and I’m honoured to be able to serve on the World Affairs Conference executive this year. As Head of Operations, I work with all different teams to ensure that the logistics of WAC run smoothly and that everything goes according to plan the day of. 
						</br>
						I’m super excited for WAC this February! See you all there!
						</p>
					</div>
				</div>
			</div>
			<div class="item bg-plenary">
				<div class = "row" style = "padding:5%;">
					<div class = "col-md-4" style = "text-align:right;">
						<img src = "img/bio/headshots/emmanuel.png" class="img-responsive"></img>
					</div>
					<div class = "col-md-8" style = "text-align:left;">
						<p>
						<h2><b>Emmanuel Wong</b></h2>
						<h3>Head of Registration</h3>
						I'm Emmanuel Wong, head of the registration for WAC this year. In my role, I'll be preparing and releasing information packets about this years' conference.
						</br>
						I'm looking forward to seeing you all there!
						</p>
					</div>
				</div>
			</div>

		</div>
		<!--
		<a class="left carousel-control" href="#carousel-plenary" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-plenary" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
		-->

	</div>




	<div style="padding:35px;text-align:center; color:#ffffff;">
		<p>
		Some other people also help make WAC awesome; while they aren't on the team this year, they definitely deserve some thanks.
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
