<?php require("login.php"); ?> 
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
	<div class="container" style = "vertical-align:middle">
		<h2>WAC 2016 Account Login</h2>
		<div class = "row">
			<div class = "col-md-6">
				<form class="form-signin" action="loginpage.php" method="post">
					<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
						<strong>Warning!</strong> Incorrect username/password combination. 
					</div>
					<label for="email" class="sr-only">Email</label>
					<input type="email" id="email" class="form-control" placeholder="email@user.com" name="email" required="" autofocus="">
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
					<button class="btn btn-lg btn-primary btn-block" id="submitbutton" type="submit" value="Login">Log in</button>
				</form>
			</div>
			<div class = "col-md-6" style = "text-align:justify">
			<p>
			Please use your email that you've registered for WAC 2016 with. 
			</br>
			</br>
			If you've forgotten your password, send us an <a href = "mailto:matthew.wang@ucc.on.ca">email! We'll see what we can do for you.
			</p>
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
</html>