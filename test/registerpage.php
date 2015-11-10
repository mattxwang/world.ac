<?php require("register.php"); ?> 
<head>
	<title>Register</title>

	<!-- Bootstrap core CSS -->
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
</head>

<?php include_once("navbar.php") ?>

<body style="zoom: 1;">
		<div class="container">
			<form class="form-signin" action="register.php" method="post">
				<h2 class="form-signin-heading">Please Register</h2>

				<input style="width:50%;" type="text" id="firstname" class="form-control" placeholder="First Name" name="firstname" required="" autofocus="">
				<input style="width:50%;" type="text" id="lastname" class="form-control" placeholder="Last Name" name="lastname" required="" autofocus="">

				<input type="email" id="email" class="form-control" placeholder="user@email.com" name="email" required="" autofocus="">

				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">

				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
				<div style="text-align: center;">
					<h3 class="form-signin-heading">Welcome To BOXY</h3>
					Welcome to the only social media platform around developing the important moments in <b>YOUR</b> life.
				</div>
			</form>
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