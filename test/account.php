<?php require("register.php"); ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Name's Account</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
		.body{
			position:relative;
		}
	</style>
</head>

<?php include_once("navbar.php") ?>

<body style = "position:relative;" data-spy="scroll" data-target="#acc-navbar">
		<div class= "container">
			<div class = "row">
				<div class = "col-md-3 hidden-xs">
					<div id = "acc-navbar">
						<ul class="nav nav-pills nav-stacked" style = "position:fixed;">
							<li role="presentation" class = "active"><a href="#notif">Notifications</a></li>
							<li role="presentation"><a href="#info">Delegate Info</a></li>
							<li role="presentation"><a href="#settings">Account Settings</a></li>
						</ul>
					</div>
				</div>
				<div class = "col-md-9">
					<div id = "notif">
						<div class="alert alert-success" role="alert">You've been registered correctly!</div>
						<div class="alert alert-info" role="alert">We haven't assigned plenaries yet; check back soon!</div>
						<div class="alert alert-warning" role="alert">You haven't confirmed your email yet!</div>
						<div class="alert alert-danger" role="alert">Your payment method was declined!</div>

					</div>
					<div id = "info">
						info
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.

						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et interdum arcu. Praesent auctor nunc magna, non fermentum sem fermentum sed. Sed consectetur odio eu lorem sagittis laoreet. Maecenas elementum diam eu molestie tincidunt. Ut pharetra sodales placerat. Phasellus viverra ligula dui, sed aliquet turpis auctor elementum. Phasellus sed tincidunt risus. Ut malesuada quis nibh vel sodales. Proin ut fermentum diam. Nunc eu sodales augue, commodo cursus tellus. Sed molestie consectetur arcu tincidunt ultrices. Quisque nec ultricies leo.
				

					</div>
					<div id = "settings">
						<div class="well">
							<div class = "row">
								<div class = "col-md-8" style = "color:#000000;vertical-align:middle;">
									Your Email: template@ucc.on.ca
								</div>
								<div class = "col-md-4" style = "text-align:right;">
									<button type="button" class="btn btn-primary">Change Email</button>
								</div>
							</div>
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
		</div>
</body>