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
	<title>Opening Panel - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<script src="js/google_analytics.js"></script>
	<style>
	p{
		text-align:justify;
	}
	</style>
</head>

<body style="position:relative;">
	<?php include_once("import_info.php") ?>
	<?php include_once("navbar.php") ?>

	<div class = "container">
		<h1 style="text-align:center;">The Future of the Internet</h1>
		<p>
			The Internet has radically revolutionized the entire world. Everything from how we shop to how we vote 
		has been affected by the Internet. As a result, the Internet continues to proliferate in every facet. This 
		exponential growth will have huge ramifications on both governments and individuals. 
		Governments have both had an increased security due to the internet, with an increasingly pervasive 
		method of gathering information on one's citizens, increasing security. Oppressive regimes have abused the 
		internet in order to exert control, while advocates for terrorism have begun utilizing the internet as a powerful 
		tool to propagate their cause.  
		</br>
		</br>
		However, citizens have used the Internet as tool to unite and learn. The Arab Spring saw a wave of 
		protests and revolution based off of Internet usage­­­specifically social media. Meanwhile citizens in 
		democracies have discovered their right to privacy has been stripped, as their governments use their tools for 
		finding terrorists against their own citizens. 
		</br>
		</br>
		As the Internet affects many different aspects of everyday life, each panelist will have a specific 
		viewpoint and frame of reference on the Internet, and will help outline the benefits of, and issues with, the 
		Internet's proliferation. Moreover, they will explain and debate their solutions to those problems.
		</p>

	<div class = "row">
		<div class = "col-md-6">
			<h1>Ron Deibert</h1>
			<img src="img/bio/speakers/deibert.png"></img>
			</br>
			</br>
			<p> 
			Ron Deibert, (OOnt, PhD, University of British Columbia) is Professor of Political Science, and Director of 
			the Citizen Lab at the Munk School of Global Affairs, University of Toronto. The Citizen Lab is an interdisciplinary 
			research and development laboratory working at the intersection of the digital technologies, global security, and 
			human rights. He was a co­founder and a principal investigator of theOpenNet Initiative (2003­2014) and Information 
			Warfare Monitor (2003­2012) projects. Deibert was one of the founders and (former) VP of global policy and outreach 
			for Psiphon, one of the world’s leading digital censorship circumvention services.
			</br>
			</br>
			Deibert has published numerous articles, chapters, and books on issues related technology, media, and 
			world politics. He was one of the authors of the landmark Tracking Ghostnet and the Shadows in the Cloud reports, 
			which documented two separate major global cyber espionage networks. He is a co­-editor of three major volumes 
			with MIT Press: Access Denied: The practice and policy of Internet Filtering; Access Controlled: The shaping 
			of power, rights, and rule in cyberspace; and Access Contested: Security, Identity, and Resistance in Asian 
			Cyberspace. He is the author of Parchment, Printing, and Hypermedia: Communications in World Order 
			Transformation, and Black Code: Inside the Battle for Cyberspace.
			</br>
			</br>
			Deibert presently serves on the editorial boards of the journals International Political Sociology, Security 
			Dialogue, Explorations in Media Ecology, Review of Policy Research, Journal of Global Security Studies, and 
			Astropolitics.  He is on the advisory boards of Access Now, Privacy International, and PEN Canada, the technical 
			advisory groups of Amnesty International and Human Rights Watch, and the Steering Committee of the World 
			Movement for Democracy. Deibert was awarded the University of Toronto Outstanding Teaching Award, the Northrop Frye 
			Distinguished Teaching and Research Award, and the Carolyn Tuohy Award for Public Policy. He was 
			a Ford Foundation research scholar of Information and communication technologies (2002­2004). He was named 
			among Esquire Magazine’s “Best and Brightest List of 2007, and in 2010 he was listed among SC Magazine’s top “IT 
			Security Luminaries.”  In 2013, he was appointed to the Order of Ontario and awarded the Queen Elizabeth II 
			Diamond Jubilee medal, for being “among the first to recognize and take measures to mitigate growing threats to 
			communications rights, openness and security worldwide.”
			</p>
		</div>
		<div class = "col-md-6">
			<h1>Graeme Bunton</h1>
			<img src="img/avatar.png"></img>
			<p> 
			More to come soon!
			</p>
		</div>
	</div>

	<?php
	include_once("footer.php")
	?>
	 <script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>

	</div>
</body>
</html>