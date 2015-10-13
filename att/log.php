<?php
$mysqli = mysqli_connect("localhost", "attendance", "C>A1b86E^Q3u^YT", "attendance");
if(!empty($_COOKIE["tok"]) && !empty($_POST["secret"])) {
	$sql = "SELECT 1 FROM attendance_keys WHERE DATE_FORMAT(d, \"%Y-%m-%d\")=\"".date("Y-m-d")."\" AND token=\"".mysqli_real_escape_string($mysqli, $_POST["secret"])."\";";
	echo $sql;
	$result = mysqli_query($mysqli, $sql);
	if(mysqli_num_rows($result)==1) {
		$sql = "SELECT id FROM members WHERE token=\"".mysqli_real_escape_string($mysqli, $_COOKIE["tok"])."\";";
		$result = mysqli_query($mysqli, $sql);
		if($fetch = mysqli_fetch_row($result)) {
			$sql = "INSERT INTO members_attendance SET member=".$fetch[0].", d=NOW();";
			mysqli_query($mysqli, $sql);
		}
		else {
			setcookie("tok", "", time()-10000);
		}
	}
}
header("Location: ./");
?>
