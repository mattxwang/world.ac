<?php
//Connect to SQL Database
$host = "localhost";
$user = "wac";
$pass = "CEAf3RSP6ChvQrTy";
$db = "wac";
$connection = mysqli_connect($host, $user, $pass, $db) or die ("Unable to connect to the Database!");

//Sql Query Function
function sqlQuery($connection,$query){
	$query_result = mysqli_query($connection,$query);
	$returnarray = array();
	while ($row = mysqli_fetch_assoc($query_result)){
		array_push($returnarray, $row);
	}
return $returnarray;
}
?>