<h1>Pulling <a href="https://github.com/malsf21/world.ac">https://github.com/malsf21/world.ac</a> to server</h1>
<?php
	exec("git pull origin master", $output);
	if (count($output) == 1){
		echo $output[0];
	}
	else {
		echo $output[3];
	}
?>