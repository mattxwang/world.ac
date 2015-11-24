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
	<title>Plenaries</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<style>
	.img{
		vertical-align: text-top;
	}
	p{
		text-align:justify;
	}
	</style>
</head>

<body style="position:relative;">
	<?php include_once("navbar.php") ?>
	<div class ="container-fluid">
		<div style="text-align:center">
			<h1>Plenaries at WAC</h1>
			<p>
			Plenaries at WAC are really cool. 
			</p>
		</div>
		<div>
			<ul class="nav nav-tabs nav-justified" role="tablist">
				<li role="presentation" class="active"><a href="#plenary1" aria-controls="plenary1" role="tab" data-toggle="tab">China Plenary</a></li>
				<li role="presentation"><a href="#plenary2" aria-controls="plenary2" role="tab" data-toggle="tab">Drone Plenary</a></li>
				<li role="presentation"><a href="#plenary3" aria-controls="plenary3" role="tab" data-toggle="tab">Environment Plenary</a></li>
				<li role="presentation"><a href="#plenary4" aria-controls="plenary4" role="tab" data-toggle="tab">Gender Income Disparities</a></li>
				<li role="presentation"><a href="#plenary5" aria-controls="plenary5" role="tab" data-toggle="tab">Nuclear Proliferation</a></li>
				<li role="presentation"><a href="#plenary6" aria-controls="plenary6" role="tab" data-toggle="tab">Response and Responsibility</a></li>
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="plenary1">
					<h2>China Plenary</h2>
					<p> 
					We're still sorting out the details; we'll reveal all of this information soon!
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Speaker</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						We're still sorting out the details; we'll reveal all of this information soon!
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
				<div role="tabpanel" class="tab-pane fade" id="plenary2">
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
				<div role="tabpanel" class="tab-pane fade" id="plenary3">
					<h2>Environment Plenary</h2>
					<p> 
					We're still sorting out the details; we'll reveal all of this information soon!
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Speaker</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						We're still sorting out the details; we'll reveal all of this information soon!
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
				<div role="tabpanel" class="tab-pane fade" id="plenary4">
					<h2>Gender Income Disparities</h2>
					<p> 
					We're still sorting out the details; we'll reveal all of this information soon!
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Susannah Gouinlock</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						Susannah Gouinlock works at Catalyst Canada in many different facets of work. Ms. Gouinlock
						also manages the relationships with numerous Catalyst member companies, she is the main 
						contact for research for companies supporting their diversity. Ms. Gouinlock is integral to 
						growing Catalyst’s impact through social media and has spoken at the high school she 
						graduated from, BSS. Her work aims to spread Catalyst’s core values, ‘Connect, Engage, 
						Inspire, Impact.’ Before working at Catalyst, she received her BA(H) in Political Studies from 
						Queen’s University, and has worked as Special Assistant to the Deputy Chief of Staff to the 
						Premier in the Ontario Government.
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
				<div role="tabpanel" class="tab-pane fade" id="plenary5">
					<h2>The Future of Nuclear Proliferation</h2>
					<p> 
					We're still sorting out the details; we'll reveal all of this information soon!
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Paul Meyer</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						Paul Meyer was born and attended university in Toronto, at the University of Toronto. He joined 
						the Department of Foreign Affairs in 1975 and has since dedicated his life’s work to issues such 
						as international security and relations. He is currently working as a Fellow in International 
						Security at the Simon Fraser University in Vancouver, Canada. Meyer is also a Senior Fellow in 
						Space Security and Nuclear Disarmament at The Simons Foundation.
						</br>
						</br>
						Domestically, Mr. Meyer has had a brilliant career. He occupied numerous roles in the 
						Department of Foreign Affairs and International Trade, specifically in the area of international 
						security. He is an accomplished writer, publishing numerous articles and posts, primarily on 
						topics concerning nuclear threats and dangers.
						</br>
						</br>
						Mr. Meyer has also a distinguished international career. While a part of the Department of 
						External Affairs, Mr. Meyer served in several countries abroad as the Political Councillor for 
						Canada’s NATO delegation, including: Norway, Russia, and Belgium. Additionally, he served at 
						the Embassy in Washington, D.C. from 1992­1997, again as Political Councillor. Even further, 
						he served as Ambassador to the UN and Ambassador for disarmament in Geneva. Meyer led 
						the Canadian delegation into several NPT meetings including the 2005 review conference 
						playing a key role in Canada’s involvement in the NPT development, implementation, and 
						review.
						</p>
						</div>
						<div class = "col-md-6">
						<h4>James M. Acton</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						James M. Acton is a British scientist with a PhD in theoretical physics from 
						Cambridge University. He is a physicist by training and is an expert in 
						nuclear arms. He currently works as the co­director of the Nuclear Policy 
						Program at the Carnegie Endowment for National Peace, a policy think­tank 
						for foreign affairs. His ongoing research focuses on the nuclear fuel cycle in 
						Japan. Acton’s publications span the field of nuclear policy. He is the author 
						of two books, Deterrence During Disarmament: Deep Nuclear Reductions 
						and International Security and Abolishing Nuclear Weapons. His analysis on 
						proliferation threats, including Iran and North Korea, has been widely disseminated by major 
						journals, newspapers, and websites.
						</br>
						</br>
						Among other impressive credentials, James Acton is a member of the Commission on 
						Challenges to Deep Cuts which works to implement solutions around existing political 
						constraints with the aim of reducing the spread of nuclear weapons. Acton is also part of the 
						Nuclear Security Working Group which works to promote consensus on nuclear issues and 
						make informed decisions on nuclear cooperation. He has also provided guidance to the UN on 
						Disarmament Matters.
						</br>
						</br>
						Acton has published in several newspapers including the New York Times, the International 
						Herald Tribune,Foreign Affairs, Foreign Policy, Survival, and the Washington Quarterly. He has 
						also appeared on CNN’s State of the Union, NBC Nightly News, CBS Evening News, and PBS News Hour/
						</br>
						</br>
						With this wealth of experience, James Acton makes for an excellent speaker for the nuclear 
						proliferation plenary.
						</p>
						</div>
					</div>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="plenary6">
					<h2>Response and Responsibility in Crisis</h2>
					<p> 
					We're still sorting out the details; we'll reveal all of this information soon!
					</p>
					<div class = "row">
						<div class = "col-md-6">
						<h4>Ratna Omidvar</h4>
						<img src="img/avatar.png" width = "10%"></img>
						<p>
						Ratna Omidvar is the founding Executive Director of the Global Diversity Exchange 
						(GDX) at the Ted Rogers School of Management, Ryerson University. GDX is a think and do 
						tank on diversity, migration and inclusion that connects local experience and ideas with global 
						networks. It is dedicated to building a community of international leaders who see prosperity in 
						migration. Under her leadership the GDX is developing a program of academic and applied 
						research, and identifying evidence­based leading practices and taking them to scale.
						</br>
						</br>
						Ratna is Chair Emerita of the Toronto Region Immigrant Employment Council, Chair of 
						Lifeline Syria, Co­Chair of DiverseCity: the Greater Toronto Leadership Project, and a Director 
						of the Canadian Club of Toronto, The Environics Institute, and Samara. She is co­editor of Five 
						Good Ideas: Practical Strategies for Nonprofit Success (2011) and co­author of Flight and 
						Freedom: Stories of Escape to Canada (forthcoming). She is a faculty member and advisor of 
						the Metropolis Professional Development program at Carleton University. She received an 
						Honorary Degree, Doctor of Laws, York University in 2012.
						</br>
						</br>
						Ratna was appointed to the Order of Ontario in 2005 and became a Member of the 
						Order of Canada in 2011, with both honours recognizing her advocacy work on behalf of 
						immigrants and devotion to reducing inequality in Canada. In 2010, Canada's national 
						newspaper, The Globe and Mail, profiled her as its Nation Builder of the Decade for Citizenship. 
						In 2014, she received the Cross of the Order of Merit of the Federal Republic of Germany in 
						recognition of her contribution to the advancement of German­Canadian relations.
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
		</div>
	</div>



<?php
include_once("footer.php")
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>