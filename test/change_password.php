<?php 
	require("common.php"); 
	 
	if(!empty($_POST)) { 
		if(empty($_POST['password']) || empty($_POST['password_new_1']) || empty($_POST['password_new_2'])) { 
			die("You missed a field"); 
		} 
		 
		if($_POST['password_new_1'] != $_POST['password_new_2']) { 
			die("New Password Mismatch"); 
		}
		 
		$query = " 
		REPLACE INTO users (
			email,
			password,
			salt
		) VALUES (
			:email,
			:password,
			:salt
		);";
		 
		$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
		 
		$password = hash('sha256', $_POST['password'] . $salt); 
		 
		for($round = 0; $round < 65536; $round++) { 
			$password = hash('sha256', $password . $salt); 
		} 
		 
		$query_params = array( 
			':password' => $password, 
			':salt' => $salt, 
			':email' => $_POST['email'] 
		); 
		 
		try { 
			$stmt = $db->prepare($query); 
			$result = $stmt->execute($query_params);
		} 
		catch(PDOException $ex) { 
			die("Failed to run query: " . $ex->getMessage()); 
		} 
		 
		header("Location: login_page.php"); 
		 
		die("Redirecting to login_page.php"); 
	}
?> 