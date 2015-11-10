<?php 
	require("common.php"); 
	 
	if(empty($_SESSION['user'])) 
	{ 
		header("Location: loginpage.php"); 
		 
		die("Redirecting to loginpage.php"); 
	}  
?> 

<div style="width:100%; height:100%;">
	<h1 style="width:100%; height:50%; text-align:center; vertical-align:text-bottom;">Hello <?php echo ucfirst(explode(htmlentities($_SESSION['user']['username'], ","), ENT_QUOTES, 'UTF-8')); ?></h1>
	<h3 style="width:100%; height:50%; text-align:center; vertical-align:top;">Shit fuckin works, yo</h3>
</div>