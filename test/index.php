<?php
//Start the PHP session
session_start();

//Calls to base hit counter
include_once("hitcounter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>

<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Home - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/countdown.js"></script>
</head>

<body class = "bg-stars bg-earth">
	<?php include_once("navbar.php")  ?>

	<div style="line-height:80%; padding:4%; position:relative">
		<h1>WELCOME TO THE 2016 </br><b>WORLD AFFAIRS CONFERENCE.</b><h1>
		<div style="text-align:right"> <h2>The Conference Starts In:</h2><div id="timeLeft"><h3></h3></div></div>
		<script type="text/javascript">
			var deadLine = "2/1/2016";
			window.setInterval(function(){
				// console.log(getTimeRemaining(deadLine));
				$("#timeLeft").html(getTimeRemaining(deadLine));
			}, 1000);
		</script>

	</div>
	<div class = "row" style = "padding:4%;background-color:rgba(0,0,0,0.4);">
		<div class = "col-md-8">
					<h2 style = "color:#53b5b4;"><b>About WAC</b></h2>
					<p>
					The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 1000 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference. 
					</p>
		</div>
		<div class = "col-md-4">
			<div class="embed-responsive embed-responsive-4by3">
			<iframe class = "embed-responsive-item" style ="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.9638959151!2d-79.40659468535445!3d43.69051397912007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b33684057775d%3A0x3dd2a9840eeeced9!2sUpper+Canada+College!5e0!3m2!1sen!2sca!4v1445541610829"></iframe>
			</div>
		</div>
	</div>
	<?php
	include_once("footer.php")
	?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>