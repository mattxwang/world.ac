<?php
//Start the PHP session
session_start();
//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Morning Panel - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	p{
		text-align:justify;
	}
	</style>
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container-fluid">
<div style = "text-align:center">
	<h2>Morning Panel</h2>
	<h1>Sample Speaker</h1>
	<img src="img/avatar.png"></img>
</div>
<div style = "text-align:justify">
	The Internet has radically revolutionized the entire world. Everything from how we shop to how we vote 

has been affected by the Internet. As a result, the Internet continues to proliferate in every facet. This 

exponential growth will have huge ramifications on both governments and individuals. 

Governments have both had an increased security due to the internet, with an increasingly pervasive 

method of gathering information on one's citizens, increasing security. Oppressive regimes have abused the 

internet in order to exert control, while advocates for terrorism have begun utilizing the internet as a powerful 

tool to propagate their cause.  

However, citizens have used the Internet as tool to unite and learn. The Arab Spring saw a wave of 

protests and revolution based off of Internet usage­­­specifically social media. Meanwhile citizens in 

democracies have discovered their right to privacy has been stripped, as their governments use their tools for 

finding terrorists against their own citizens. 

As the Internet affects many different aspects of everyday life, each panelist will have a specific 

viewpoint and frame of reference on the Internet, and will help outline the benefits of, and issues with, the 

Internet's proliferation. Moreover, they will explain and debate their solutions to those problems.
</div>


<?php
include_once("footer.php")
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>