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
	<title>Plenaries - World Affairs Conference</title>
	<link rel="icon" href="css/favicon.ico" />
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	.col-md-6 img{
		text-align: center;
	}
	.collapse p{
		text-align: justify;
	}
	</style>
</head>

<body style="position:relative;">
	<?php include_once("navbar.php") ?>
	<div class = "container">
		<div style="text-align:center;">
			<h1>Plenaries at WAC</h1>
			<p>
			Plenaries are the main topics for debate at the World Affairs Conference. Delegates can attend three of the six plenaries, watching and possibly particpating in a debate with two experts in the field.
			</br>
			</br>
			Delegates will receive their plenary assignments after registration, and a small period of time. 
			</p>
		</div>

		<div class = "row">
			<div class = "col-md-6">

				<a href ="#collapseChina" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
				</a>
				<div class="collapse" id="collapseChina">
					<h2>China Plenary</h2>
					<p> 
					This year’s economics plenary’s main focus is on China.  Our plenary digs deep into the core of
					China’s economy.  Specifically, how it can act as a possible policy role model for other 
					countries, what its future entails and lastly, how China’s rise contributes to overall geopolitical 
					and economic changes caring Canada.  Our plenary will inform you on this complex issue but 
					also outline why you, being a Canadian citizen should care.
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Margaret Cornish</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						Most recently Margaret Cornish served on the International Affairs Council of Advisors
						established to advise Justin Trudeau, Leader of the Liberal Party of Canada. Margaret began 
						her career in the Canadian Foreign Service. Her postings included Beijing, the Canadian 
						Delegation to the United Nations in New York, and the Canadian delegation to the European 
						Community in Brussels. She subsequently joined the Bank of Nova Scotia where she worked on 
						sovereign debt restructuring. She then joined Scotia Capital Markets where she provided award-
						winning research coverage on a wide range of Canadian industrial companies. From 2003­2008 
						Margaret served as Executive Director of the Canada­China Business Council, the leading 
						Canadian bilateral business organization dealing with China. Margaret has served as a member 
						of the Economic Council of Canada and has been an adjunct professor in the business schools 
						of Queen’s University and Wilfred Laurier University, She was an Associate Fellow of the 
						Canadian International Council. From 2010 to 2015 she was Senior Advisor and Beijing Chief 
						Representative of Bennett Jones Commercial Consulting Inc.

						</p>
						</div>
						<div class = "col-md-6">
						<h4>Speaker</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						We're still sorting out the details; we'll reveal all of this information soon!
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class = "col-md-6">

				<a href ="#collapseDrones" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>

				</a>
				<div class="collapse" id="collapseDrones">
					<h2>Drone Plenary</h2>
					<p> 
					Missile strikes launched from drones, also known as unmanned air vehicles (UAV), have 
					become the center of much controversy over the past few years. Pakistan alone has faced 
					2,500 ­ 4,000 casualties and roughly 1,500 injuries at the hand of American drone strikes. The 
					plenary will feature two speakers discussing the ethical dilemmas surrounding the use of armed 
					drones and how drones should be used in the future.
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Steven P. Lee</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						Steven P. Lee is a professor of philosophy at Hobart and William Smith Colleges in
						Geneva, New York where he teaches courses on Morality and War, Social Justice, Morality and 
						Self­ interest, Plato’s Republic, Global Justice, Philosophy of Law, Liberty and Community, and 
						Critical Thinking. He is interested in the ways in which social and technological changes require 
						alterations in our moral understanding of areas of human activity such as warfare, 
						environmental stewardship, and medicine. He has written a large body of books and articles on 
						social, moral, and political philosophy, especially pieces on war and ethics. He is the author of 
						Morality, Prudence, and Nuclear Weapons  (Cambridge: Cambridge University Press, 1993, 
						1996), the editor of Intervention, Terrorism, and Torture: Contemporary Challenges to Just War 
						Theory (Dordrecht: Springer, 2007), the author of What Is the Argument?: Critical Thinking in 
						the Real World (New York: McGraw­Hill Higher Education, 2001), the co editor of Ethics and 
						Weapons of Mass Destruction (New York: Cambridge University Press, 2004), and the author of 
						Ethics and War (Cambridge, UK: Cambridge University Press, 2012). He is affiliated with the 
						American Philosophical Association, the Creighton Club of the New York State Philosophical 
						Association, and the American Association of University Professors. He was the former 
						president of the Concerned Philosophers for Peace and the Association for the Philosophy of 
						Law and Social Philosophy.
						</p>
						</div>
						<div class = "col-md-6">
						<h4>Speaker</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						We're still sorting out the details; we'll reveal all of this information soon!
						</p>
				</div>
			</div>
		</div>
		</br>
		</br>
		
		<?php
		include_once("footer.php")
		?>

		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>
