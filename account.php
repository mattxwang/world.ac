<?php
	require("common.php");
	if(empty($_SESSION['user'])){ 
		header("Location: login_page.php"); 
		die("Redirecting to login_page.php"); 
	}
?> 

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	<style>
		.panel{
			color:black;
		}
	</style>
	<?php
		// Pull user data
		$email = $_SESSION['user']['email'];
		$query = "SELECT * FROM info WHERE email='$email';";
		 
		try 
		{ 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		} 

		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
		}  

		$row = $stmt->fetch();

		//ALERTS

		// Styles
		$blue_class = '"alert alert-dismissible alert-info"';
		$green_class = '"alert alert-dismissible alert-success"';
		$red_class = '"alert alert-dismissible alert-danger"';
		$yellow_class = '"alert alert-dismissible alert-warning"';
		$hide_class = '"alert hidden"';

		//Plenaries	
		$plen_class = $blue_class;
		$plen_text = "Plenaries haven't been assigned yet. Check back soon.";

		//Email
		$email_class = $green_class;
		$email_text = "Email";

		//Reg
		$reg_class = $red_class;
		$reg_text = "Reg";

		//Pay
		$pay_class = $yellow_class;
		$pay_text = "Pay";

	?>
	<title><?php echo $row["first_name"];?>'s Account - World Affairs Conference</title>
</head>
<?php include_once("navbar.php") ?>
<!--
<body style = "position:relative;" data-spy="scroll" data-target="#acc-navbar">-->
<body>
	<div class= "container">
		<div class = "row">
			<div class = "col-md-3 hidden-xs">
				<div id = "acc-navbar">
					<ul class="nav nav-pills nav-stacked" style = "position:fixed;">
						<li role="presentation"><a href="#notif">Notifications</a></li>
						<li role="presentation"><a href="#info">Delegate Info</a></li>
						<li role="presentation" class = "hidden"><a href="#plen">Delegate Plenaries</a></li>
						<li role="presentation"><a href="#settings">Account Settings</a></li>
					</ul>
				</div>
			</div>
			<div class = "col-md-9">
				<div style = "color:black">

					<div class="modal fade" id="editInfo" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="mainHeader">Edit Delegate Information</h4>
								</div>
								<div class="modal-body">
									<form class="form-signin" action="update_info.php" method="post">
										<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
											<strong>Warning!</strong> Incorrect username/password combination. 
										</div>
										<h4>Basic Delegate Information:</h4>
										<p>
										These changes will be reflected on your nametag, and other delegate-specific information. 
										</p>
										<h4>Delegate First Name</h4>
										<input type="text" id="firstname" name="firstname" class="form-control" required="" value="<?php echo $row['first_name']; ?>">
										<h4>Delegate Last Name</h4>
										<input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $row['last_name']; ?>" required="">
										<h4>Delegate School</h4>
										<select class="form-control" id="school" name="school" placeholder="DELEGATE SCHOOL" required="">
											<option value="Bishop Strachan School">Bishop Strachan School</option>
											<option value="Branksome Hall">Branksome Hall</option>
											<option value="St. Clements School">St. Clements School</option>
											<option value="Upper Canada College">Upper Canada College</option>
											<option value="University of Toronto Schools">University of Toronto Schools</option>
										</select>
										<h4>Special Notes:</h4>
										<p>
										These special notes will be used to accomodate special needs. Examples include vegetarian diets, physical assistance, or religious accomodations.
										</br>
										</br>
										Leave blank if none needed.
										</p>
										<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" value="<?php echo $row['notes']; ?>"></textarea>
										<h4>Password (to confirm change)</h4>
										<input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
										

							
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="submitbutton" value="Login" >Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div>

					
					<div class="modal fade" id="changePassword" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="myModalLabel">Change Password</h4>
								</div>
								<div class="modal-body">
									<form action="change_password.php" method="post">
										<div class="alert alert-danger" role="alert" id="correctionAlert" style="display:<?php echo $correction; ?>;">
											<strong>Warning!</strong> Incorrect username/password combination. 
										</div>
										<h4>Old Password</h4>
										<label for="inputPassword" class="sr-only">Old Password</label>
										<input type="password" id="password" name="password" class="form-control" placeholder="Old Password" required="" autofocus="">
										<h4>New Password</h4>
										<label for="inputPassword" class="sr-only">New Password</label>
										<input type="password_new_1" id="password_new_1" name="password_new_1" class="form-control" placeholder="New Password" required="">
										<h4>Confirm New Password</h4>
										<label for="inputPassword" class="sr-only">Confirm New Password</label>
										<input type="password_new_2" id="password_new_2" name="password_new_2" class="form-control" placeholder="Confirm New Password" required="">
						
							
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary" id="submitbutton" value="Login">Change Password</button>
									</form>
								</div>
							</div>
						</div>
					</div>


				</div>

				<div id = "notif">
					<!--
					<div class="progress" style = "height:36px;">
						<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
							You've completed 50% of the registration process.
						</div>
					</div>
					-->
					

					<!-- NOTIFICATIONS -->
					<!--
					<div class=<?php echo $reg_class;?> role="alert"><?php echo $reg_text; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class=<?php echo $email_class;?> role="alert"><?php echo $email_text; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class=<?php echo $pay_class;?> role="alert"><?php echo $pay_text; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					-->
					<div class=<?php echo $plen_class;?> role="alert"><?php echo $plen_text; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>

				</div>
				<div id = "info">
					<div class="panel panel-info">
						<div class="panel-heading"><h2>Delegate Information</h2></div>
						<ul class="list-group">
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										Delegate Name:
									</div>
									<div class = "col-md-6">
										<?php echo $row['first_name'] . " " . $row['last_name']; ?>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										School Name:
									</div>
									<div class = "col-md-6">
										<?php echo $row['school']; ?>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										Special Notes: These are typically for food accomodations (such as being vegetarian).
									</div>
									<div class = "col-md-6">
										<?php echo $row['notes']; ?>
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										Incorrect information here?
									</div>
									<div class = "col-md-6" style = "text-align:right;">
										<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editInfo">Edit Student Information</button>
									</div>
								</div>
							</li>
					</div>
				</div>

				<div id = "plen" class = "hidden">
					<div class="panel panel-info">
						<div class="panel-heading"><h2>Delegate Plenaries</h2></div>
						<ul class="list-group">
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										<h2>Plenary 1: First Plenary</h2>
										This is the first plenary! Here's information about the plenary! Here's the link to the plenary info page!
									</div>
									<div class = "col-md-6">
										Here's information about the plenary! Here's the link to the plenary info page!
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										<h2>Plenary 2: Second Plenary</h2>
										This is the Second plenary! Here's information about the plenary! Here's the link to the plenary info page!
									</div>
									<div class = "col-md-6">
										Here's information about the plenary! Here's the link to the plenary info page!
									</div>
								</div>
							</li>
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										<h2>Plenary 3: First Plenary</h2>
										This is the third plenary! Here's information about the plenary! Here's the link to the plenary info page!
									</div>
									<div class = "col-md-6">
										Here's information about the plenary! Here's the link to the plenary info page!
									</div>
								</div>
							</li>
					</div>

				</div>
				<div id = "settings">
					<div class="panel panel-info">
						<div class="panel-heading"><h2>Account Settings</h2></div>
						<ul class="list-group">
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										<b>Your Email:</b> <?php echo $row["email"];?>
									</div>
									<div class = "col-md-6" style = "text-align:justify;">
										Your Email is tied to our registration process. Unfortunately, that means that we can't let you change your email on our website. If you need to change your email, please <a href ="contact_us.php">contact us</a>.
									</div>
								</div>
							</li>
							<!--
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										Haven't received your confirmation email?
									</div>
									<div class = "col-md-6" style = "text-align:right;">
										<button type="button" class="btn btn-primary btn-block">Resend Email Confirmation</button>
									</div>
								</div>
							</li>
							-->
							<li class="list-group-item">
								<div class = "row">
									<div class = "col-md-6">
										<b>Your Password</b>
										</br>
										We don't keep your password in plaintext. Your secret is safe with us!
									</div>
									<div class = "col-md-6" style = "text-align:right;">
										<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#changePassword">Change Password</button>
									</div>
								</div>
								</br>
								<!--
								<div class = "row">
									<div class = "col-md-8">
										Forgot your password?
									</div>
									<div class = "col-md-4" style = "text-align:right;">
										<button type="button" class="btn btn-primary btn-block">Reset Password</button>
									</div>
								</div>
								-->
							</li>
					</div>

				</div>
			</div>
		</div>

		
		<?php
		include_once("footer.php")
		?>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</div>
</body>