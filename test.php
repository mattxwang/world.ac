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
	<title>Home</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	if (!window.jQuery) {
	    document.write('<script src="js/jquery.js"><\/script>');
	}
	</script>
	<script type="text/javascript" src="js/easing.js"></script>
</head>

<!-- || Main Page Content || -->
<body>
<?php include_once("tracking.php")  ?>

<div id="bg_stars"><div></div></div><div id="bg_earth"></div>

<?php
include_once("navbar.php")  ?>

<div style="font-family:Nexa; line-height:80%; color:#FFF; margin:0 10px 0 10px; margin-top:50px; position:relative">
	<div style="font-size:70px;">
	WELCOME TO THE 2016 
	</br>
	<div style="font-weight:bold; margin-top:70px;">WORLD AFFAIRS CONFERENCE.</div>
	</div>
	<div style="margin:50px; font-size:48px; text-align:right"> WAC Starts in: <div id="timeLeft" style="48px">00 Days 00:00:00</div></div>
	<script type="text/javascript">
		// I tried to make it as simple as possible
		var deadLine = 'December 25 2015';

		function getTimeRemaining(endtime){
			var t = Date.parse(endtime) - Date.parse(new Date());
			var seconds = Math.floor( (t/1000) % 60 );
			var minutes = Math.floor( (t/1000/60) % 60 );
			var hours = Math.floor( (t/(1000*60*60)) % 24 );
			var days = Math.floor( t/(1000*60*60*24) );
			// return {
			// 	'total': t,
			// 	'days': days,
			// 	'hours': hours,
			// 	'minutes': minutes,
			// 	'seconds': seconds
			// };

			if (t > 0){
				return days + " Days " + hours + ":" + minutes + ":" + seconds;
			}
			else {
				return "Worlds Affairs Conference is in motion!"
			}
		}

		window.setInterval(function(){
  			// console.log(getTimeRemaining(deadLine));
  			$("#timeLeft").html(getTimeRemaining(deadLine));
		}, 1000);
	</script>

</div>

<div style="font-family:nexa;text-align:left; color:#53b5b4;">
	<div style="background-color:rgba(0,0,0,0.4); padding-left:30px; padding-right:30px; padding-bottom:70px; box-sizing:border-box;">
		<div style="font-weight:bold; font-size:70px;color:#53b5b4;">
			About WAC
		</div>
		</br>
		<div style="color:#FFFFFF;">
		The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference.
		</div>
	</div>

</div>
<!--
<div style="position:absolute; top:100%; left:0px; width:100%; " id="second">
	<div style="background-color:rgba(0,0,0,0.4); padding-left:30px; padding-right:30px; padding-bottom:70px; box-sizing:border-box;">
		<table><tr>
		<td style="width:50%; padding:30px 0 30px 0; box-sizing:inherit;">
			<div style="text-align:left; color:#53b5b4; font-family:nexa; font-size:70px; font-weight:bold;">
				ABOUT WAC
			</div>
			
			<div style="text-align:justify; color:#FFF; line-height:180%; font-size:15px; font-weight:300;">The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference. </div>
			</br>
			<a href="https://en.wikipedia.org/wiki/World_Affairs_Conference" target="_blank">
				<button type="button" class="btn coloured-button">Learn more about our history</button>
			</a>
		</td>
		<td style="width:10%; box-sizing:inherit;"></td>
		<td style="width:40%; text-align:center; box-sizing:inherit;">
			<span style="position:relative;">
				<iframe width='270px' height='188px' frameBorder='0' style="position:absolute; top:100px; left:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.963709333185!2d-79.40659468418339!3d43.690517858034156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b33684057775d%3A0x3dd2a9840eeeced9!2sUpper+Canada+College!5e0!3m2!1sen!2sca!4v1444665337883"></iframe>
				<img src="img/destination.png" style="margin:0 auto;" />
			</span>
		</td></tr></table>
	</div>
-->
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