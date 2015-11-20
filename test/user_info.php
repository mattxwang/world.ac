<?php
	// First we execute our common code to connection to the database and start the session 
	require("common.php"); 

	// $_POST = cleanInput($_POST);
	 
	// At the top of the page we check to see whether the user is logged in or not 
	if(empty($_SESSION['user'])) 
	{ 
		// If they are not, we redirect them to the login page. 
		header("Location: login.php"); 
		 
		// Remember that this die statement is absolutely critical.  Without it, 
		// people can view your members-only content without logging in. 
		die("Redirecting to login.php"); 
	} 

	if (empty($_POST["moments"]) or empty($_POST["location"])){
			echo "Field not filled in";
	}

	else {
		$query = "
		SELECT * 
		FROM info
		WHERE 
		email = :email
		";

		try { 
			// These two statements run the query against your database table. 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		
		header("Location: account.php"); 
		//echo "Your SQL query " . $query . " was successful.";
		 
		}
		
		catch(PDOException $ex) 
		{ 
			// Note: On a production website, you should not output $ex->getMessage(). 
			// It may provide an attacker with helpful information about your code.  
			die("Failed to run query: " . $ex->getMessage()); 
		}
	} 
?>