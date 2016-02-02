<!DOCTYPE html>
<html>
<head>
	<!--
	CREDITS TO MATIAS MARTINEZ @ http://matmartinez.net/nsfw/
	Comments and some tweaking by Matthew Wang.
	Enjoy.
	-->
	<title>Loading…</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width"/>
	<style type="text/css">
		article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{
			display:block
		}
		html,body{
			margin:0px;padding:0px;
		}
		html{
			background-color:#000;
		}
		body{
			padding:0px;margin:0px;opacity:0.0;display:block;overflow:hidden;position:absolute;height:auto;bottom:20px;top:20px;left:20px;right:20px;background-color:#9f9f9f;-webkit-transition:opacity 1.5s ease-in;-moz-transition:opacity 1.5s ease-in;-o-transition:opacity 1.5s ease-in;-ms-transition:opacity 1.5s ease-in;border-radius:10px;cursor:wait;
		}
		.roll{
			opacity:1.0;cursor:default;
			}
		figure.ditto{
			position:absolute;display:block;padding:0px;margin:0px;width:499px;height:439px;background-image:url(assets/ditto.gif);background-repeat:no-repeat;
		}
		figure.ditto.hero{
			z-index:0;position:absolute;left:50%;margin-left:-255px;top:50%;margin-top:-220px;
		}
		figure.fromLeft{
			-webkit-animation:fromLeft 3s linear;-moz-animation:fromLeft 3s linear;-ms-animation:fromLeft 3s linear;left:-100%;
		}
		figure.fromRight{
			-webkit-animation:fromRight 3s linear;-moz-animation:fromRight 3s linear;-ms-animation:fromRight 3s linear;right:-100%;
		}
		@-webkit-keyframes fromLeft{0%{left:-100%;}100%{left:100%;}}@-moz-keyframes fromLeft{0%{left:-100%;}100%{left:100%;}}@-ms-keyframes fromLeft{0%{left:-100%;}100%{left:100%;}}@-webkit-keyframes fromRight{0%{right:-100%;}100%{right:100%;}}@-moz-keyframes fromRight{0%{right:-100%;}100%{right:100%;}}@-ms-keyframes fromRight{0%{right:-100%;}100%{right:100%;}}@-webkit-keyframes appear{0%{opacity:0;}100%{opacity:1;}}@-moz-keyframes appear{0%{opacity:0;}100%{opacity:1;}}@-ms-keyframes appear{0%{opacity:0;}100%{opacity:1;}}
		figure.spinner{
			display:block!important;opacity:1.0!important;position:absolute;top:100px;bottom:100px;left:0px;right:0px;z-index:1337;
		}
	</style>
	<script>
		(function(window) {
			if (window.location !== window.top.location) {
				//boring resizing, who cares
				window.top.location = window.location;
			}
		})(this);
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="spin.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
	  		var r = $("html");
	  		var b = $("body");
	  		var c = $("section#dancefloor");
	  		var spawnRate = 400; //how fast our young dittos spawn
	  		var deallocDelay = 3000; //how long until our young dittos fly away
	  		var danceDelay = 1000; //how long until our young dittos dance their hearts out
	  		
	  		function newDitto() { 
	  			var scale =  "scale("+dice(0.1, 1.6)+")"; //random ditto size
	  			var fromLeft = diceInt(0,1); //whether or not the ditto comes in from the left/right
	  			var originY = dice(-10, 100) + "%"; //where the ditto starts height wise
	  			var opacity = dice(0.1, 1.0); //the opacity of the ditto is randomized
	  			var index = dice(-30, 10);
	  			var duration = dice(0.5, 3) + "s"; //how long our young ditto stays alive
	  			
	  			var d = $('<figure/>').css({
	  				//sets a bunch of variables to what we've set them to be earlier
	  				top: originY, 
	  				opacity: opacity,
	  				"z-index": index,
	  				"-webkit-transform": scale,
	  				"-moz-transform": scale,
	  				"-o-transform": scale,
	  				"-webkit-animation-duration": duration,
	  				"-moz-animation-duration": duration,
	  				"-ms-animation-duration": duration
				});
				
				r.css({
					"background-color": color() //randomized color uno
				});
				
				b.css({
					"background-color": color() //randomized color dos
				});
				//here we just create the ditto and set what we need to do
				d.addClass("ditto");
				d.addClass( (fromLeft) ? "fromLeft" : "fromRight");
				d.appendTo(c);
				
				setTimeout(function() { 
					d.remove(); //here our dittos rip in pepperonis so no memory is wasted
				}, deallocDelay); 
				
	  		}
			  		
	  		document.getElementById("song").addEventListener("canplaythrough", kongatime, false);
					
			function kongatime()
			{	
				// Let's roll
				document.title = "Konga!";
				b.addClass("roll");
				
				// Delete spinner
				$("figure#spinner").fadeOut(200)
				setTimeout(function() { 
					$("figure#spinner").remove();
				}, 202); 
				
				// Loop				
				setTimeout(function() { 
					setInterval(function() { 
	  					newDitto();
	  				}, spawnRate); 
	  			}, danceDelay); 
				
			}

	  		var opts = {
	  			lines: 13, // The number of lines to draw
	  			length: 7, // The length of each line
	  			width: 4, // The line thickness
	  			radius: 10, // The radius of the inner circle
	  			rotate: 0, // The rotation offset
	  			color: '#fff', // #rgb or #rrggbb
	  			speed: 1, // Rounds per second
	  			trail: 60, // Afterglow percentage
	  			shadow: true, // Whether to render a shadow
	  			hwaccel: false, // Whether to use hardware acceleration
	  			className: 'spinner', // The CSS class to assign to the spinner
	  			zIndex: 2e9, // The z-index (defaults to 2000000000)
	  			top: 'auto', // Top position relative to parent in px
	  			left: 'auto' // Left position relative to parent in px
	  		
	  			
	  		};
			  	
		  	console.log("spin control");
		  	var spin = $('<figure/>').attr({
		  				id: "spinner"
					});
		  	$("html").append(spin);
		  	
		  	var target = document.getElementById('spinner');
		  	var spinner = new Spinner(opts).spin(target);
				
		  		
			});
			
			function dice(min, max) {
    			return Math.random() * (max - min) + min; //returns random number between param
			}
			
			function diceInt(min, max) {
				return Math.floor(Math.random() * (max - min + 1)) + min; //returns random int between param
			}
			function color() {
		  		return '#'+Math.floor(Math.random()*16777215).toString(16); //randomizes colour
		  	}
			  	
		</script>
		<script>
			//Google Analytics auto-generated code
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];
				a.async=1;a.src=g;
				m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-71038463-1', 'auto');
			//ga(‘set’, ‘&uid’, {{USER_ID}}); 
			ga('send', 'pageview'); 
		</script>
</head>
<body>
	<!-- let's add ditto to the dance floor! -->
	<section id="dancefloor">
		<figure class="ditto hero"></figure>
	</section>
	<!-- Add up the audio -->
	<audio id="song" autoplay loop>
		<source src="assets/konga.mp3" type="audio/mp3"/>
		<embed src="assets/konga.mp3" loop="true">
	</audio>
</body>
</html>
