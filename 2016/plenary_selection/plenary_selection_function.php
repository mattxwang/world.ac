<?php
	/* function has_dupes($array){
		$dupe_array = array();
		foreach($array as $val){
			if(++$dupe_array[$val] > 1){
				return true;
			}
		}
		return false;
	}
	*/
	require("../common.php");
	if(!empty($_POST)) {
		/*if(
			empty($_POST['email'])  ||
			empty($_POST['f_name']) ||
			empty($_POST['l_name']) ||
			empty($_POST['plen_1']) ||
			empty($_POST['plen_2']) ||
			empty($_POST['plen_3']) ||
			empty($_POST['plen_4'])
		) {
			die("You missed a field");
		}*/

		if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			die("Invalid email address");
		}
		/*
		if(has_dupes($_POST) == true){
			die("Not all plenaries are unique!")
		}
		*/
		$_POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

		$email = $_POST['email'];
		$first_name = $_POST['f_name'];
		$last_name = $_POST['l_name'];
		$plen_1 = $_POST['plen_1'];
		$plen_2 = $_POST['plen_2'];
		$plen_3 = $_POST['plen_3'];
		$plen_4 = $_POST['plen_4'];

		$query = "
		INSERT INTO uccstudents (
			email,
			first_name,
			last_name,
			school,
			plen_1,
			plen_2,
			plen_3,
			plen_4
		) VALUES (
			'$email',
			'$first_name',
			'$last_name',
			'Upper Canada College',
			'$plen_1',
			'$plen_2',
			'$plen_3',
			'$plen_4'
		);";

		try {
			$stmt = $db->prepare($query);
			$stmt->execute();

			header("Location: done.html");
		}

		catch(PDOException $ex)
		{
			die("Failed to run query: " . $ex->getMessage());
			header("Location: index.php");
		}
	}
?>
