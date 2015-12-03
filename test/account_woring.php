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
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
	$plen_class = '"alert alert-dismissible alert-info"';
	$plen_text = "Plenaries haven't been assigned yet. Check back soon.";

?>
	<title><?php echo $row['first_name'];?>'s Account - World Affairs Conference</title>
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