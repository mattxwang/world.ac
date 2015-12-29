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
		</style>
	</head>

	<body style="position:relative;">

		<?php include_once("navbar.php") ?>

		<div class = "container">
			
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<th></th>
						<th>RECEPTION</th>
						<th>KEYNOTE ADDRESS</th>
						<th>8:30-9:00</th>
						<th>9:00-10:15</th>
						<th>10:15-10:30</th>
						<th>10:30-11:30</th>
						<th>11:35-12:35</th>
						<th>12:35-1:20</th>
						<th>1:20=2:20</th>
						<th>2:25-3:25</th>
					</tr>
					<tr>
						<td><b>Laidlaw Hall</b></td>
						<td class = "filled"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Eve</td>
						<td>Jackson</td>
						<td>94</td>
					</tr>
					<tr>
						<td>John</td>
						<td>Doe</td>
						<td>80</td>
					</tr>
				</table>
			</div>
			<a data-toggle="popover" container: 'table' html="true" title="Keynote Address" data-content="The Keynote Address will feature this awesome speaker! Check it out at <a href='#'></a>">Dismissible popover</a>
			<div style="color:black;">The Keynote Address will feature this awesome speaker! Check it out at <a href="#"></a></div>



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