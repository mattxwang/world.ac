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
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	p{
		text-align:justify;
	}
	</style>
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container-fluid">
<div style = "text-align:center">
	<h2>Closing Panel</h2>
	<h1>Sample Speaker</h1>
	<img src="img/avatar.png"></img>
</div>
<div style = "text-align:justify">
	<p>
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.
	</p>
	<p>
	The Closing Panel is at 60:09 PM.
	</p>
</div>


<?php
include_once("footer.php")
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>