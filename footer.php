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
<div>
<nav class="navbar navbar-default bottom-fixed navbar-inverse navbar-footer hidden-xs" style="background-color:transparent; ">
  <div class="container-fluid navbar-footer" style ="text-algin:center">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2" >
      <ul class="nav navbar-nav">
        <li><a href="about_us.php">WAC TEAM</a></li>
        <li><a href="#">PLENARIES</a></li>
        <li><a href="#">REGISTER</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <p class="navbar-text" style ="font-size:11px; vertical-align:middle; display:table-cell;">Developed by this year's WAC web design team, <?php echo $teamNames; ?>
        <!--</br>
        With help from last year's team: <?php echo $lteamNames; ?></p>-->
      </ul>
     </div>
 </div>
</nav>

<!-- disabled for now
<div class ="visible-xs vertical-align:bottom">
<p style ="font-size:11px; text-align:left;color:#FFFFFF">Developed by this year's WAC web design team, <?php echo $teamNames; ?></p>
</div>
-->
</div>