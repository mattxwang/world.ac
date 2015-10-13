<?php
//Connect to SQL Database and include custom sqlQuerry function.
include_once("../../includes/sql.php");

//Site Statistics Stuff
echo "<h1>Site Statistics</h1>";

//////////////////
//Query Hit Data//
//////////////////
$last_1d = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE date > ".(time() - 86400).";");
$last_2d = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE date > ".(time() - (86400)*2).";");
$last_7d = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE date > ".(time() - (86400)*7).";");
$last_14d = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE date > ".(time() - (86400)*14).";");
$last_30d = sqlQuery($connection, "SELECT COUNT(*) FROM hits WHERE date > ".(time() - (86400)*30).";");

//Compile hit data
$site_hits_data = array('1d'=>$last_1d[0]['COUNT(*)'],'2d'=>$last_2d[0]['COUNT(*)'],'7d'=>$last_7d[0]['COUNT(*)'],'14d'=>$last_14d[0]['COUNT(*)'],'30d'=>$last_30d[0]['COUNT(*)']);

echo "<b>Hits:</b><br>";
print_r($site_hits_data);

echo '<br><br>';
/////////////////////////
// System Load Average //
/////////////////////////
echo "<b>Load Average:</b><br />";
print_r(sys_getloadavg());

echo '<br><br>';
/////////////////////////
// MORE SYS INFORMATION /
/////////////////////////
echo "<b>SYSTEM INFO:</b><br />";
