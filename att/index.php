<?php
$mysqli = mysqli_connect("localhost", "attendance", "C>A1b86E^Q3u^YT", "attendance");
if(!empty($_COOKIE["tok"])) {
	$sql="SELECT 1 FROM members WHERE token=\"".mysqli_real_escape_string($mysqli, $_COOKIE["tok"])."\" LIMIT 1;";
	$result = mysqli_query($mysqli, $sql);
	if(mysqli_num_rows($result)==0) {
		setcookie("tok", "", time()-10000);
		header("Location: ".$_SERVER["PHP_SELF"]);
		//delete the cookie
	}
}
//echo preg_match("/([A-Za-z]+)\.([A-Za-z]+)@ucc\.on\.ca/", $_POST["u"], $matches);
if(preg_match("/([A-Za-z]+)\.([A-Za-z]+)@ucc\.on\.ca/", $_POST["u"], $matches) && $_POST["p"]==="textacular") {
	$sql = "SELECT 1 FROM members WHERE email=\"".trim(mysqli_real_escape_string($mysqli, $_POST["u"]))."\" LIMIT 1;";
	$result = mysqli_query($mysqli, $sql);
	if(mysqli_num_rows($result)===0) {
		$token = bin2hex(openssl_random_pseudo_bytes(24));
		$sql="INSERT INTO members(email, token, fn, ln) VALUES (\"".mysqli_real_escape_string($mysqli, $_POST["u"])."\", \"".$token."\", \"".mysqli_real_escape_string($mysqli, $matches[1])."\", \"".mysqli_real_escape_string($mysqli, $matches[2])."\");";
		if(mysqli_query($mysqli, $sql)) {
			setcookie("tok", $token, time()+60*60*24*365); //set the cookie for a WHOLE YEAR!!!!
			header("Location: ".$_SERVER["PHP_SELF"]);
		}
	}
}
?>
<html>
<head>
	<style type="text/css">
	input{
		box-sizing:border-box;
		-webkit-box-sizing:border-box;
		-mox-box-sizing:border-box;
		-o-box-sizing:border-box;
		outline:none;

		background-color:rgba(255,255,255,0.2);

		-webkit-border-radius:2px;
		-moz-border-radius:2px;
		-o-border-radius:2px;
		border-radius:2px;

		color:#FFF;
	}
	input:hover{
		background-color:rgba(255,255,255,0.3);
	}
	input:focus{
		background-color:rgba(255,255,255,0.3);
	}
	span{
		display:inline-block;
	}
	.button_top, input{
		top:0px;
		-webkit-transition:all 0.2s ease-in-out;
		-moz-transition:all 0.2s ease-in-out;
		-o-transition:all 0.2s ease-in-out;
		transition:all 0.2s ease-in-out;
	}
	.button_container:hover>.button_top{
		top:-2px;
	}
	.button_container:active>.button_top{
		top:2px;
	}
	body, input{
		font-family:Respublika FY;
	}
	</style>
</head>
<body style="background-image:url(bg.jpg); background-size:cover; margin:0px;">
	<div style="width:400px; height:120px; margin:auto; position:absolute; top:0px; bottom:0px; left:0px; right:0px;">
	<?php
	if(!empty($_COOKIE["tok"])):
		$sql="SELECT c.fn, c.ln FROM attendance_keys a INNER JOIN members_attendance b ON DATE_FORMAT(a.d, '%d %m %Y')=DATE_FORMAT(b.d, '%d %m %Y') INNER JOIN members c ON b.member=c.id WHERE c.token=\"".$_COOKIE["tok"]."\";";
		$result = mysqli_query($mysqli, $sql);
		if($fetch = mysqli_fetch_row($result)):
			?>
			<div style="color:#FFF; text-align:center;">Awesome, <?php echo ucwords($fetch[0]); ?>! Glad you could make it :)</div>
			<?php
		else:
			?>
		<form action="log.php" method="POST" id="mainform">
			<div style="color:#FFF">Code on the board:</div>
			<input type="text" name="secret" style="border:none; padding:10px; font-size:16px; width:100%;" />
			<span style="position:relative; cursor:pointer; width:100%; margin-top:10px;" onclick="document.getElementById('mainform').submit();" class="button_container">
				<span style="background-color:#C76230; position:absolute; height:10px; bottom:-3px; width:100%;" class="button_bottom"></span>
				<span style="background-color:#ED8337; color:#FFF; position:relative; padding:10px 0; text-align:center; width:100%;" class="button_top">
					I'm here.
				</span>
			</span>
		</form>
		<?php
		endif;
	else:
		?>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" id="mainform">
			<div style="color:#FFF">No identifying cookie?! D:<br />
				Call Nick or Derek over, and everything will be alright.</div>
			<input type="text" name="u" id="u" style="border:none; padding:10px; margin-top:10px; font-size:16px; width:100%;" />
			<input type="password" name="p" id="p" style="border:none; padding:10px; margin-top:5px; font-size:16px; width:100%;" />
			<span style="position:relative; cursor:pointer; width:100%; margin-top:5px;" onClick="if(document.getElementById('u').value!='' && document.getElementById('p').value!='') { document.getElementById('mainform').submit(); }" class="button_container">
				<span style="background-color:#C76230; position:absolute; height:10px; bottom:-3px; width:100%;" class="button_bottom"></span>
				<span style="background-color:#ED8337; color:#FFF; position:relative; padding:10px 0; text-align:center; width:100%;" class="button_top">
					SUBMIT
				</span>
			</span>
		</form>
		<?php
	endif;
	?>
	</div>
</body>
</html>
