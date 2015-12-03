<?php 
	require("common.php"); 

	// Make sure they did stuff
	if(!empty($_POST)) { 
		if(empty($_POST['firstname']) || empty($_POST['lastname']) || /*KEEP GOING*/) { 
			die("You missed a field"); 
		}

		//Prep variables
		$email = $_SESSION['user']['email'];
		$f_name = $_POST['first_name'];
		$l_name = $_POST['last_name'];
		$school = $_POST['school'];
		$notes = $_POST['notes'];

		// Make query
		$query = " 
		REPLACE INTO info (
			username,
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
	}
?>