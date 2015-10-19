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
	<title>Meet the WAC Team</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
	.bg-web{
		background-color:#DB0C09;
	}
	.bg-chairs{
		background-color:#2A99D6;
	}
	.bg-heads{
		background-color:#36CC79;
	}
	.bg-uccblue{
		background-color:#5E7794;
	}
	.carousel-control.left, .carousel-control.right {
    background-image: none
	}
	</style>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<?php include_once("tracking.php") ?>
<?php include_once("navbar.php") ?>


<!-- Content -->
<div style="text-align:center;font-family:nexa; color:#ffffff;">
<h2>Meet the WAC Team</h2>
</div>
</br>
<div align="middle">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	        <div class="carousel-mod carousel-inner" role="listbox">
	          <div class="carousel-mod item active bg-uccblue">
	          	<img src="/img/bio/mwang.png" alt="Matthew Wang">
	          </div>
	          <div class="carousel-mod item bg-uccblue">
	            <img src="/img/bio/jsarick.png" alt="Jack Sarick">
	          </div>
	          <div class="carousel-mod item">
	            <img src="/img/bio/mwang.png" alt="Third slide">
	          </div>
	          <div class="carousel-mod item">
	            <img src="/img/bio/jsarick.png" alt="Fourth slide">
	          </div>
	        </div>
	        
	        <a class="carousel-mod left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-mod right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	        
	      </div>
	  </div>
</br>
<div style="padding:35px; text-align:center; color:#ffffff;">
WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. Our goal is to provide over eight hundred students with current affairs knowledge, and a positive experience.
</br>
This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.

<h2>We'd Like to Thank:</h2>
<h3>Last Year's Website Team</h3>
Nick Elder, Derek Lam, Kinton Cheung
</br>
<h3>Website Consultants</h3>
Aidan Harradence, Alex Roberts, Camran Hansen, Evan Boeckh, John Mace, Kevin Olds, Matt Jackman, Zack Nathan


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