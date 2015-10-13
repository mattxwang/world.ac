<?php
$l = explode("\n", shell_exec("cat /proc/stat"));
usleep(50000);
$a = explode("\n", shell_exec("cat /proc/stat"));
$cores = array(array(), array());
$percents = array();

foreach($l as $val) {
	array_push($cores[0], explode(" ", $val));
}

foreach($a as $val) {
	array_push($cores[1], explode(" ", $val));
}

foreach($cores[0] as $key=>$val) {
	if(preg_match("/^cpu(\d{1,})/", $val[0]) && preg_match("/^cpu(\d{1,})/", $cores[1][$key][0])) {
		array_push($percents, 100*((($val[1]-$cores[1][$keys][1])+($val[2]-$cores[1][$keys][2])+($val[3]-$cores[1][$keys][3]))/(($val[1]-$cores[1][$keys][1])+($val[2]-$cores[1][$keys][2])+($val[3]-$cores[1][$keys][3])+($val[4]-$cores[1][$keys][4]))));
	}
}
print_r($percents);
?>