<?php require("login.php"); ?> 
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="World Affairs Conference">
		<title>WAC 2016 Account Registration</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/base.css" />
		<script src="js/google_analytics.js"></script>
	</head>
	<?php 
		require("common.php");
		 
		if(isset($_SESSION['user'])) 
		{ 
			header("Location: account.php"); 
			die("Redirecting to account.php"); 
		}  
	?> 

	<body>
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>
		<div class="container" style = "vertical-align:middle">
			<h2>WAC 2016 Account Login</h2>
			<div class = "row">
				<div class = "col-md-6">
					<form class="form-signin" action="login_page.php" method="post">
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
					If you haven't registered for WAC, <a href = "register_page.php">register here</a>.
					</br>
					</br>
					If you've forgotten your password, send us an <a href = "mailto:matthew.wang@ucc.on.ca">email</a>! We'll see what we can do for you.
					</p>
				</div>
			</div>

			<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>