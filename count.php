<?php
//Connect to SQL Database
$host = "localhost";
$user = "wac";
$pass = "CEAf3RSP6ChvQrTy";
$db = "wac";
$connection = mysqli_connect($host, $user, $pass, $db) or die ("Unable to connect to WAC Database!");

//Sql Query Function
function sqlQuery($connection,$query){
	$query_result = mysqli_query($connection,$query);
	$returnarray = array();
	while ($row = mysqli_fetch_assoc($query_result)){
		array_push($returnarray, $row);
	}
return $returnarray;
}


$pointer = time() - (60*60*24);
$last_day = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE `date` > ".$pointer.";");
$unique_day  = sqlQuery($connection, "SELECT COUNT(DISTINCT(ip)) FROM hits WHERE `date` > ".$pointer.";");

$pointer2 = time() - (60*60*24*7);
$last_week = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE `date` > ".$pointer2.";");
$unique_week  = sqlQuery($connection, "SELECT COUNT(DISTINCT(ip)) FROM hits WHERE `date` > ".$pointer2.";");

$pointer3 = time() - (60*60*24*7*4);
$last_month = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE `date` > ".$pointer3.";");
$unique_month  = sqlQuery($connection, "SELECT COUNT(DISTINCT(ip)) FROM hits WHERE `date` > ".$pointer3.";");

$ever = sqlQuery($connection, "SELECT COUNT(*) FROM hits;");
$u_ever  = sqlQuery($connection, "SELECT COUNT(DISTINCT(ip)) FROM hits;");

$x = sqlQuery($connection, "SELECT COUNT(*) FROM students WHERE plen1!='';");
$xval = $x[0]["COUNT(*)"];

$perc = round((($xval/458)*100));


//$load = sys_getloadavg();
//print_r($load);

$outgoing = '
{
  "content" : "WAC Web Hits:\nD: '.$last_day[0]["COUNT(*)"].' ('.$unique_day[0]['COUNT(DISTINCT(ip))'].')\nW: '.$last_week[0]["COUNT(*)"].' ('.$unique_week[0]['COUNT(DISTINCT(ip))'].')\nM: '.$last_month[0]["COUNT(*)"].' ('.$unique_month[0]['COUNT(DISTINCT(ip))'].')\nA: '.$ever[0]["COUNT(*)"].' ('.$u_ever[0]['COUNT(DISTINCT(ip))'].')\nPLN '.$xval.'/458\n'.$perc.'% Complete",
  "refresh_frequency" : 30,
  "vibrate" : 0   
}
';

echo $outgoing;

?>