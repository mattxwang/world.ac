<?php
//Start the PHP session
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>How To Register - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	<style>
	p{
		text-align:justify;
	}
	.container a{
		font-weight: bold;
	}
	</style>
</head>

<body style="position:relative;">

<?php include_once("navbar.php") ?>

<div class = "container">
	<h1 style="text-align:center;">How to Register</h1>
	<h2>Step One: <a href="misc_files/reg_2016.pdf">Registration Package</a></h2>
	<p>
	The Registration Package gives a preview of what WAC is, what the events this year are, and a general understanding of what students will do. 
	We suggest that every adviser read through the registration package prior to registering. A copy of the registration package can be found <a href="misc_files/reg_2016.pdf">here</a>.
	</p>
	<h2>Step Two: <a href="misc_files/reg_2016_form.pdf">Registration Form</a></h2>
	<p>
	Advisers should fill out <a href="misc_files/reg_2016_form.pdf">this form</a> with the student names, email addresses, and plenary selections. Enclosed should be $50 CAD (USD taken at par) per registered student. Multiple forms can be enclosed.
	</br>
	</br>
	Completed forms should be sent to:
	</br>
	World Affairs Conference
	</br>
	Upper Canada College
	</br>
	200 Lonsdale Road
	</br>
	Toronto, Ontario
	</br>
	M4V 1W6
	</br>
	</br>
	Registration should be submitted before January 20th. Registration forms received without payment will be discarded.
	</p>
	<h2>Step Three (Optional): <a href ="account.php">Online Registration</a></h2>
	<p>
	Delegates can ensure that they are registered correctly by confirming their registration <a href="account.php">online</a>. 
	This allows delegates to ensure that all of their information is correct, and to know what plenaries they have been assigned to. 
	Furthermore, delegates can make sure that special accomodations, such as allergies, are accounted for.
	</p>

	<h2>Any More Questions?</h2>
	<p>
	We suggest you head over to our <a href="faq.php">Frequently Asked Questions page</a>. If your question isn't answered, feel free to <a href="contact_us.php">contact us</a>.
	</p>


<?php
include_once("footer.php")
?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>