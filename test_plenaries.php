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
	<title>Meet the WAC Team</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	.img{
		vertical-align: text-top;
	}
	</style>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<?php include_once("tracking.php") ?>
<?php include_once("navbar.php") ?>

<div class ="container-fluid">
<div style="text-align:center">
	<h1>Plenaries at WAC</h1>
	<p>Plenaries at WAC are really cool. 
	</p>
</div>
<div>
	<ul class="nav nav-tabs nav-justified" role="tablist">
	<li role="presentation" class="active"><a href="#plenary1" aria-controls="plenary1" role="tab" data-toggle="tab">Plenary Heading</a></li>
	<li role="presentation"><a href="#plenary2" aria-controls="plenary2" role="tab" data-toggle="tab">Other Plenary Heading</a></li>
	<li role="presentation"><a href="#plenary3" aria-controls="plenary3" role="tab" data-toggle="tab">Random Plenary Heading</a></li>
	<li role="presentation"><a href="#plenary4" aria-controls="plenary4" role="tab" data-toggle="tab">Plenary Name</a></li>
	<li role="presentation"><a href="#plenary5" aria-controls="plenary5" role="tab" data-toggle="tab">Plenary Name</a></li>
	<li role="presentation"><a href="#plenary6" aria-controls="plenary6" role="tab" data-toggle="tab">Plenary Name</a></li>
	</ul>

	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="plenary1">
			<h2>Plenary Heading</h2>
				<p> 
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.
				</p>
				<div class = "row">
					<div class = "col-md-6">
					<h4>Sample Speaker</h4>
					<img src="img/avatar.png" width = "10%"></img>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.
					</p>
					</div>
					<div class = "col-md-6">
					<h4>Sample Speaker</h4>
					<img src="img/avatar.png" width = "10%"></img>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.
					</p>
					</div>

				</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="plenary2">
		...
		</div>
		<div role="tabpanel" class="tab-pane" id="plenary3">
		...
		</div>
		<div role="tabpanel" class="tab-pane" id="plenary4">
		...
		</div>
		<div role="tabpanel" class="tab-pane" id="plenary5">
		...
		</div>
		<div role="tabpanel" class="tab-pane" id="plenary6">
		...
		</div>

	</div>
</div>

</div>

<?php
include_once("footer.php")
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>