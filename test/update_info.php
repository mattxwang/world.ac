<?php 
	require("common.php"); 

	// Make sure they did stuff
	if(!empty($_POST)) { 
		if(empty($_POST['firstname']) || empty($_POST['lastname']) || /*KEEP GOING*/) { 
			die("You missed a field"); 
		}

		// Get all useful info
		$query_params = array( 
			':username' => $_POST['firstname'] . "," . $_POST['lastname'],
			':plen_1'   => NULL,
			':plen_2'   => NULL,
			':plen_3'   => NULL,
			':school'   => $_POST['school'],
			':notes'    => $_POST['notes']
		); 

		// Make query
		$query = " 
		REPLACE INTO info ( 
			username, 
			plen_1, 
			plen_2,
			plen_3, 
			school,
			notes
		) VALUES ( 
			:username, 
			:plen_1, 
			:plen_2,
			:plen_3, 
			:school,
			:notes 
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
			die("Failed"); 
		}
	}
?>