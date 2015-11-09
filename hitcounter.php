<?php
	/* 
	* The WAC hit counter.
	* Writes out to /var/www/wac/countlog.json (technically ./countlog.json)
	* It was designed to be expandable. That's why it's a bit complicated
	*/

	//opens countlog.txt to read the number of hits
	$file = json_decode(file_get_contents("countlog.json"), true);
	$count = $file["hits"];
	$data["hits"] = $count + 1;

	// opens countlog.json to change new hit number
	$file = "countlog.json";
	file_put_contents($file, json_encode($data));
?>