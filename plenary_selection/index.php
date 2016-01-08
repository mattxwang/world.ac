<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="World Affairs Conference">
		<title>Plenary Selection - World Affairs Conference</title>
		<link rel="icon" href="../css/favicon.ico" />
		<link href="../css/bootstrap/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/base.css" />
		<script src="../js/google_analytics.js"></script>
	</head>

	<body>
		<script type="text/javascript">
			//http://stackoverflow.com/questions/17973236/enable-or-disable-option-from-select
			function toggleDisability(selectElement){
				var arraySelects = document.getElementsByClassName('form-control');
				var selectedOption = selectElement.selectedIndex;
				for(var i=0; i<arraySelects.length; i++) {
					if(arraySelects[i] == selectElement)
					continue;

					arraySelects[i].options[selectedOption].disabled = true;
				}
			}
		</script>
		<div class="container">
			<div style="text-align:center">
				<h2>World Affairs Conference</h2>
				<h1>Plenary Selection</h1>
				<h5>Select which plenaries you would like to attend, in preferential order.</h5>
				<h5>Find out more about each plenary <a href="../plenaries.php">here</a></h5>
			</div>

			<form class="form-signin" action="plenary_selection_function.php" method="post">
				<h2>School Email</h2>
				<input type="email" id="email" class="form-control" placeholder="first.last@ucc.on.ca" name="email" required="" autofocus="">
				<h2>Plenary 1</h2>
				<select onchange="toggleDisability(this);" class="form-control" id="plen_1" name="plen_1" required="">
					<option value = "NULL">Select your 1st choice.</option>
					<option value="A">China Plenary</option>
					<option value="B">Drone Plenary</option>
					<option value="C">Environmental Plenary</option>
					<option value="D">Gender Issues Plenary</option>
					<option value="E">Nuclear Plenary</option>
					<option value="F">Refugee Plenary</option>
				</select>
				<h2>Plenary 2</h2>
				<select onchange="toggleDisability(this);" class="form-control" id="plen_2" name="plen_2" required="">
					<option value = "NULL">Select your 2nd choice.</option>
					<option value="A">China Plenary</option>
					<option value="B">Drone Plenary</option>
					<option value="C">Environmental Plenary</option>
					<option value="D">Gender Issues Plenary</option>
					<option value="E">Nuclear Plenary</option>
					<option value="F">Refugee Plenary</option>
				</select>
				<h2>Plenary 3</h2>
				<select onchange="toggleDisability(this);" class="form-control" id="plen_3" name="plen_3" required="">
					<option value = "NULL">Select your 3rd choice.</option>
					<option value="A">China Plenary</option>
					<option value="B">Drone Plenary</option>
					<option value="C">Environmental Plenary</option>
					<option value="D">Gender Issues Plenary</option>
					<option value="E">Nuclear Plenary</option>
					<option value="F">Refugee Plenary</option>
				</select>
				<h2>Plenary 4</h2>
				<select onchange="toggleDisability(this);" class="form-control" id="plen_4" name="plen_4" required="">
					<option value = "NULL">Select your 4th choice.</option>
					<option value="A">China Plenary</option>
					<option value="B">Drone Plenary</option>
					<option value="C">Environmental Plenary</option>
					<option value="D">Gender Issues Plenary</option>
					<option value="E">Nuclear Plenary</option>
					<option value="F">Refugee Plenary</option>
				</select>
				<h5>Please ensure that you've chosen 4 different plenaries, in preferential order.</h5>
				<h5>We will try to assign everybody their best preferences, but we cannot guarantee it.</h5>
				<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
			</form>
				<h2>Any more questions?</h2>
				<h5>Shoot an email to <a href="mailto:matthew.wang@ucc.on.ca">Matthew Wang</a></h5>
		</div>
	</body>
</html>