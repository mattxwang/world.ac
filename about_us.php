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
		<title>Meet the WAC Team - World Affairs Conference</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="css/base.css" />
		<script src="js/google_analytics.js"></script>
		<style>
		.col-md-3 img{
			text-align: center;
		}
		.collapse p{
			text-align: justify;
		}
		</style>
	</head>

	<body>
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>
		<div class = "container">
			<div style="text-align:center;">
				<h2>Meet the WAC Team</h2>
				<p>
				WAC is a student-run organisation that spans two schools, one hundred students, and thousands of hours of work. 
				This kind of work doesn't appear out of thin air: we have many students working hard to make WAC the best current affairs conference there is.
				</p>
				</br>
				<h2>Click on a member's bio to learn more about them!</h2>
			</div>

			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseLogan" data-toggle="collapse"><img src = "img/bio/headshots/logan.png"></img>
					</a>
					<div class="collapse" id="collapseLogan">
						<h2><b>Logan Ye</b></h2>
						<h3>Conference Chair</h3>
						<p>
						My name's Logan Ye and I'm the UCC Conference Chair for the World Affairs Conference. I direct the vision of the conference with my counterparts from Branksome Hall. I also help the plenary, media and registration team complete their respective tasks.
						</br>
						</br>
						See you at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseNaz" data-toggle="collapse"><img src = "img/bio/headshots/naz.png"></img>

					</a>
					<div class="collapse" id="collapseNaz">
						<h2><b>Naz Gocek</b></h2>
						<h3>Conference Chair</h3>
						<p>
						I'm Naz and I'm one of the Branksome Hall Conference Chairs for the World Affairs Conference this year. I manage the vision and direction of WAC with my Branksome counterpart Blaise and UCC counterpart Logan. I also direct Branksome's registration. 
						</br>
						</br>
						Hope to see you at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseBlaise" data-toggle="collapse"><img src = "img/bio/headshots/blaise.png"></img>
					</a>
					<div class="collapse" id="collapseBlaise">
						<h2><b>Blaise O'Malley</b></h2>
						<h3>Conference Chair</h3>
						<p>
						I'm Blaise O'Malley, and I am super excited to be one of the Branksome Conference Chairs for the World Affairs Conference 2016. My role is to help plan the conference with the other Chairs, as well as assist with plenaries and communications.
						</br>
						</br>
						Can't wait to see you there!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseNitish" data-toggle="collapse"><img src = "img/bio/headshots/nitish.png"></img>

					</a>
					<div class="collapse" id="collapseNitish">
						<h2><b>Nitish Dhingra</b></h2>
						<h3>Secretary/Treasurer</h3>
						<p>
						Hi everyone, my name is Nitish and I’m extremely excited to be helping run this year’s World Affairs Conference. My role as secretary/treasurer surrounds helping make sure WAC runs as smoothly as possible and is enjoyable for all our delegates. 
						</br>
						</br>
						I am looking forward to seeing you this February at UCC! 
						</p>
					</div>
				</div>

			</div>
			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseNikhil" data-toggle="collapse"><img src = "img/bio/headshots/nikhil.png"></img>
				
					</a>
					<div class="collapse" id="collapseNikhil">
						<h2><b>Nikhil Kassum</b></h2>
						<h3>Head of Programs</h3>
						<p>
						My name is Nikhil Kassum and I am the UCC Programs Chair for the World Affairs Conference 2016. I am in charge of the academic content of the conference with my counterparts from Branksome Hall as we oversee all plenary and panel sessions. 
						</br>
						</br>
						I'm really looking forward being a part of WAC 2016 and hope that all of you really enjoy it. 
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseErnest" data-toggle="collapse"><img src = "img/bio/headshots/ernest.png"></img>

					</a>
					<div class="collapse" id="collapseErnest">
						<h2><b>Ernest Leung</b></h2>
						<h3>Head of Operations</h3>
						<p>
						Hey everyone! My name is Ernest Leung and I’m honoured to be able to serve on the World Affairs Conference executive this year. As Head of Operations, I work with all different teams to ensure that the logistics of WAC run smoothly and that everything goes according to plan the day of. 
						</br>
						</br>
						I’m super excited for WAC this February! See you all there!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseEmmanuel" data-toggle="collapse"><img src = "img/bio/headshots/emmanuel.png"></img>
					</a>
					<div class="collapse" id="collapseEmmanuel">
						<h2><b>Emmanuel Wong</b></h2>
						<h3>Head of Registration</h3>
						<p>
						I'm Emmanuel Wong, head of the registration for WAC this year. In my role, I'll be preparing and releasing information packets about this years' conference.
						</br>
						</br>
						I'm looking forward to seeing you all there!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseJustin" data-toggle="collapse"><img src = "img/bio/headshots/justin.png"></img>

					</a>
					<div class="collapse" id="collapseJustin">
						<h2><b>Justin Lu</b></h2>
						<h3>Head of Security /Communications</h3>
						<p>
						Hi everyone! My name is Justin Lu, and this year I will be your head of secruity and communications. Although this is my first year on the wac executive, I have been attending the conference since grade 9.
						</br>
						</br>
						This year's conference will be fantastic. I hope you enjoy yourselves!
						</p>
					</div>
				</div>

			</div>

			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseJoseph" data-toggle="collapse"><img src = "img/bio/headshots/joe.png"></img>
				
					</a>
					<div class="collapse" id="collapseJoseph">
						<h2><b>Joseph Noss</b></h2>
						<h3>Head of Keynote/Panels</h3>
						<p>
						Hey everyone! My name is Joe Noss; I read the news avidly, and I am excited to talk about World Affairs! I will be leading the Morning team in creating the panel, "The Future of The Internet"! 
						</br>
						</br>
						Don't Miss it!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseAmirah" data-toggle="collapse"><img src = "img/bio/headshots/amirah.png"></img>

					</a>
					<div class="collapse" id="collapseAmirah">
						<h2><b>Amirah Mahomed</b></h2>
						<h3>Head of Programs/Keynote</h3>
						<p>
						My name’s Amirah Mahomed and I am the Branksome Hall Program Chair and Keynote Head for the World Affairs Conference this year.  I provide help for all plenaries and panels find speakers for the conference, while finding a speaker for Keynote. 
						</br>
						</br>
						I am very excited for my last year at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseMatt" data-toggle="collapse"><img src = "img/bio/headshots/matt_n.png"></img>

					</a>
					<div class="collapse" id="collapseMatt">
						<h2><b><a href="https://twitter.com/malsf21">Matthew Wang</a></b></h2>
						<h3>Web Design/Media</h3>
						<p>
						Hi, I’m Matthew Wang! I’m part of this year’s media team, as well as the designer of this lovely website. Last year, I helped with web design, media, and tech: I’m pumped to do it all again this year! 
						</br>
						</br>
						I’m excited to make WAC as awesome as it was last year. See you there!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseJack" data-toggle="collapse"><img src = "img/bio/headshots/jack.png"></img>
					</a>
					<div class="collapse" id="collapseJack">
						<h2><b><a href = "http://jack.antinode.ca">Jack Sarick</a></b></h2>
						<h3>Web Design</h3>
						<p>
						I’m Jack Sarick, a student currently enrolled in UCC. I’m the head of Robotics, Computer Science/Digital Media, and am ready to apply that experience to WAC.
						</br>
						</br>
						I’m happy to be part of the team. See you there!
						</p>
					</div>
				</div>

			</div>

			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseDavid" data-toggle="collapse"><img src = "img/bio/headshots/david.png"></img>
				
					</a>
					<div class="collapse" id="collapseDavid">
						<h2><b>David Niddam-Dent</b></h2>		
						<h3>Morning/Closing Panels</h3>	
						<p>
						Hi, I'm David. It's my first year on the WAC team, and I'm very excited for the conference. I'm part of the morning and closing team, so I'll be helping to make sure that we start and end the conference on a high note.		
						</br>
						</br>		
						Can't wait to see everyone in February! 		
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseWill" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>

					</a>
					<div class="collapse" id="collapseWill">
						<h2><b>Will Lloyd</b></h2>
						<h3>Opening/Closing</h3>
						<p>
						Coming Soon!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseAlexPR" data-toggle="collapse"><img src = "img/bio/headshots/alexpr.png"></img>
					</a>
					<div class="collapse" id="collapseAlexPR">
						<h2><b>Alexandra Phillip-Reeves</b></h2>
						<h3>Opening Panel</h3>
						<p>
						Hello! My name is Alex and I am the Head of Opening from Branksome. I am very excited for this year’s WAC and look forward to some engaging discussions from all of you.
						</br>
						</br>
						See you there!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseKathyL" data-toggle="collapse"><img src = "img/bio/headshots/kathyl.png"></img>
					</a>
					<div class="collapse" id="collapseKathyL">
						<h2><b>Kathy Liu</b></h2>
						<h3>Closing Panel</h3>
						<p>
						Hello! My name is Kathy, and I’m so excited to be Head of Closing. My role is to contact speakers for the closing panel. 
						</br>
						</br>
						See you at WAC 2016! 
						</p>
					</div>
				</div>

			</div>

			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseSimon" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
				
					</a>
					<div class="collapse" id="collapseSimon">
						<h2><b>Simon Osak</b></h2>		
						<h3>China Plenary Head</h3>	
						<p>
						Hi there! My name is Simon Osak and I am this year's UCC China plenary head for the World Affairs Conference.  My role in WAC is to work alongside my Branksome Hall plenary head counterpart to find two speakers to speak about China's economy and why we, being North Americans, should care about it.  
						</br>
						</br>
						I am excited to be a part of WAC and I hope to see you at UCC for this amazing conference this February.		
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseKitty" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>

					</a>
					<div class="collapse" id="collapseKitty">
						<h2><b>Kitty Qu</b></h2>
						<h3>China Plenary Head</h3>
						<p>
						Hello! My name is Kitty and I am very excited for this plenary on China’s economic future. With my UCC counterpart, we are bringing to you the fascinating story of gains and sacrifices from China’s economic transformation, shared by two insightful speakers. We also hope to provide a platform of discussion for all of you to share opinions on where China’s economy leads and how it may affect the global future.
						</br>
						</br>
						I hope to see you at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapsesomething" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
					</a>
					<div class="collapse" id="collapsesomething">
						<h2><b>Emerson Braithwaite</b></h2>
						<h3>Drone Plenary Head</h3>
						<p>		
						Hey! My name is Emerson and I'm a student at Upper Canada College. My partner Katya and I are the heads of the plenary and drones. We direct the vision of the plenary to make it interesting and informative.
						</br>
						</br>
						I hope to see you at WAC this coming February.
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseKatya" data-toggle="collapse"><img src = "img/bio/headshots/katya.png"></img>
					</a>
					<div class="collapse" id="collapseKatya">
						<h2><b>Katya Pollock</b></h2>
						<h3>Drone Plenary Head</h3>
						<p>
						I’m Katya and I’m one of the plenary heads from Branksome Hall. I’m leading the drones plenary with my partner Emerson.
						</br>
						</br>
						See you at WAC!
						</p>
					</div>
				</div>

			</div>

			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseAlexQ" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
				
					</a>
					<div class="collapse" id="collapseAlexQ">
						<h2><b>Alexander Quinn</b></h2>		
						<h3>Environment Plenary Head</h3>	
						<p>
						My name is Alexander Quinn and I am the plenary co-head on corporate responsibility. My co-head Emma Lozhkin and I are in charge of coming up with our plenary's content and researching and contacting speakers. 
						</br>
						</br>
						I hope to see you there.	
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseEmma" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>

					</a>
					<div class="collapse" id="collapseEmma">
						<h2><b>Emma Lozhkin</b></h2>
						<h3>Environment Plenary Head</h3>
						<p>
						Coming Soon!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseMiles" data-toggle="collapse"><img src = "img/bio/headshots/miles.png"></img>
					</a>
					<div class="collapse" id="collapseMiles">
						<h2><b>Miles Hoaken</b></h2>
						<h3>Gender Issues Plenary Head</h3>
						<p>
						My name's Miles Hoaken and I'm a Plenary Head for the Gender Issues Plenary for World Affairs Conference this year. I direct the general vision of my plenary with  my counterpart from Branksome Hall. My job is to make my plenary fun, educational, and the best at WAC 2016.
						</br>
						</br>
						See you at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseKathyK" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
					</a>
					<div class="collapse" id="collapseKathyK">
						<h2><b>Kathy Kim</b></h2>
						<h3>Gender Issues Plenary Head</h3>
						<p>
						Coming Soon!
						</p>
					</div>
				</div>

			</div>

			</br>
			</br>
			<div class = "row">
				<div class = "col-md-3">

					<a href ="#collapseMattJ" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
				
					</a>
					<div class="collapse" id="collapseMattJ">
						<h2><b>Matthew Jagdeo</b></h2>		
						<h3>Nuclear Proliferation Plenary Head</h3>	
						<p>
						Coming Soon!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseAnika" data-toggle="collapse"><img src = "img/bio/headshots/anika.png"></img>

					</a>
					<div class="collapse" id="collapseAnika">
						<h2><b>Anika Khemani</b></h2>
						<h3>Nuclear Proliferation Plenary Head</h3>
						<p>
						Hi, I’m Anika and I am the head of the nuclear proliferation plenary along with my UCC counterpart, Matthew. My job is to construct an overall vision for the plenary.
						</br>
						</br>
						Hope to see you at WAC!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapsequestionion" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
					</a>
					<div class="collapse" id="collapsequestionion">
						<h2><b>Komahan Paramaanantham</b></h2>
						<h3>Refugee Crisis Plenary Head</h3>
						<p>
						Coming Soon!
						</p>
					</div>
				</div>
				<div class = "col-md-3">

					<a href ="#collapseHayley" data-toggle="collapse"><img src = "img/bio/headshots/placeholder.png"></img>
					</a>
					<div class="collapse" id="collapseHayley">
						<h2><b>Hayley Kedwell</b></h2>
						<h3>Refugee Crisis Plenary Head</h3>
						<p>
						Coming Soon!
						</p>
					</div>
				</div>

			</div>

			<div style="padding:35px;text-align:center;">
				
				That being said, WAC isn't just executives. We also have tireless teams working towards making WAC amazing.
				<h2>We'd Like to Thank:</h2>
				<p>
				<h3>The Media Team</h3>
				Emmanuel Wong, Philip Nicoletti, Karman Cheema, Matthew Wang, Rob Dean, Scotty Andrade, Tyler Tam,
				</br>
				as well as Derek Lam, and Nick Elder for creating the framework last year.
				<h3>Website Consultants</h3>
				Aidan Harradence, Alex Roberts, Austin Felix, Camran Hansen, Evan Boeckh, John Mace, Kevin Olds, Matt Jackman, Zack Nathan

				<h3>Last Year's Website Team</h3>
				Nick Elder, Derek Lam, Kinton Cheung

				<h3>And to all of the other people who've made WAC awesome!</h3>
				</p>
			</div>

			<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>
