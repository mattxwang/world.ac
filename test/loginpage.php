<?php require("register.php"); ?> 
<!-- Bootstrap core CSS -->
<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="http://getbootstrap.com/examples/signin/signin.css" rel="stylesheet">

<title>Login</title>

<!-- Nav bar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="login.php"><img src="images/boxIcon.png" style="height:100%;"/></a>
		</div>
		<div class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<li><a href="register.php">Register</a></li>
		  </ul>
		</div><!--/.nav-collapse -->
	  </div>
	</div>
</div>
	<body style="zoom: 1;">
		<div class="container">
			<form class="form-signin" action="login.php" method="post">
				<h2 class="form-signin-heading">Please Sign In</h2>
				<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
					<strong>Warning!</strong> Incorrect username/password
				</div>
				<label for="username" class="sr-only">Username</label>
				<input type="text" id="username" class="form-control" placeholder="Username" name="username" required="" autofocus="">
				<label for="inputPassword" class="sr-only">Password</label>
				<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
				<button class="btn btn-lg btn-primary btn-block" id="submitbutton" type="submit" value="Login">Sign in</button>
				<div style="text-align: center;">
					<h3 class="form-signin-heading">Welcome To WAC</h3>
					Jack SUX at design
				</div>
			</form>
		</div>
	</body>
</html>