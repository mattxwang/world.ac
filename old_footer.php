<div style="background-color:rgba(0,0,0,0.6); color:#FFF; padding:0 30px 0 30px; vertical-align:middle; white-space:nowrap;">
			<span class="footer" style="border-left:none;">
				<a href="http://www.ucc.on.ca">
					UPPER CANADA COLLEGE
				</a>
			</span>
			<span class="footer">
				<a href="construction.php">
					PLENARIES
				</a>
			</span>
			<span class="footer">
				<a href="construction.php">
					REGISTER
				</a>
			</span>

<?php
$rando = rand(1,2);
$randa = rand(1,3);
if($rando == 1){
	$teamNames = "Jack Sarick, and Matthew Wang";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}
elseif($rando == 2){
	$teamNames = "Matthew Wang, and Jack Sarick";
	if($randa == 1){
		$lteamNames = "Nick Elder, Derek Lam, and Kinton Cheung";
	}
	elseif($randa == 2){
		$lteamNames = "Derek Lam, Kinton Cheung, and Nick Elder";
	}
	elseif($randa == 3){
		$lteamNames = "Kinton Cheung, Nick Elder, and Derek Lam";
	}
}

?>
		
		<span style="text-align:right; width:100%; color:#888; font-size:11px; vertical-align:middle; display:table-cell;">Handmade by the WAC Webmaster Team:<br /><?php echo $teamNames; ?><br />With help from last year's team:<br /><?php echo $lteamNames; ?></span>
	</div>