<?php require("common.php"); ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>WAC 2016 Account Registration</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	
</head>
<?php include_once("navbar.php") ?>

<body>
		<div class="container">
			<div style = "text-align:left;">
				<h2>WAC 2016 Account Registration</h2>
			</div>
			<div class ="row">
				<div class = "col-md-6">
					<form class="form-signin" action="register.php" method="post">
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
						</br>
						<div class = "row">
							<div class = "col-md-12">
								<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
							</div>
						</div>
						</br>
						Already registered? Log in <a href ="login_page.php">here</a>.
					</form>
				</div>
				<div class = "col-md-6" style = "text-align: justify;">
					<h3>Why register for a WAC 2016 account?</h3>
					<p>
					The WAC 2016 account does a few things for you! First of all, it allows us to check whether or not you've been correctly registered for WAC!
					</br>
					It also lets you check up on your plenaries, whether or not your payment has been accepted, and to make sure that all of your delegate information is correct.
					</br>
					You can only sign up for a WAC 2016 account if you have already been registered as a delegate. If you're getting a registration error, feel free to <a href ="contact_us.php">contact us</a>.
					</p>
				</div>
			</div>
			<?php
			include_once("footer.php")
			?>
			<script src="js/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</div>
</body>