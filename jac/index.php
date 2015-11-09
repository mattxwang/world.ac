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
		<!-- My CSS/JS -->
		<script src="countdown.js"></script>
		<style type="text/css">
			body {
				color: white;
			}

			.page-container {
				height: 150%;
				position: relative;
			}

			.main-jumbo {
				position: relative;
				color: #FBFBFB;
				background-color: blue;
				text-align: left;
				font-size: 5vw;
				padding: 2%;
				display: inline-block;
			}

			.countdown {
				float: right;
				position: relative;
				text-align: right;
				font-size: 4vw;
				width: 50%
			}

			.media-pane {
				float: left;
				position: relative;
				text-align: left;
				font-size: 2vw;
				width: 50%
			}

			.main-info {
				position:absolute;
				bottom:0;
				background-color: red;
				padding: 2%;
				height: 50%;
			}

			.about-div {
				float: left;
				position: relative;
				text-align: left;
				font-size: 1vw;
				width: 50%;
			}
		</style>
	</head>

	<!-- || Main Page Content || -->
	<body style="font-family:Nexa;">
		<?php include_once("tracking.php")  ?>
		<?php include_once("navbar.php")  ?>

		<!-- Here thar be magik! -->
		<div class="page-container">
			<div class="main-jumbo">
				WELCOME TO THE 2016</br>
				<b>WORLD AFFAIRS CONFERENCE.</b>
				<!-- countdown bit -->
				<div class="countdown">
					WAC Starts in: <div id="timeLeft"></div>
					<script type="text/javascript">
						// So easy to change the date, a WAC exec can do it!
						var deadLine = 'December 25 2015';
						window.setInterval(function(){
								$("#timeLeft").html(getTimeRemaining(deadLine));
						}, 1000);
					</script>
				</div>

				<!-- Put whatever in this div -->
				<div class="media-pane">
					<img style="max-width:100%; max-height:100%;" src="earth.png">
				</div>

			</div>

			<div class="main-info">
				<div class="about-div">
					The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference.
				</div>
			</div>
		</div>

		<?php include_once("footer.php") ?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>