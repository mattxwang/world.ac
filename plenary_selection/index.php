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
		<form class="form-signin" action="plenary_selection_function.php" method="post">
			<select class="form-control" id="plen_1" name="plen_1" required="">
				<option value="A">China Plenary</option>
				<option value="B">Drone Plenary</option>
				<option value="C">Environmental Plenary</option>
				<option value="D">Gender Issues Plenary</option>
				<option value="E">Nuclear Plenary</option>
				<option value="F">Refugee Plenary</option>
			</select>
			<select class="form-control" id="plen_2" name="plen_2" required="">
				<option value="A">China Plenary</option>
				<option value="B">Drone Plenary</option>
				<option value="C">Environmental Plenary</option>
				<option value="D">Gender Issues Plenary</option>
				<option value="E">Nuclear Plenary</option>
				<option value="F">Refugee Plenary</option>
			</select>
			<select class="form-control" id="plen_3" name="plen_3" required="">
				<option value="A">China Plenary</option>
				<option value="B">Drone Plenary</option>
				<option value="C">Environmental Plenary</option>
				<option value="D">Gender Issues Plenary</option>
				<option value="E">Nuclear Plenary</option>
				<option value="F">Refugee Plenary</option>
			</select>
			<select class="form-control" id="plen_4" name="plen_4" required="">
				<option value="A">China Plenary</option>
				<option value="B">Drone Plenary</option>
				<option value="C">Environmental Plenary</option>
				<option value="D">Gender Issues Plenary</option>
				<option value="E">Nuclear Plenary</option>
				<option value="F">Refugee Plenary</option>
			</select>
			<div class = "row">
				<div class = "col-md-12">
					<button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Register</button>
				</div>
			</div>
		</form>
	</body>
</html>