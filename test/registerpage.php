<?php require("register.php"); ?> 
<head>
	<link rel="icon" href="../../favicon.ico">

	<title>Register</title>

	<!-- Bootstrap core CSS -->
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">
</head>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="loginpage.php"><img src="images/boxIcon.png" style="height:100%;"/></a>
		</div>
		<div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<li><a href="loginpage.php">Login</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>
</div>

<body style="zoom: 1;">
		<div class="container">
			<form class="form-signin" action="register.php" method="post">
				<h2 class="form-signin-heading">Please Register</h2>

				<input type="text" id="username" class="form-control" placeholder="Username" name="username" required="" autofocus="">

				<input type="email" id="email" class="form-control" placeholder="user@email.com" name="email" required="" autofocus="">

				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">

				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Sign in</button>
				<div style="text-align: center;">
					<h3 class="form-signin-heading">Welcome To BOXY</h3>
					Welcome to the only social media platform around developing the important moments in <b>YOUR</b> life.
				</div>
			</form>
		</div>
	</body>