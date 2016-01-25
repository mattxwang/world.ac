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
		<title>Schedule - World Affairs Conference</title>
		<link rel="icon" href="css/favicon.ico" />
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet">
		<script src="js/google-analytics.js"></script>
		<link rel="stylesheet" href="css/base.css" />
		<style>
			.popover{
				color:black;
			}
			.keynote{
				background-color:#5E7794;
				text-align: center;
				font-weight: bold;
			}
			.plen{
				background-color:#5E7794;
				text-align: center;
				font-weight: bold;
			}
			.reg{
				background-color:#809C29;
				text-align: center;
				font-weight: bold;
			}
			.panel{
				background-color:#DC8944;
				text-align: center;
				font-weight: bold;
			}
			.lunch{
				background-color:#C61B26;
				text-align: center;
				font-weight: bold;
			}
			.place{
				text-align: left;
			}
			td{
				text-align: center;
			}
		</style>
	</head>

	<body style="position:relative;">
		<?php include_once("import_info.php") ?>
		<?php include_once("navbar.php") ?>

		<div class = "container">
			<h1 style="text-align: center;">Keynote Address Schedule</h1>
			<h6 style="text-align: center;">Click on a block to learn more</h6>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<td></td>
						<td>Coat Check & Seating (6:30-7:00)</td>
						<td>Keynote Address (7:00-7:30)</td>
						<td>Question and Answer (7:30-8:00)</td>
					</tr>
					<tr>
						<td class="place">Foyer</td>
						<td class="reg">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Coat Check" data-content='The Foyer will have a complimentary coat check service.' data-html="true">Coat Check</a>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Laidlaw Hall</td>
						<td class="reg">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Seating" data-content='Seating will begin in Laidlaw Hall.' data-html="true">Seating</a>
						</td>
						<td class="keynote">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Keynote Address" data-content='The <a href="keynote.php"><b>Keynote Address</b></a> will feature <a href="keynote.php">Nanor Balyozian</a> discussing the refugee crisis. It is open to the general public. ' data-html="true">Keynote Address</a>
						</td>
						<td class="keynote">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Question Period" data-content='After the <a href="keynote.php"><b>Keynote Address</b></a>, Nanor Balyozian will take questions from the audience in Laidlaw Hall. ' data-html="true">Question Period</a>
						</td>
					</tr>
				</table>
			</div>
			</br>
			<h1 style="text-align: center;">Conference Day Schedule</h1>
			<h6 style="text-align: center;">Click on a block to learn more</h6>
			<div class = "table-responsive">
				<table class = "table">
					<tr>
						<td></td>
						<td>8:30-9:00</td>
						<td>9:00-10:15</td>
						<td>10:30-11:30</td>
						<td>11:35-12:35</td>
						<td>12:35-1:20</td>
						<td>1:20-2:20</td>
						<td>2:25-3:25</td>
					</tr>
					<tr>
						<td class="place">CC3</td>
						<td></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="China Economic Plenary" data-content='The first <a href="plenaries.php"><b>China plenary session</b></a> will be held on the third floor in room CC3, featuring Margaret Cornish and Loren Brandt discussing China and its effect on the global economy.' data-html="true">China Plenary 1</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="China Economic Plenary" data-content='The second <a href="plenaries.php"><b>China plenary session</b></a> will be held on the third floor in room CC3, featuring Margaret Cornish and Loren Brandt discussing China and its effect on the global economy.' data-html="true">China Plenary 2</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="place">David Chu Theatre</td>
						<td></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Nuclear Proliferation Plenary" data-content='The first <a href="plenaries.php"><b>Nuclear Proliferation plenary session</b></a> will be held on the basement floor in the David Chu Theatre, featuring Paul Meyer and James M. Acton discussing the future of Nuclear Proliferation.' data-html="true">Nuclear Proliferation 1</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Nuclear Proliferation Plenary" data-content='The first <a href="plenaries.php"><b>Nuclear Proliferation plenary session</b></a> will be held on the basement floor in the David Chu Theatre, featuring Paul Meyer and James M. Acton discussing the future of Nuclear Proliferation.' data-html="true">Nuclear Proliferation 2</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Foyer</td>
						<td class="reg">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Delegate/Faculty Registration" data-content='Registered Delegates and Faculty Members should drop by the Student Center to pick up their delegate packages and nametags.' data-html="true">Delegate/Faculty Reg.</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Laidlaw Hall</td>
						<td></td>
						<td class="panel">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Opening Panel: The Future of the Internet" data-content='The <a href="opening.php"><b>opening panel</b></a> in Laidlaw Hall features Ron Deibert and Graeme Bunton discussing the Future of the Internet. It has already revolutionized the world; what will it do next?' data-html="true">Opening Panel</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Refugee Plenary" data-content='The first <a href="plenaries.php"><b>refugee plenary session</b></a> will be held in Laidlaw Hall, featuring Chris Alexander and Ratna Omidvar discussing the Refugee crisis on both a global and Canadian scale.' data-html="true">Refugee Plenary 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Refugee Plenary" data-content='The first <a href="plenaries.php"><b>refugee plenary session</b></a> will be held in Laidlaw Hall, featuring Chris Alexander and Ratna Omidvar discussing the Refugee crisis on both a global and Canadian scale.' data-html="true">Refugee Plenary 2</a>
						</td>
						<td></td>
						<td></td>
						<td class="panel">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Closing Panel: Sami Jo Small" data-content='The <a href="closing.php"><b>closing panel</b></a> in Laidlaw Hall features Olympic Gold Medalist Sami Jo Small, and a presentation that will inspire and engage delegates for an outstanding finish to the Conference.' data-html="true">Closing Panel</a>
						</td>
					</tr>
					<tr>
						<td class="place">Lecture Theatre</td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Environmental Plenary" data-content='The first <a href="plenaries.php"><b>environmental plenary session</b></a> will be held in the Lecture Theatre on the second floor, with John Coyne and Bill Shireman discussing the impacts of environmental change.' data-html="true">Environmental Plenary 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Environmental Plenary" data-content='The second <a href="plenaries.php"><b>environmental plenary session</b></a> will be held in the Lecture Theatre on the second floor, with John Coyne and Bill Shireman discussing the impacts of environmental change.' data-html="true">Environmental Plenary 2</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Lett Gym</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Delegate Lunch" data-content='Delegates will have a buffet-style lunch in the Lett Gym. A vegetarian option will be available.' data-html="true">Delegate Lunch</a>
						</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Library</td>
						<td></td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Gender Plenary" data-content='The second <a href="plenaries.php"><b>gender issues plenary session</b></a> will be held in the library, with Emanuela Heyninck and Susannah Gouinlock discussing gender issues that affect society today.' data-html="true">Gender Plenary 2</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Old Gym</td>
						<td></td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Environmental Plenary" data-content='The first <a href="plenaries.php"><b>gender issues plenary session</b></a> will be held in the Old Gym, with Emanuela Heyninck and Susannah Gouinlock discussing gender issues that affect society today.' data-html="true">Gender Plenary 1</a>
						</td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Drone Plenary" data-content='The first <a href="plenaries.php"><b>drone plenary session</b></a> will be held in the Old Gym, featuring Luke Gregory and Steven Lee discussing the impact of drones in everyday and governmental life.' data-html="true">Drones Plenary 1</a>
						</td>
						<td></td>
						<td class="plen">
						<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Drone Plenary" data-content='The second <a href="plenaries.php"><b>drone plenary session</b></a> will be held in the Old Gym, featuring Luke Gregory and Steven Lee discussing the impact of drones in everyday and governmental life.' data-html="true">Drone Plenary 2</a>
						</td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Student Center</td>
						<td class="reg">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="UCC Registration" data-content='UCC students/WAC staff should drop by the Student Center to pick up their delegate packages and nametags.' data-html="true">UCC Delegate/Staff Reg.</a>
						</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td class="place">Upper Dining Hall</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="lunch">
							<a tabindex="0" role="button" data-trigger="focus" data-toggle="popover" data-container="body" data-placement="auto top" title="Faculty Lunch" data-content='Faculty will have a buffet-style lunch in the Upper Dining Hall. A vegetarian option will be available.' data-html="true">Faculty Lunch</a>
						</td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>


		 	<script src="js/jquery.js"></script>
			<script src="js/jquery.easing.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/nav-collapse.js"></script>
			<script>
				$(function () {
					$('[data-toggle="popover"]').popover()
				})
			</script>
		</div>
		<?php include_once("footer.php") ?>
	</body>
</html>
