<?php
//Start the PHP session
session_start();

//Calls to base hit counter with unique visitors IP tracking.
include_once("hit_counter.php");

//Connect to SQL Database and include custom sqlQuerry function.
include_once("../includes/sql.php");

/* the literal worst tracking system in the history of like ever
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
*/
?>

<!DOCTYPE html>
<html>
	<!-- || Page Head || -->
	<head>

		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="World Affairs Conference">
	<title>Home</title>
	<link rel="icon" href="css/favicon.ico" />
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/base.css" />
	<link href="css/custom.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	if (!window.jQuery) {
	    document.write('<script src="js/jquery.js"><\/script>');
	}
	</script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
	window.onresize = function() {
		$("#bg_stars").height($(window).outerHeight(true)+$("#second").outerHeight(true));
			document.getElementById("bg_earth").style.top = (-($(document).scrollTop()/($("body").height()-$(window).height()))*$("#bg_earth").height()*0.08)+"px";
			//$("#bg_stars>div").css("top", (-($(document).scrollTop()/($("body").height()-$(window).height()))*$("#bg_stars").height()*0.09));
	}
	window.onload=function() {
		$("#bg_stars").height($(window).outerHeight(true)+$("#second").outerHeight(true));
		window.onscroll = function() {
			document.getElementById("bg_earth").style.top = (-($(document).scrollTop()/($(window).height()-$(document).height()))*$("#bg_earth").height()*0.35)+"px";
			//console.log($("body").height()+"|"+$(document).height());
			//$("#bg_stars>div").css("top", (-($(document).scrollTop()/($(window).height()-$(document).height()))*$("#bg_stars").height()*0.4));
		}
		/* REMOVE THIS AFTER
		var t1 = new Date();
		var t2 = new Date("2 Feb, 2015 19:00:00");
		if(t1>t2) {
			t2 = new Date("2 Feb, 2016 19:00:00");
		}
		var dif = Math.floor((t2.getTime() - t1.getTime())/1000);
		var days = 0;
		var hours = 0;
		var minutes = 0;
		var seconds = 0;
		if(dif>0) {
			days = Math.floor(dif/86400);
			hours = Math.floor(dif%86400/3600);
			minutes = Math.floor(dif%3600/60);
			seconds = dif%60;
		}
		
		/*var days = 10;
		var hours = 10;
		var minutes = 10;
		var seconds = 10; */

		/* REMOVE THIS
		$("#day_0 span").get(0).style.top=(-$("#second_0 span").find(":nth-child("+(11-parseInt(days==0?10:days.toString().charAt(days.toString().length-1)))+")").prop("offsetTop"))+"px";
		for(var i=1; i<days.toString().length; i++) {
			$("#day_0").parent("td").prepend('<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="day_'+i+'"><span style="position:relative;">\n<div>0</div>\n<div>9</div>\n<div>8</div>\n<div>7</div>\n<div>6</div>\n<div>5</div>\n<div>4</div>\n<div>3</div>\n<div>2</div>\n<div>1</div>\n<div>0</div>\n</span></span>');
			$("#day_"+i+" span").get(0).style.top=(-$("#day_"+i+" span").find(":nth-child("+(11-parseInt(days<Math.pow(10, i-1)?10:days.toString().charAt(days.toString().length-i-1)))+")").prop("offsetTop"))+"px";
			$("#day_"+i+" span").data("val", parseInt(days<Math.pow(10, i-1)?10:days.toString().charAt(days.toString().length-i-1)));
		}
		$(".size_me_to_child").each(function() {
			this.style.height = $(this).children(0).children(0).outerHeight()+"px";
		});

		$("#second_0 span").get(0).style.top=(-$("#second_0 span").find(":nth-child("+(11-parseInt(seconds%10==0?10:(seconds<10?seconds.toString().charAt(0):seconds.toString().charAt(1))))+")").prop("offsetTop"))+"px";
		$("#second_0 span").data("val", parseInt(seconds%10==0?10:(seconds<10?seconds.toString().charAt(0):seconds.toString().charAt(1))));
		$("#second_1 span").get(0).style.top=(-$("#second_0 span").find(":nth-child("+(7-parseInt(seconds<10?6:seconds.toString().charAt(0)))+")").prop("offsetTop"))+"px";
		$("#second_1 span").data("val", parseInt(seconds<10?6:seconds.toString().charAt(0)));

		$("#minute_0 span").get(0).style.top=(-$("#minute_0 span").find(":nth-child("+(11-parseInt(minutes%10==0?10:(minutes<10?minutes.toString().charAt(0):minutes.toString().charAt(1))))+")").prop("offsetTop"))+"px";
		$("#minute_0 span").data("val", parseInt(minutes%10==0?10:(minutes<10?minutes.toString().charAt(0):minutes.toString().charAt(1))));
		$("#minute_1 span").get(0).style.top=(-$("#minute_0 span").find(":nth-child("+(7-parseInt(minutes<10?6:minutes.toString().charAt(0)))+")").prop("offsetTop"))+"px";
		$("#minute_1 span").data("val", parseInt(minutes<10?6:minutes.toString().charAt(0)));

		$("#hour_0 span").get(0).style.top=(-$("#hour_0 span").find(":nth-child("+(11-parseInt(hours%10==0?10:(hours<10?hours.toString().charAt(0):hours.toString().charAt(1))))+")").prop("offsetTop"))+"px";
		$("#hour_0 span").data("val", parseInt(hours%10==0?10:(hours<10?hours.toString().charAt(0):hours.toString().charAt(1))));
		$("#hour_1 span").get(0).style.top=(-$("#hour_0 span").find(":nth-child("+(4-parseInt(hours<10?10:hours.toString().charAt(0)))+")").prop("offsetTop"))+"px";
		$("#hour_1 span").data("val", parseInt(hours<10?3:hours.toString().charAt(0)));
		if(dif>0) {
			setInterval(function() {
				if($("#second_0 span").data("val")-1==0) {
					$("#second_0 span").animate({
						top:-$("#second_0 span").find(":nth-child(11)").prop("offsetTop")
					}, { 
						duration:700,
						complete:function() {
							this.style.top="0px";
						}
					});
					$("#second_0 span").data("val", 10);
				}
				/*
							if($("#second_1 span").data("val")-1==5) {
								
							}
							*/
				/* REMOVE THIS
				else {
					if($("#second_0 span").data("val")-1==9) {
						if($("#second_1 span").data("val")-1==0) {
							$("#second_1 span").animate({
								top:-$("#second_1 span").find(":nth-child(7)").prop("offsetTop")
							}, { 
								duration:700,
								complete:function() {
									this.style.top="0px";
								}
							});
							$("#second_1 span").data("val", 6);
						}
						else {

							if($("#second_1 span").data("val")-1==5) {
								if($("#minute_0 span").data("val")-1==0) {
									$("#minute_0 span").animate({
										top:-$("#minute_0 span").find(":nth-child(11)").prop("offsetTop")
									}, { 
										duration:700,
										complete:function() {
											this.style.top="0px";
										}
									});
									$("#minute_0 span").data("val", 10);
								}
								else {
									if($("#minute_0 span").data("val")-1==9) {
										if($("#minute_1 span").data("val")-1==0) {
											$("#minute_1 span").animate({
												top:-$("#minute_1 span").find(":nth-child(7)").prop("offsetTop")
											}, { 
												duration:700,
												complete:function() {
													this.style.top="0px";
												}
											});
											$("#minute_1 span").data("val", 6);
										}
										else {
											if($("#minute_1 span").data("val")-1==5) {
												if($("hour_0 span").data("val")-1==0) {
													$("#hour_0 span").animate({
													top:-$("#hour_0 span").find(":nth-child(11)").prop("offsetTop")
													}, { 
														duration:700,
														complete:function() {
															this.style.top="0px";
														}
													});
													$("#hour_0 span").data("val", 10);
												}
												else {
													if($("#hour_0 span").data("val")-1==9) {
														if($("#hour_1 span").data("val")-1==0) {
															$("#hour_1 span").animate({
															top:-$("#hour_1 span").find(":nth-child(4)").prop("offsetTop")
															}, { 
																duration:700,
																complete:function() {
																	this.style.top="0px";
																}
															});
															$("#hour_1 span").data("val", 3);

														}
														else {
															$("#hour_1 span").animate({
																top:-$("#hour_1 span").find(":nth-child("+(7-$("#hour_1 span").data("val")+1)+")").prop("offsetTop")
															}, { 
																duration:700
															});
															$("#hour_1 span").data("val", $("#hour_1 span").data("val")-1);

														}
													}
													$("#hour_0 span").animate({
														top:-$("#hour_0 span").find(":nth-child("+(11-$("#hour_0 span").data("val")+1)+")").prop("offsetTop")
													}, { 
														duration:700
													});
													$("#hour_0 span").data("val", $("#hour_0 span").data("val")-1);
												}
											}
											$("#minute_1 span").animate({
												top:-$("#minute_1 span").find(":nth-child("+(7-$("#minute_1 span").data("val")+1)+")").prop("offsetTop")
											}, { 
												duration:700
											});
											$("#minute_1 span").data("val", $("#minute_1 span").data("val")-1);
										}
									}
									$("#minute_0 span").animate({
										top:-$("#minute_0 span").find(":nth-child("+(11-$("#minute_0 span").data("val")+1)+")").prop("offsetTop")
									}, { 
										duration:700
									});
									$("#minute_0 span").data("val", $("#minute_0 span").data("val")-1);
								}
							}


							$("#second_1 span").animate({
								top:-$("#second_1 span").find(":nth-child("+(7-$("#second_1 span").data("val")+1)+")").prop("offsetTop")
							}, { 
								duration:700
							});
							$("#second_1 span").data("val", $("#second_1 span").data("val")-1);
						}
					}
					$("#second_0 span").animate({
						top:-$("#second_0 span").find(":nth-child("+(11-$("#second_0 span").data("val")+1)+")").prop("offsetTop")
					}, { 
						duration:700
					});
					$("#second_0 span").data("val", $("#second_0 span").data("val")-1);
				}
			}, 1000);
		}


		console.log(days+":"+hours+":"+minutes+":"+seconds);
		*/
	}
	</script>
</head>

<!-- || Main Page Content || -->
<body>
<?php include_once("tracking.php")  ?>

<div id="bg_stars"><div></div></div><div id="bg_earth"></div>

<?php
include_once("navbar.php")  ?>

<div style="font-family:Nexa; line-height:80%; color:#FFF; font-size:70px; margin:0 10px 0 10px; margin-top:50px; position:relative;"><!-- to be replaced with a jQuery automated solution -->
	WELCOME TO THE 2016<div style="font-weight:bold;">WORLD AFFAIRS CONFERENCE.</div>
	<!--
	<div style="position:absolute; right:0px; top:0px;">
	
		<table>
		
			<tr style="font-family:DIN; font-size:12px; text-align:center;">
				<td>
					DAYS
				</td>
				<td>
				</td>
				<td>
					HOURS
				</td>
				<td>
				</td>
				<td>
					MINUTES
				</td>
				<td>
				</td>
				<td>
					SECONDS
				</td>

			</tr>
			
			<tr style="text-align:center;">
				<td>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="day_0"><span style="position:relative;">
						<div>0</div>
						<div>9</div>
						<div>8</div>
						<div>7</div>
						<div>6</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
				</td>
				<td>
					:
				</td>
				<td>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="hour_1"><span style="position:relative;">
						<div>0</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="hour_0"><span style="position:relative;">
						<div>0</div>
						<div>9</div>
						<div>8</div>
						<div>7</div>
						<div>6</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
				</td>
				<td>
					:
				</td>
				<td>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="minute_1"><span style="position:relative;">
						<div>0</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="minute_0"><span style="position:relative;">
						<div>0</div>
						<div>9</div>
						<div>8</div>
						<div>7</div>
						<div>6</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
				</td>
				<td>
					:
				</td>
				<td>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="second_1"><span style="position:relative;">
						<div>0</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
					<span style="height:90px; overflow:hidden;" class="size_me_to_child" id="second_0"><span style="position:relative;">
						<div>0</div>
						<div>9</div>
						<div>8</div>
						<div>7</div>
						<div>6</div>
						<div>5</div>
						<div>4</div>
						<div>3</div>
						<div>2</div>
						<div>1</div>
						<div>0</div>
					</span></span>
				</td>
			</tr>
		</table>
		
		<span style="font-family:DIN; font-size:12px; float:right;">
			<a href="/live/" target="_blank"><span style="position:relative; line-height:16px; vertical-align:middle; cursor:pointer;">
				<span style="background-color:#4c9190;" class="under_button round"></span>
				<span style="background-color:#53b5b4; color:#FFF; font-weight:bold;" class="button round">LIVESTREAM</span>
			</span></a>
			<a href="/misc_files/del.pdf"><span style="position:relative; margin-left:10px; line-height:16px; vertical-align:middle; cursor:pointer;">
				<span style="background-color:#4c9190;" class="under_button round"></span>
				<span style="background-color:#53b5b4; color:#FFF; font-weight:bold;" class="button round">DELEGATE PACKAGE</span>
			</span></a>
		</span>
		
	</div>
<br />

<div style="font-size:50px; "><b>2015 Theme:</b> <span style="font-size:40;">THREATS TO HUMANITY</span></div>
<div style="font-size:50px; "><b>This Year's Keynote Speaker:</b> <span style="font-size:40;">Edward Snowden</span></div>
-->

</div>

<div style="font-family:Nexa; letter-spacing:5px; color:#FFF; margin-top:50px; position:absolute; bottom:30px; left:0px; width:100%;">
	<span style="width:33%; text-align:center; float:left;">
		<img src="img/learn.png" height="35px" /><br />
		LEARN
	</span>
	<span style="width:33%; text-align:center; float:left;">
		<img src="img/delegate.png" height="35px" /><br />
		DISCUSS
	</span>
	<span style="width:33%; text-align:center; float:left;">
		<img src="img/debate.png" height="35px" /><br />
		DEBATE
	</span>
</div>

<div style="position:absolute; top:100%; left:0px; width:100%; " id="second">
	<div style="background-color:rgba(0,0,0,0.4); padding-left:30px; padding-right:30px; padding-bottom:70px; box-sizing:border-box;">
		<table><tr>
		<td style="width:50%; padding:30px 0 30px 0; box-sizing:inherit;">
			<div style="text-align:left; color:#53b5b4; font-family:nexa; font-size:70px; font-weight:bold;">
				ABOUT WAC
			</div>
			<!--
			<div style="border-top:#FFF solid 13px; width:30%; margin:5px 0 9px 0;"></div>
			-->
			<div style="text-align:justify; color:#FFF; line-height:180%; font-size:15px; font-weight:300;">The World Affairs Conference (WAC) is Canada's oldest annual student-run current affairs conference. Annually held at Upper Canada College in Toronto, Canada, the World Affairs Conference connects over 800 students, with a common interest in current affairs, from across North America. A dedicated team of about 100 high school students from Upper Canada College, in coordination with Branksome Hall, voluntarily contribute their time for many months leading up to the day of WAC to ensure the success and positive experience for each delegate that attends the conference. We look forward to welcoming you to the 2016 conference. </div>
			</br>
			<a href="https://en.wikipedia.org/wiki/World_Affairs_Conference" target="_blank">
				<button type="button" class="btn coloured-button">Learn more about our history</button>
			</a>
		</td>
		<td style="width:10%; box-sizing:inherit;"></td>
		<td style="width:40%; text-align:center; box-sizing:inherit;">
			<span style="position:relative;">
				<!--<iframe width='270px' height='188px' frameBorder='0' style="position:absolute; top:100px; left:10px;" src='https://a.tiles.mapbox.com/v3/uccwac.g76g4pi2.html?secure=1#15/43.69293360219589/-79.40396547317505'></iframe> -->
				<iframe width='270px' height='188px' frameBorder='0' style="position:absolute; top:100px; left:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.963709333185!2d-79.40659468418339!3d43.690517858034156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b33684057775d%3A0x3dd2a9840eeeced9!2sUpper+Canada+College!5e0!3m2!1sen!2sca!4v1444665337883"></iframe>
				<img src="img/destination.png" style="margin:0 auto;" />
			</span>
		</td></tr></table>
	</div>
	</div>
<?php
include_once("footer.php")
?>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>