<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");

/* the literal worst tracking system in the history of like ever
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
*/
?>

<!DOCTYPE html>
<html>
	<!-- || Page Head || -->
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>World Affairs Conference - Home</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/countdown.js"></script>
	<style>
		.body {
    		background-image: url("img/stars_tam");
    		background-image: url("img/earth_moon");
		}
	</style>
</head>

<body>
<?php include_once("tracking.php")  ?>

<?php
include_once("navbar.php")  ?>

<div style="font-family:Nexa; line-height:80%; color:#FFF; padding:4%; padding-top:5%; position:relative">
	<div style="font-size:5vw;">
	WELCOME TO THE 2016 <div style="font-weight:bold; padding-top: 5vw;">WORLD AFFAIRS CONFERENCE.</div>
	</div>
	<div style="padding:0 10px 0 10px; padding-top:5vw; font-size:3vw; text-align:right"> The Conference Starts On: <div id="timeLeft" style="padding-top:3vw;">00 Days 00 Hours 00 Minutes and 00 Seconds</div></div>
	<script type="text/javascript">
		var deadLine = 1454353200;
		window.setInterval(function(){
  			// console.log(getTimeRemaining(deadLine));
  			$("#timeLeft").html(getTimeRemaining(deadLine));
		}, 1000);
	</script>

</div>
<div class = "row" style = "padding:4%;background-color:rgba(0,0,0,0.4);">
	<div class = "col-md-8">
		<div style="font-family:nexa;text-align:left; color:#53b5b4;">
			<div style="box-sizing:border-box;">
				<div style="font-weight:bold; font-size:30px;color:#53b5b4;">
					About WAC
				</div>
				<div class = "text-justify" style="color:#FFFFFF;">
				The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 1000 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference. 
				</div>
			</div>
		</div>
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
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>