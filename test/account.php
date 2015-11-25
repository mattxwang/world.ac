<?php require("register.php"); ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<style>
		.panel{
			color:black;
		}
	</style>
	<?php 
	require("common.php"); 
	 
	if(empty($_SESSION['user'])) 
	{ 
		header("Location: login_page.php"); 
		 
		die("Redirecting to login_page.php"); 
	}

	// Pull user data
	$query = "SELECT * FROM info WHERE username = '" . $_SESSION['user']['email'] . "';";
	 
	try 
	{ 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	} 

	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
	}  

	$data = $stmt->fetchAll();
	var_dump($data["school"]);

	// Check if data already exists
	// if empty($data){
	// 	$data["firstname"] = "Default";
	// }

	// Name[0] is first, 1 is lastname
	$name = explode(",", $_SESSION['user']['username']);
	$school = $data["school"];
	echo $school;
	$notes = $data["notes"];
	echo $notes;
?>
	<title><?php echo $name[0];?> - World Affairs Conference</title>
</head>
<!--
<?php 
	require("common.php"); 
	 
	if(empty($_SESSION['user'])) 
	{ 
		header("Location: login_page.php"); 
		 
		die("Redirecting to login_page.php"); 
	}

	// Pull user data
	$query = "SELECT * FROM info WHERE username = '" . $_SESSION['user']['email'] . "';";
	 
	try 
	{ 
		$stmt = $db->prepare($query); 
		$stmt->execute();
	} 

	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
	}  

	$data = $stmt->fetchAll();
	var_dump($data);

	// Check if data already exists
	// if empty($data){
	// 	$data["firstname"] = "Default";
	// }

	// Name[0] is first, 1 is lastname
	$name = explode(",", $_SESSION['user']['username']);
	$school = $data["school"];
	echo $school;
	$notes = $data["notes"];
	echo $notes;
?> -->
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
											<p>
											These changes will be reflected on your nametag, and other delegate-specific information. 
											</p>
											<h4>Delegate First Name</h4>
											<input type="text" id="firstname" name="firstname" class="form-control" placeholder="DELEGATE F NAME" required="">
											<h4>Delegate Last Name</h4>
											<input type="text" id="lastname" name="lastname" class="form-control" placeholder="DELEGATE L NAME" required="">
											<h4>Delegate School</h4>
											<select class="form-control" id="school" name="school" placeholder="DELEGATE SCHOOL" required="">
												<option value="UCC">UCC</option>
												<option value="BSS">BSS</option>
												<option value="BH">BH</option>
												<option value="UTS">UTS</option>
												<option value="TFS">TFS</option>
											</select>
											<h4>Special Notes:</h4>
											<p>
											These special notes will be used to accomodate special needs. Examples include allergies, physical assistance, or religious accomodations.
											</br>
											</br>
											Leave blank if none needed.
											</p>
											<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" placeholder="SPECIAL INFO"></textarea>

											<!--
											<input type="text" id="school" name="school" class="form-control" placeholder="DELEGATE SCHOOL" required="">
											-->
											<h4>Password</h4>
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

						<!-- <div class="modal fade" id="editNotes" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="mainHeader">Edit Student Special Notes</h4>
									</div>
									<div class="modal-body">
										<form class="form-signin" action="update_info.php" method="post">
											<p>
											These special notes will be used to accomodate special needs. Examples include allergies, physical assistance, or religious accomodations.
											</br>
											</br>
											Leave blank if none needed.
											</p>
											<h4>Special Notes:</h4>
											<textarea class="form-control" rows="3" id="notes" name="notes" class="form-control" placeholder="SPECIAL INFO"></textarea>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary" id="submitbutton" value="Login">Save Changes</button>
										</form>
									</div>
								</div>
							</div>
						</div> -->
						
						<div class="modal fade" id="changePassword" tabindex="-1" role="dialog">
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
						<div class="progress" style = "height:36px;">
							<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;">
								You've completed 50% of the registration process.
							</div>
						</div>

						<!-- NOTIFICATIONS -->
						<div class="alert alert-dismissible alert-success" role=<?php echo $reg_class; ?>><?php echo $reg_text; ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="alert alert-dismissible alert-success" role=<?php echo $email_class; ?>><?php echo $email_text; ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="alert alert-dismissible alert-success" role=<?php echo $payment_class; ?>><?php echo $payment_text; ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="alert alert-dismissible alert-success" role=<?php echo $plen_class; ?>><?php echo $plen_text; ?>
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
											<?php echo $name[0]; echo " "; echo $name[1]; ?>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-6">
											School Name:
										</div>
										<div class = "col-md-6">
											<?php echo $school; ?>
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class = "row">
										<div class = "col-md-6">
											Special Notes: These are typically for food allergies, or other health concerns.
										</div>
										<div class = "col-md-6">
											<?php echo $notes; ?>
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
					<div id = "plen">
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
											<b>Your Email:</b> template@ucc.on.ca
										</div>
										<div class = "col-md-6" style = "text-align:justify;">
											Your Email is tied to our registration process. Unfortunately, that means that we can't let you change your email on our website. If you need to change your email, please contact our registration correspondent, BLAH BLAH.
										</div>
									</div>
								</li>
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
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
		</div>
</body>