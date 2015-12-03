<?php 
	require("common.php"); 
	
	// if(
	// 	empty($_POST['first_name']) ||
	// 	empty($_POST['last_name'])  ||
	// 	empty($_POST['school'])
	// ) { 
	// 	die("You missed a field"); 
	// }

	$query = " 
	INSERT INTO info (
		email,
		first_name,
		last_name,
		plen_1, 
		plen_2,
		plen_3, 
		school,
		notes";
	// ) VALUES (
	// 	" . $_SESSION['user']['email'] . ","
	// 	. $_POST['first_name'] . ""
	// 	. $_POST['last_name'] . "
	// 	'none', 
	// 	'none', 
	// 	'none', "
	// 	. $_POST['school'] . ",",
	// 	. $_POST['notes'] .
	// ");";

	echo $query;
	var_dump($_POST);
	echo $_SESSION['user']['email'];

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