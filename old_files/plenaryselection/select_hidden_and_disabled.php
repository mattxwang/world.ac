<?php 
$enabled = false;
if($enabled){
?>

<html>
<head>
<title>WAC Plenary Selections</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
		var $selects = $('select');
		$('select').change(function () {
		    $('option:hidden', $selects).each(function () {
		        var self = this,
		            toShow = true;
		        $selects.not($(this).parent()).each(function () {
		            if (self.value == this.value) toShow = false;
		        })
		        if (toShow) $(this).show();
		    });
		    if (this.value != 0) //to keep default option available
		      $selects.not(this).children('option[value=' + this.value + ']').hide();
		});

$("#alert_me").fadeIn({ duration: 500, queue: false }).css('display', 'none').slideDown(500).delay(8000).animate({ height: 'toggle', opacity: 'toggle' }, 'slow');

});
</script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
#drop{
	width:500px;
	height:40px;
	padding:30px;
	padding-top:10px;
	padding-bottom:10px;
	background-color:#70CC79;
	border:none;
	color:#ffffff;
	margin-bottom:15px;
	border-radius: none;
	-webkit-border-radius:0px;
	-webkit-appearance:none; 
	font-size: 15px;
}
#submit{
	width:500px;
	height:40px;
	padding:30px;
	padding-top:10px;
	padding-bottom:10px;
	background-color:#CC5A5F;
	border:none;
	color:#ffffff;
	margin-bottom:15px;
	border-radius: none;
	-webkit-border-radius:0px;
	-webkit-appearance:none; 
	font-size: 15px;
}
</style>
</head>
<body style="background-image:url('bg.png'); background-size:cover;">
<?php 
require_once('sql.php');
include_once("../hit_counter.php");
$fetch = sqlQuery($connection, "SELECT * FROM students WHERE hashed = '".mysqli_real_escape_string($connection, $_GET['s'])."';");

//If we have a valid user
if(strstr($fetch[0]['email'], "@")){
?>

<center><img style="padding-top:40px;" width=500px src="logo.png"></center>
<!-- <center> <p style="color:#ffffff;font-size:20px;background-color:#2B272B;width:70%;padding-top:7px;padding-bottom:7px;">Please select the plenary sessions you are interested in order. You will be attending 3 plenaries at WAC. </p> </center> -->

<?php 
if(!isset($_POST['first']) && !isset($_POST['second']) && !isset($_POST['third']) && !isset($_POST['fourth'])){
?>
<center><br/><div style="margin-top:3px;color:#ffffff;font-family: 'Open Sans', sans-serif;font-size:13px;width:500px;background-color:#6CAAAC;padding:12px;padding-left:2px;padding-right:0px;">Hello <?php echo $fetch[0]['email']; ?>, please select your plenaries.</div></center>
<br/>

<div id="selector">
<center>
<form method="post">
<select id="drop" name="first">
	<option value = "NULL">Select your 1st choice.</option>
	<option value = "A">#1) Peace, Love, and Sports</option>
	<option value = "B">#1) Faltering Democracy</option>
	<option value = "C">#1) Terrorism</option>
	<option value = "D">#1) The Course of Global Health</option>
	<option value = "E">#1) Food and Water Scarcity</option>
	<option value = "F">#1) Kashmir: A Region Divided</option>
</select>
<br />
<select id="drop" name="second">
	<option value = "NULL">Select your 2nd choice.</option>
	<option value = "A">#2) Peace, Love, and Sports</option>
	<option value = "B">#2) Faltering Democracy</option>
	<option value = "C">#2) Terrorism</option>
	<option value = "D">#2) The Course of Global Health</option>
	<option value = "E">#2) Food and Water Scarcity</option>
	<option value = "F">#2) Kashmir: A Region Divided</option>
</select>
<br />
<select id="drop" name="third">
	<option value = "NULL">Select your 3rd choice.</option>
	<option value = "A">#3) Peace, Love, and Sports</option>
	<option value = "B">#3) Faltering Democracy</option>
	<option value = "C">#3) Terrorism</option>
	<option value = "D">#3) The Course of Global Health</option>
	<option value = "E">#3) Food and Water Scarcity</option>
	<option value = "F">#3) Kashmir: A Region Divided</option>
</select>
<br />
<select id="drop" name="fourth" style="margin-bottom:5px;">
	<option value = "NULL">Select your 4th choice.</option>
	<option value = "A">#4) Peace, Love, and Sports</option>
	<option value = "B">#4) Faltering Democracy</option>
	<option value = "C">#4) Terrorism</option>
	<option value = "D">#4) The Course of Global Health</option>
	<option value = "E">#4) Food and Water Scarcity</option>
	<option value = "F">#4) Kashmir: A Region Divided</option>
</select>
<br />
<center><div style="width:500px;padding-bottom:5px;"><hr /></div></center>
<input id="submit" type="submit" value="Submit Plenary Choices">
</form>
</center>
</div>
<?php 
}//end of "If selections are required"


//FORM SUBMIT ACTION
if(isset($_POST['first']) && isset($_POST['second']) && isset($_POST['third']) && isset($_POST['fourth']) && $_POST['fourth'] != "NULL" && $_POST['third'] != "NULL" && $_POST['second'] != "NULL" && $_POST['first'] != "NULL"){


function has_dupes($array){
 $dupe_array = array();
 foreach($array as $val){
  if(++$dupe_array[$val] > 1){
   return true;
  }
 }
 return false;
}

$acceptbl = array("A", "B", "C", "D", "E", "F");

if(!has_dupes($_POST) && in_array($_POST['first'], $acceptbl) && in_array($_POST['second'], $acceptbl) && in_array($_POST['third'], $acceptbl) && in_array($_POST['fourth'], $acceptbl)){
	foreach($_POST AS &$p) {
		$p = mysqli_real_escape_string($connection, $p);
	}
	mysqli_query($connection, "UPDATE `students` SET `plen1` = '".$_POST['first']."', `plen2` = '".$_POST['second']."', `plen3` = '".$_POST['third']."', `plen4` = '".$_POST['fourth']."' WHERE `hashed` = '".$_GET['s']."';");
	echo "<center><br /><div style='color:#ffffff;background-color:#70CC79;width:500px;padding:25px;font-family: \"Open Sans\", sans-serif;font-size:15px;'>Your plenary selections have been successfully submitted. You can return to this page to update your selections until January 17th 2015. Do not share your secret link with anyone.</div></center>";
	echo '<meta http-equiv="refresh" content="10;url=http://www.world.ac" />';
	}
	else{
		if(isset($_POST['first'])){
			echo "<script>alert('Error: Unknown Error')</script>";
			echo '<meta http-equiv="refresh" content="0;url=select.php?s='.$_GET['s'].'" />';
		}
	}


}
else{
	if(isset($_POST['first'])){
	echo "<script>alert('Error: You did not select 4 valid choices.')</script>";
	echo '<meta http-equiv="refresh" content="0;url=select.php?s='.$_GET['s'].'" />';
	}
}

}
else{
	echo "<div style='color:#ffffff;'>INVALID USER</div>";
	die();
}
?>



</body>
</html>
<?php 
}//full file enabler
?>