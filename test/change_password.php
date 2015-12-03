<?php 
	require("common.php"); 
	 
	if(!empty($_POST)) { 

		// Check that POST info is OK
		if(empty($_POST['password']) || empty($_POST['password_new_1']) || empty($_POST['password_new_2'])) { 
			die("You missed a field"); 
		} 
		 
		if($_POST['password_new_1'] != $_POST['password_new_2']) { 
			die("New Password Mismatch"); 
		}
		

		// Make sure the original password is right
		$login_ok = false; 
		 
		$row = $stmt->fetch(); 
		if($row) 
		{ 
			$check_password = hash('sha256', $_POST['password'] . $row['salt']); 
			for($round = 0; $round < 65536; $round++) 
			{ 
				$check_password = hash('sha256', $check_password . $row['salt']); 
			} 
			 
			if($check_password === $row['password']) 
			{ 
				$login_ok = true; 
			} 
		} 
		 

		// If they good
		if($login_ok) 
		{ 
			$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
			 
			$password = hash('sha256', $_POST['password_new_1'] . $salt); 
			 
			for($round = 0; $round < 65536; $round++) { 
				$password = hash('sha256', $password . $salt); 
			} 

			$email = $_SESSION['user']['email'];

			$query = " 
			REPLACE INTO users (
				email,
				password,
				salt
			) VALUES (
				'$email',
				'$password',
				'$salt'
			);";

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

		// If they fuck up
		else 
		{ 
			$correction = 'block'; 
			 
			$submitted_email = htmlentities($_POST['email'], ENT_QUOTES, 'UTF-8'); 

			header("Location: account.php"); 
			die("Redirecting to: account.php"); 
		} 
	}

	//Dunno.
	else {
		echo "IDK";
		header("Location: login_page.php"); 
		die("Redirecting to: login_page.php"); 
	}
?> 