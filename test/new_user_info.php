<?php 
	require("common.php"); 

		$query = " 
		INSERT INTO info (
			email,
			username,
			plen_1, 
			plen_2,
			plen_3, 
			school,
			notes
		) VALUES (
			" . $_SESSION['user']['email'] . ",
			" . $_SESSION['user']['username'] . ",
			'none', 
			'none', 
			'none', "
			. $_POST['school'] . ",",
			. $_POST['notes'] .
		");";

		try { 
			$stmt = $db->prepare($query); 
			$stmt->execute();
		
			header("Location: account.php"); 		 
		}
		
		catch(PDOException $ex) 
		{ 
			die("Failed to run query: " . $ex->getMessage()); 
			header("Location: account.php");
		}
?>