<?php 
	require("common.php"); 
	
	// if(
	// 	empty($_POST['first_name']) ||
	// 	empty($_POST['last_name'])  ||
	// 	empty($_POST['school'])
	// ) { 
	// 	die("You missed a field"); 
	// }

	$email = $_SESSION['user']['email'];
	$f_name = $_POST['first_name'];
	$l_name = $_POST['last_name'];
	$school = $_POST['school'];
	$notes = $_POST['notes'];

	$query = " 
	INSERT INTO info (
		email,
		first_name,
		last_name,
		plen_1, 
		plen_2,
		plen_3, 
		school,
		notes
	) VALUES (
		'$email',
		'$f_name',
		'$l_name',
		'none', 
		'none', 
		'none',
		'$school',
		'$notes'
	);";

	echo $query;
	// var_dump($_POST);
	// echo $_SESSION['user']['email'];

	// try { 
	// 	$stmt = $db->prepare($query); 
	// 	$stmt->execute();
	
	// 	header("Location: account.php"); 		 
	// }
	
	// catch(PDOException $ex) 
	// { 
	// 	die("Failed to run query: " . $ex->getMessage()); 
	// 	header("Location: account.php");
	// }
?>