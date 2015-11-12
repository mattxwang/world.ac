<?php
$rando = rand(1,2);
//$randa = rand(1,3);
if($rando == 1){
	$teamNames = "Matthew Wang and Jack Sarick";
  /*
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
  */
}
elseif($rando == 2){
	$teamNames = "Jack Sarick and Matthew Wang";
  /*
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
  */
}

?>
<div class = "row hidden-xs" style = "background-color:rgba(0,0,0,0.6);">
  <div class = "col-md-2">
    <a href="#">REGISTER</a>
  </div>
  <div class = "col-md-2">
    <a href="about_us.php">WAC TEAM</a>
  </div>
  <div class = "col-md-2">
    <a href="contact_us.php">CONTACT US</a>
  </div>
  <div class = "col-md-6" style = "text-align:right">
    Developed by this year's WAC web design team, <?php echo $teamNames; ?>
  </div>
</div>
