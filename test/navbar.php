<!-- underline code
<span style="position:absolute; bottom:-1px; left:0px; width:100%; background-color:#53b5b4; height:2px; opacity:1;" class="hidden-xs"></span>
-->
<?php 
	// You'll need these
	require("login.php"); 
	require("common.php");
?>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-nav" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-nav">
			<ul class="nav navbar-nav">
				<li><a href="index.php">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration Information<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="construction.php">Registration Package</a></li>
						<li><a href="construction.php">How to Register</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference Information <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="keynote.php">Keynote Address</a></li>
						<li><a href="construction.php">Morning Panel</a></li>
						<li><a href="construction.php">Plenaries</a></li>
						<li><a href="construction.php">Closing Panel</a></li>
						<li><a href="construction.php">Schedule</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About WAC <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="about_us.php">Meet the Team</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
					</ul>
				</li>
			</ul>
			
			<ul class = "nav navbar-nav navbar-right" style = "padding:0px;">
				<?php
					if(empty($_SESSION['user'])) { ?>
				<!-- You don't exist -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<form class="form-signin" action="login.php" method="post" style="padding:10px;">
								<input type="email" id="email" class="form-control" placeholder="email@user.com" name="email" required="" autofocus="">
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
								<button class="btn btn-small btn-primary btn-block" id="submitbutton" type="submit" value="Login">Sign in</button>
							</form>
						</li>
						<li><a href="registerpage.php">Register</a></li>
					</ul>
				</li>

				<?php } else { ?>
				<!-- You exist -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mah Name!!!!<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><b>Welcome</b> Dinkleberg</li>
						<li><a href="mah_plernerees.php">Mah Plernerees</a></li>
						<li><a href="account.php">acCoUNT Settings</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
				<?php } ?>



			</ul>
			
			<!--
			<ul class="nav navbar-nav navbar-right hidden-xs">
				<li><button type="button" class="btn navbar-btn coloured-button"><a href="#">Register</a></button></li>
			</ul>
			-->
		</div>
	</div>
</nav>
<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
	<strong>Warning!</strong> Incorrect username/password
</div>