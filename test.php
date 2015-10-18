<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");
?>
<!DOCTYPE html>
<html>
<!-- || Page Head || -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Page Under Construction</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>

<body style="position:relative;">
<!--
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Registration</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference Information <span class="caret"></span></a>
          <span style="position:absolute; bottom:-1px; left:0px; width:100%; background-color:#53b5b4; height:2px; opacity:1;" class="hidden-xs"></span>
          <ul class="dropdown-menu">
            <li><a href="keynote.php">Keynote Address</a></li>
            <li class ="drp-active"><a href="#">Morning Panel</a></li>
            <li><a href="#">Plenaries</a></li>
            <li><a href="#">Closing Panel</a></li>
            <li><a href="#">Schedule</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About WAC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="about_us.php">Meet the Team</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-xs">
      	<li><button type="button" class="btn navbar-btn reg-button"><a href="#">Register</a></button></li>
      </ul>
    </div>
  </div>
</nav>
-->
<?php
include_once('navbar.php');
?>

<?php
include_once("footer.php");
?>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</body>
</html>