<?php 
	require("common.php"); 
	if(!empty($_POST)) { 
		if(empty($_POST['firstname']) || empty($_POST['lastname']) || /*KEEP GOING*/) { 
			die("You missed a field"); 
		}

		$query_params = array( 
			':username' => $_POST['firstname'] . "," . $_POST['lastname'] 
		); 

		$query = " 
		INSERT INTO info ( 
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
		);
		"; 
?>