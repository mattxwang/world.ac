<?php require("register.php"); ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>WAC 2016 Account Registration</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<?php include_once("navbar.php") ?>

<body style="zoom: 1;">
		<div class="container">
			<div style = "text-align:center;">
				<h2>Please Register</h2>
				<form class="form-signin" action="register.php" method="post">
					<div class = "row">
						<div class = "col-md-6">
							<input type="text" id="firstname" class="form-control" placeholder="First Name" name="firstname" required="" autofocus="">
						</div>
						<div class = "col-md-6">
							<input type="text" id="lastname" class="form-control" placeholder="Last Name" name="lastname" required="" autofocus="">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-12">
							<input type="email" id="email" class="form-control" placeholder="user@email.com" name="email" required="" autofocus="">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-12">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-12">
							<input type="password" id="password2" name="password2" class="form-control" placeholder="Re-Type Password" required="">
						</div>
					</div>
					<div class = "row">
						<div class = "col-md-12">
							<button style = "padding:25%" class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
						</div>
					</div>
				</form>
				<!--
				<form class="form-signin" action="register.php" method="post">
					<h2 class="form-signin-heading">Please Register</h2>

					<input style="width:50%;" type="text" id="firstname" class="form-control" placeholder="First Name" name="firstname" required="" autofocus="">
					<input style="width:50%;" type="text" id="lastname" class="form-control" placeholder="Last Name" name="lastname" required="" autofocus="">

					<input type="email" id="email" class="form-control" placeholder="user@email.com" name="email" required="" autofocus="">

					<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
					<input type="password" id="password2" name="password2" class="form-control" placeholder="Re-Type Password" required="">

					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
				</form>
				-->
			</div>
			<div style = "text-align: justify;">
				<h3 class="form-signin-heading">Why register for a WAC 2016 account?</h3>
				<p>
				The WAC 2016 account does a few things for you! First of all, it allows us to check whether or not you've been correctly registered for WAC!
				</br>
				It also lets you check up on your plenaries, whether or not your payment has been accepted, and to make sure that all of your delegate information is correct.
				</br>
				You can only sign up for a WAC 2016 account if you have already been registered as a delegate. If you're getting a registration error, feel free to <a href ="contact_us.php">contact us</a>.
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