<?php 
	require("common.php"); 

	//// V1
	// var_dump($_POST);

	// Make sure they did stuff
	// if(!empty($_POST)) { 
		// if(empty($_POST['firstname']) || empty($_POST['lastname']) || /*KEEP GOING*/) { 
		// 	die("You missed a field"); 
		// }

		// Get all useful info
		// $query_params = array( 
		// 	':username' => $_POST['firstname'] . "," . $_POST['lastname'],
		// 	':plen_1'   => NULL,
		// 	':plen_2'   => NULL,
		// 	':plen_3'   => NULL,
		// 	':school'   => $_POST['school'],
		// 	':notes'    => $_POST['notes']
		// ); 

		$query_params = array( 
			':username' => $_POST['firstname'] . "%$%" . $_POST['lastname'],
			':email' => $_POST['email']
		); 

		// $username = $_POST['firstname'] . "," . $_POST['lastname'];

		// Make query
		$query = " 
		REPLACE INTO info ( 
			username,
			email,
			plen_1, 
			plen_2,
			plen_3, 
			school,
			notes
		) VALUES (
			:username,
			:email,
			'none', 
			'none', 
			'none', "
			. $_POST['school'] . ",",
			. $_POST['notes'] .
		");";

		// Execute said query
		try { 
			// These two statements run the query against your database table. 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		
			header("Location: account.php"); 		 
		}
		
		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
			header("Location: account.php");
		}
	// }

	// $username = $_POST['firstname'] . "$$$" . $_POST['lastname'];

	// // THE TESTING AREA
	// $query = " 
	// REPLACE INTO info (
	// 	email,
	// 	username, 
	// 	plen_1, 
	// 	plen_2,
	// 	plen_3, 
	// 	school,
	// 	notes
	// ) VALUES (
	// 	:email,
	// 	" . $username . ",
	// 	'none', 
	// 	'none', 
	// 	'none',
	// 	'UCC',
	// 	'LOLOLOL'
	// );";
	// // Execute said query
	// try { 
	// 	// These two statements run the query against your database table. 
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