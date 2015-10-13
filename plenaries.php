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
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,700,400' rel='stylesheet' type='text/css'>
	<title>World Affairs Conference - Plenaries</title>
	<link rel="stylesheet" href="css/base.css" />
	<style type="text/css">
	.panel_container{
		vertical-align:top;
		position:relative;
	}
	.description div.bgimg{
		height:15px;
		-webkit-transition:all 0.2s ease-in-out;
		-moz-transition:all 0.2s ease-in-out;
		-o-transition:all 0.2s ease-in-out;
		transition:all 0.2s ease-in-out;
	}
	.description:hover div.bgimg{
		height:60px;
	}
	</style>
	<link rel="icon" href="css/favicon.ico" />
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript">
	function onloadresize() {
		$(".row_container").children("td.panel_container").height($(".row_container").innerHeight());
		$(".title_container").each(function() {
			$(this).css("left", $(this).parent().innerWidth()/2-$(this).outerWidth()/2);
		});
		$(".title_container").parent().css("height", $(".title_container").outerHeight(true));
	}
	window.onresize = function() {
		onloadresize();
	}
	window.onload=function() {
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
			$(".border_bottom").remove();
		}
		onloadresize();
	}
	</script>
</head>

<!-- || Main Page Content || -->
<body style="position:relative;">

<?php include_once("tracking.php") ?>

<!-- | Menu Bar | -->
<table style="background-color:#fff; border-collapse:collapse;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="menu_button_box" width=200px style="width:15%;padding:10px;padding-right:6px;">
			<a href="./"><img src="img/logo.png" height="50"/></a>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="./">HOME</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="keynote.php">KEYNOTE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="morning.php">MORNING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="closing.php">CLOSING PANEL</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td class="menu_button_box" style="color:#808080; font-weight:bold;">PLENARIES
			<span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#53b5b4; height:3px; opacity:1;" class="border_bottom"></span>
		</td>
		<td class="menu_button_box"><a class="menu_button_link" href="schedule.php">SCHEDULE</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"
			></span></td>
		<td class="menu_button_box"><a class="menu_button_link" href="faq.php">FAQ</a><span style="position:absolute; bottom:0px; left:0px; width:100%; background-color:#CCC; height:3px;" class="border_bottom"></span></td>
		<td style="width:100%;"></td>
		<td class="menu_button_box"><img height=40px src="img/ucc.png" /></td>
		<td class="menu_button_box">
			<span style="position:relative; opacity:1;">
				<span style="position:absolute; bottom:-3px; left:0px; height:10px; background-color:#4c9190; width:100%;"></span>
				<a href="misc_files/reg.pdf"><span style="background-color:#53b5b4; padding:10px; color:#FFF; position:relative;" class="button_top">REGISTER</span></a>
			</span>
		</td>
	</tr>
</table> 


<!-- | Page Content | -->
<table style="width:100%;padding-top:14px; margin-bottom:100px;">
<tr><!-- 2 Plenary Section Slot -->


<!-- 1. DEMOCRACY -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				DEMOCRACY FALTERING
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		An outdated framework?
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/democracy.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">Democracy has long been held as the zenith of political development. However, as a system, it is as a precarious point in its history. Western democracies - including Ontario and Quebec - have incurred budget deficits of monumental size as they attempt to meet their citizens demands. Simultaneously, its ineffectiveness in the Arab Spring uprisings has cast doubt over its viability in certain regions. Some have suggested that society would be better off if we chose to give up some of our personal freedoms and installed a system that was more technocratic than the current style. Therefore, this plenary aims to examine the future of democracy; can we afford to keep the status quo?</div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Konrad Yakabuski</div></center><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Dr. Irvin Studin</div></center><div style="font-size:12px; padding:4px; text-align:center;"><span>Dr. Irvin Studin is a fellow with the School of Public Policy and Governance at the University of Toronto. He is the President of the Institute for 21st Century Questions and Editor-in-Chief and Publisher of Global Brief magazine and has worked with a number of federal departments in both Canada and Australia in the Privy Council Office. As the first ever recruit of the Canadian government's Recruitment of Policy Leaders programme, he co-authored Canada's 2004 national security policy, and principal-authored Australia's 2006 national counter-terrorism policy. He holds degrees from the Schulich School of Business, the London School of Economics, and the University of Oxford, where he studied on a Rhodes Scholarship. His PhD is from Osgoode Hall Law School, where he earned the Governor-General's Gold Medal.</span></div></td>
</tr></table>

</td></tr>
</table>

</td>

<!--2. CRITICAL NECESSITIES -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				THE CRITICAL NECESSITIES
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		Global food and water security
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/food.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">Humanity is suffering from a resource management crisis, and at the centre of this issue is the question of the continuing availability of food and potable water. This plenary will feature one speaker discussing food security, and one discussing water scarcity. Our approach to these issues will be pivotal in determining the future course of global events as nations come face to face with their decreasing capacity to provide basic necessities.<br><br></div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Professor Hugo Melgar-Qui&ntilde;onez</div></center><div style="font-size:12px; padding:4px; text-align:justify;">Professor Melgar-Qui&ntilde;onez is the Director of McGill University&#8217;s Institute for Global Food security and an Associate Professor at McGill University. Born and raised in Guatemala, Professor Melgar-Qui&ntilde;onez holds a Medical Degree and Doctorate of Sciences Degree both from the Friedrich Schiller University of Germany.  Prior to joining McGill he was Associate Professor and Extension Specialist in the Department of Human Nutrition at The Ohio State University. His research focuses on food insecurity in developing countries where he continues to play a critical role in the development and validation of household food security surveys for the World Bank, USAID and for FAO and for several countries including Brazil, Bolivia, Kenya, Ghana, Mexico, Guatemala, the Philippines, Burkina Faso and India and China.</div></td>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Maurice Moloney</div></center><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
</tr></table>

</td></tr>
</table>

</td>
</tr>














<tr class="row_container">
<!--3. PEACE AND SPORTS -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				PEACE AND SPORTS
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		Necessary peace measure or lavish squandering?
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/sport.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">A plenary focusing on International Sporting Events may seem incongruous with the theme; this discussion is our wildcard this year. At least one large-scale sporting event occur almost every year, namely the Olympics, FIFA and the PanAm Games. On one hand, these events bring people of all nationalities together to share a common passion, thereby improving global interactions. On the other hand, they may be a poor vessel for peace. Empirically, such events have been associated with serious economic impacts on involved countries and a host of other issues; recently, in Sochi and Rio de Janeiro for instance, these issues have included allegations of widespread human rights violations and corruption.</div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Alan R. Sanderson</div><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></center></td>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Doug Smith</div><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></center></td>
</tr></table>

</td></tr>
</table>

</td>

<!-- 4. DIAGNOSING GLOBAL HEALTH -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				DIAGNOSING GLOBAL HEALTH
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		A checkup on current practices
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/health.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">Our ability to improve global health through the eradication of diseases and the betterment of living conditions is among the single greatest collective human causes. The World Health Organization and similar bodies are effectively responsible for keeping the course. They are symbolic of a large-scale, international approach to solving health problems, in contrast with domestic, community-based initiatives. This plenary aims to take a snapshot of the efficacy of our approach by presenting two sides of the issue: one in favour of internationalism, and one that is skeptical of current paradigms.</div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Dr. Onil Bhattacharyya</div></center><div style="font-size:12px; padding:4px; text-align:justify;">Dr. Bhattacharyya completed his B.Sc. (in biochemistry) at McGill, his MD at the University of Montreal and his PhD (in health policy, management and evaluation) at the University of Toronto. He&#8217;s been part of the DFCM since 2006 where he is an assistant professor in The Department of Family and Community and in Health Policy, Management and Evaluation. He is also a clinician scientist at St. Michael&#8217;s hospital. To improve methods in developed communities, he has been part of several projects such as Hacking Health in Toronto where he was challenged to improve cares for more complex patients. Dr. Bhattacharyya has also been part of the District Evaluation Study on Health where he was co-principal. DESH&#8217;s goal is to replicate the methods found in their India&#8217;s research in other countries to then improve their health cares. </div>
</center></td>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Dr. Donald Cole</div></center><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
</tr></table>

</td></tr>
</table>

</td>
</tr>




<tr class="row_container">
<!--5. FUTURE TERRORISM -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				FUTURE TERRORISM
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		What will terror look like?
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/terror.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">Since the events of September 11, 2001, Terrorism has been at the forefront of global issues. With the effective end of the US War on Terror and the withdrawal of Allied group troops in the Middle East, we have transitioned into a new stage. The nature of modern-day terrorism is an uncertain, intricate and ever-evolving threat. Equally uncertain is the extent of the measures necessary to combat it. From where will future terrorism originate? And need we sacrifice civil liberties to protect ourselves?
</div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Syed Soharwardy</div></center><div style="font-size:12px; padding:4px; text-align:justify;">Syed is the founder of the "Islamic Supreme Council of Canada" (ISCC) and the group "Muslims against Terrorism" (MAT). The ISCC was founded to be the leading organisation in Canada to help citizens understand the teachings of Islam and issues of the Muslim community, as well as to provide guidance on the issues related to Muslims. MAT is dedicated to providing Muslim perspectives on issues related to terrorism. Syed is a dedicated activist towards keeping the Muslim community as well all Canadians safe from terrorists. He believes that early intervention is needed to stop the threat of terrorism in our society, and that the Canadian government has resources to help the cause. Further, Soharwardy believes in peace between all Canadians no matter their culture or religion, and more importantly peace between all countries around the world. </div></td>
<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Rex Brynen</div></center><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
</tr></table>

</td></tr>
</table>

</td>

<!-- 6. THE KASHMIR DISPUTE -->
<td style="width:50%;padding:4px;" class="panel_container">
<table style="background-color:rgba(0,0,0,0.1);width:100%; border-radius:5px; height:100%;">
<tr><td style="text-align:left;color:#ffffff;">
	<div style="text-align:center; padding-bottom:10px; position:absolute; top:4px;" class="title_container">
		<span style="position:relative; margin-bottom:10px;">
			<span style="width:100%; position:absolute; background-color:rgba(0,0,0,0.1); height:4px; top:0px; left:0px;"></span>
				<span style="background-color:#53b5b4; padding:15px; font-family:Raleway; font-size:18px; color:#FFF; font-weight:bold;">
				THE KASHMIR DISPUTE
				</span>
			<div style="background-image:url(img/ribbon_tail.png); background-repeat:repeat-x; height:10px;"></div>
		</span><br />
		A complex conflict with potentially catastrophic fallout
	</div>
	<!-- &nbsp&nbsp <span style="color:#6E6E6E;"> with:</span> <span style="color:#ADACAD;">John Smith and Bob Smitherman</span> -->
</td></tr>
<tr><td>
	
<table style="background-color:#ffffff; width:100%; border-collapse:collapse;" cellpadding="0" cellspacing="0" class="description"><tr>
<td style="color:#888; font-style:italic; line-height:140%; font-size:16px; box-sizing:border-box;"><div class="bgimg" style=" background-image:url(img/plen_photo/kashmir.png); background-size:cover;">&nbsp;</div><div style="padding:30px;font-style:normal;">As British Colonialism came to a close in India, two countries stood where there was once one. Pakistan seceded with the intention of establishing a nation for India's Muslim. With that secession, the ownership of Kashmir, a border region, became the subject of contentious dispute that continues to destabilize the two nations. In short, the dispute in Kashmir has massive global implications. Both India and Pakistan stand ready to destroy each other with nuclear force if they cannot reach a compromise. A nuclear outcome in Kashmir has the potential to cause the extinction of the human race.   
</div></td>
</tr></table>

</td></tr>
<tr><td>

<table style="width:100%;padding-top:10px; color:#FFF;"><tr>
	<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Kenneth MacDonald</div><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
	<td style="width:50%; padding-bottom:15px; vertical-align:top;"><center><img width=75px src="img/avatar.png"/><div style="font-weight:bold; margin:6px 0 6px 0;">Salman Zafar</div><div style="font-size:12px; padding:4px; text-align:center;"><span style="font-style:italic;">Speaker bio coming soon.</span></div></td>
</tr></table>

</td></tr>
</table>

</td>
</tr>

</table>

<div>&nbsp;</div>
<div style="background-color:rgba(0,0,0,0.3); color:#FFF; padding:0 30px 0 30px; vertical-align:middle; box-sizing:border-box; white-space:nowrap; position:absolute; bottom:0px; left:0px; width:100%;">
		<span class="footer" style="border-left:none;">
			<a href="http://www.ucc.on.ca">
				UPPER CANADA COLLEGE
			</a>
		</span>
		<span class="footer">
			<a href="plenaries.php">
				PLENARIES
			</a>
		</span>
		<span class="footer">
			<a href="misc_files/reg.pdf">
				REGISTER
			</a>
		</span>

<?php
$rando = rand(1,3);
if($rando == 1){
	$teamNames = "Nick Elder, Derek Lam and Kinton Cheung";
}
elseif($rando == 2){
	$teamNames = "Derek Lam, Kinton Cheung and Nick Elder";
}
elseif($rando == 3){
	$teamNames = "Kinton Cheung, Nick Elder and Derek Lam";
}
?>

		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br /><?php echo $teamNames; ?></span>
</div>

</body>
</html>