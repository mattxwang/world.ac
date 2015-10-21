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

<?php include_once("navbar.php")  ?>

<div style="font-family:Nexa; line-height:300%; color:#FFF; padding:0 10px 0 10px; padding-top:50px; position:relative">
	<div style="font-size:70px; line-height:120%">
	WELCOME TO THE 2016 <b>WORLD AFFAIRS CONFERENCE.</b>
	</div>
	<div style="padding:0 10px 0 10px; padding-top:100px; font-size:48px; text-align:right; position:relative"> WAC Starts in: <div id="timeLeft" style="padding-top:48px;">00 Days 00:00:00</div></div>
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
				return days + " Days " + hours + " Hours " + minutes + " Minutes and " + seconds + " Seconds";
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

<div style="font-family:nexa; color:#53b5b4;padding-top:80px">
	<div style="background-color:rgba(0,0,0,0.4); padding-left:30px; padding-right:30px; padding-bottom:70px; box-sizing:border-box;">
		<div style="font-weight:bold; font-size:70px;color:#53b5b4;">
			About JTEST
		</div>
		<div style="color:#FFFFFF;">
		The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 1000 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference.
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