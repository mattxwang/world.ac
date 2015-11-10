<?php 
	require("common.php"); 
	 
	if(empty($_SESSION['user'])) 
	{ 
		header("Location: loginpage.php"); 
		 
		die("Redirecting to loginpage.php"); 
	} 
	
	$query = "SELECT imgname FROM `images` WHERE isprofile = 'T' AND username = '" . $_SESSION['user']['username'] . "';";
	 
	try 
	{ 
		$stmt = $db->prepare($query); 
		$stmt->execute();
		$rows = $stmt->fetchAll(); 
	} 
	catch(PDOException $ex) 
	{ 
		die("Failed to run query: " . $ex->getMessage()); 
	}  
?> 

<div style="width:100%; height:100%;">
	<h1 style="width:100%; height:50%; text-align:centre;">Hello <?php echo ucfirst(htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8')); ?></h1>
	<h3 style="width:100%; height:50%; text-align:centre;">Shit fuckin works, yo</h3>
</div>