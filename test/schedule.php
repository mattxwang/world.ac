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
		<title>Schedule - World Affairs Conference</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="css/base.css" />
		<style>
			.filled{

			}
			.popover{
				color:black;
			}
			.plen{
				background-color:#5E7794;
			}
			.reg{
				background-color:#809C29;
			}
			.panel{
				background-color:#DC8944;
			}
			.lunch{
				background-color:#C61B26;
			}
		</style>
	</head>

	<body style="position:relative;">

		<?php include_once("navbar.php") ?>

		<div class = "container">
			<h1 style="text-align: center;">Conference Day Schedule</h1>
			<h6 style="text-align: center;">Hover over a block to learn more</h6>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<th></th>
						<th>8:30-9:00</th>
						<th>9:00-10:15</th>
						<th>10:30-11:30</th>
						<th>11:35-12:35</th>
						<th>12:35-1:20</th>
						<th>1:20=2:20</th>
						<th>2:25-3:25</th>
					</tr>
					<tr>
						<td><b>CC3</b></td>
						<td></td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td></td>
					</tr>
					<tr>
						<td><b>David Chu Theatre</b></td>
						<td></td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Foyer</b></td>
						<td class="reg">REG</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Laidlaw Hall</b></td>
						<td></td>
						<td class="panel">OPENING</td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="panel">CLOSING</td>
					</tr>
					<tr>
						<td><b>Lecture Theatre</b></td>
						<td></td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Lett Gym</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">LUNCH</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Library</b></td>
						<td></td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Old Gym</b></td>
						<td></td>
						<td></td>
						<td class="plen">PLEN</td>
						<td class="plen">PLEN</td>
						<td></td>
						<td class="plen">PLEN</td>
						<td></td>
					</tr>
					<tr>
						<td><b>Student Center</b></td>
						<td class="reg">REG</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><b>Upper Dining Hall</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">LUNCH</td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<a data-toggle="popover" container="body" placement="auto top" title="Keynote Address" data-content='The Keynote Address will feature this awesome speaker! <a href="#">swag</a>' html="true">Dismissible popover</a>
	



			<?php include_once("footer.php") ?>
			
		 	<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
			<script>
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			</script>
		</div>
	</body>
</html>