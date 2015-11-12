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
<?php 
	require("common.php"); 
	 
	if(empty($_SESSION['user'])) 
	{ 
		header("Location: login_page.php"); 
		 
		die("Redirecting to login_page.php"); 
	}  
?> 
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
					<div style = "color:black">
						<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Change Password</h4>
									</div>
									<div class="modal-body">
										<form class="form-signin" action="change_password.php" method="post">
											<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
												<strong>Warning!</strong> Incorrect username/password combination. 
											</div>
											<h4>Old Password</h4>
											<label for="inputPassword" class="sr-only">Old Password</label>
											<input type="password" id="password" name="password" class="form-control" placeholder="Old Password" required="">
											<h4>New Password</h4>
											<label for="inputPassword" class="sr-only">New Password</label>
											<input type="password" id="password" name="password" class="form-control" placeholder="New Password" required="" autofocus = "">
											<h4>Confirm New Password</h4>
											<label for="inputPassword" class="sr-only">Confirm New Password</label>
											<input type="password" id="password" name="password" class="form-control" placeholder="Confirm New Password" required="">
							
								
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary" id="submitbutton" value="Login">Save Changes</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id = "notif">
						<div class="alert alert-success" role="alert">You've been registered correctly!</div>
						<div class="alert alert-info" role="alert">We haven't assigned plenaries yet; check back soon!</div>
						<div class="alert alert-warning" role="alert">You haven't confirmed your email yet!</div>
						<div class="alert alert-danger" role="alert">Your payment method was declined!</div>

					</div>
					<div id = "info">
						<div class="panel panel-info" style = "color:black;">
							<div class="panel-heading"><h2>Delegate Information</h2></div>
							<ul class="list-group">
								<li class="list-group-item">
									<div>
									<b>Delegate Name:</b> Matthew Wang
									</br>
									</br>
									<b>School:</b> Upper Canada College
									</div>
									</br>
									<div class = "row">
										<div class = "col-md-8">
											Incorrect information here?
										</div>
										<div class = "col-md-4" style = "text-align:right;">
											<button type="button" class="btn btn-primary btn-block">Edit Student Information</button>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-6">
											<h2>Plenary 1: First Plenary</h2>
											This is the first plenary! Here's information about the plenary! Here's the link to the plenary info page!
										</div>
										<div class = "col-md-6">
											<h2>Plenary 2: Second Plenary</h2>
											This is the second plenary! Here's information about the plenary! Here's the link to the plenary info page!
										</div>
									</div>
									</br>
								</li>
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-6">
											<b>Special Notes:</b> These are typically for food allergies, or other health concerns.
										</div>
										<div class = "col-md-6">
											Matthew has a food allergy to annoying people. Requires League of Legends to get out of anaphydlajkfsdf shock.
										</div>
									</div>
									</br>
									<div class = "row">
										<div class = "col-md-8">
											Incorrect information here?
										</div>
										<div class = "col-md-4" style = "text-align:right;">
											<button type="button" class="btn btn-primary btn-block">Edit Special Notes</button>
										</div>
									</div>
								</li>
						</div>

					</div>
					<div id = "settings">
						<div class="panel panel-info" style = "color:black;">
							<div class="panel-heading"><h2>Account Settings</h2></div>
							<ul class="list-group">
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-8">
											<b>Your Email:</b> template@ucc.on.ca
										</div>
										<div class = "col-md-4" style = "text-align:right;">
											<button type="button" class="btn btn-primary btn-block">Change Email</button>
										</div>
									</div>
									</br>
									<div class = "row">
										<div class = "col-md-8">
											Haven't received your confirmation email?
										</div>
										<div class = "col-md-4" style = "text-align:right;">
											<button type="button" class="btn btn-primary btn-block">Resend Email Confirmation</button>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-8">
											<b>Your Password:</b> ************
										</div>
										<div class = "col-md-4" style = "text-align:right;">
											<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#changePassword">Change Password</button>
										</div>
									</div>
								</li>
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