<?php
//Start the PHP session
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="World Affairs Conference">
		<title>Closing Panel - World Affairs Conference</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/base.css" />
		<style>
		p{
			text-align:justify;
		}
		</style>
	</head>

	<body style="position:relative;">
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>

		<div class = "container">
			<div style = "text-align:center">
				<h2>Closing Panel</h2>
			</div>
			<div style = "text-align:justify">
				<p>
				The Closing Session of the World Affairs Conference has featured a wide array of prominent speakers. 
				In the past, Closing has had discussions ranging health ethics to human rights. This year’s speaker 
				is Sami Jo Small, an Olympic Champion hockey player and motivational speaker. Her presentation will 
				leave students inspired and will be an enlightening, engaging, and entertaining finale. 
				</p>
				<div style = "text-align:center">
					<h1>Sami Jo Small</h1>
					<img src="img/bio/speakers/sj-small.png" height="256px"></img>
				</div>
				<p>
				Growing up on the outdoor hockey rinks in Winnipeg, Manitoba, Sami Jo Small’s triumphant sports career 
				is marked with determination, dedication, and courage. Her passion for hockey was honed in the boys’ 
				minor hockey system. As the only girl, Sami worked hard to prove that she belonged on the team. She 
				attended Stanford University on a Track and Field Scholarship and graduated with a degree in mechanical 
				engineering. Sami was an invaluable member of Stanford Men’s Hockey team for five years.
				</br>
				She dreamt of one day stepping onto the podium at the Olympic Winter Games, and that dream became reality
				in 1998 when she was named to Canada’s Olympic hockey team. Sami is a three time Olympian and has been a
				member of two Olympic Gold Medal winning teams. In addition, she has won five World Championships and was
				twice named the Championship’s Most Valuable Player.
				</br>
				Whether she is in the dressing room, speaking as a sports ambassador, or coaching students at the hockey 
				school she runs in four provinces, Small shares an inspiring message of gratitude, perseverance, and
				finding success in reaching one’s personal goals.
				</p>
			</div>

			<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>