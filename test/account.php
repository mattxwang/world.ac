<?php require("register.php"); ?> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<link rel="icon" href="css/favicon.ico" />
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
	$query = "SELECT * FROM info WHERE email = '" . $_SESSION['user']['email'] . "';";
	 
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

	Check if data already exists
	if empty($data){
		$data[0]["firstname"] = "New";
		$data[0]["lastname"] = "New";
		$data[0]["school"] = "New";
		$data[0]["notes"] = "New";

	}

	// Name[0] is first, 1 is lastname
	$name = $data[0]["firstname"];
	$school = $data[0]["school"];
	$notes = $data[0]["notes"];
	/*$notif = 0;
	if $school == NULL{
		$notif += 1;
	}*/
	$plen_class = '"alert alert-dismissible alert-info"';
	$plen_text = "Plenaries haven't been assigned yet. Check back soon.";

?>
	<title><?php echo $name[0];?>'s Account - World Affairs Conference</title>
</head>
<?php include_once("navbar.php") ?>

<body style = "position:relative;" data-spy="scroll" data-target="#acc-navbar">
		<div class= "container">
			
			Hello

			
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