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
	<title>Page Under Construction</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body style="position:relative;">
<?php
include_once('navbar.php');
?>

<div style="margin:50px;"> WAC <div id="timeLeft"></div></div>
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
				return days + " Days " + hours + " Hours " + minutes + " Minutes " + seconds + " Seconds until World Affairs Conference starts!";
			}
			else {
				return "World Affairs Conference 2016 is in motion!"
			}
		}

		window.setInterval(function(){
  			// console.log(getTimeRemaining(deadLine));
  			$("#timeLeft").html(getTimeRemaining(deadLine));
		}, 1000);
	</script>
<?php
include_once("footer.php");
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>