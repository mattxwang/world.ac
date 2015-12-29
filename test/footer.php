<?php
$rando = rand(1,2);
if($rando == 1){
	$teamNames = "<b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b> and <b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b>";
}
elseif($rando == 2){
	$teamNames = "<b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b> and <b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b>";
}

?>
</br>
</br>
</br>
</br>
<div class="containter-fluid" style = "background-color:#f8f8f8;color: black; padding: 5% 10% 5% 10%">
  <div class =  "row">
    <div class = "col-md-3 vertical-line">
      <h4><b>Home</b></h4>
      <h6><a href="index.php">Homepage</a></h6>
      <h4><b>Registration Information</b></h4>
      <h6><a href="reg_how.php">How to Register</a></h6>
      <h6><a href="reg_2016.pdf">Registration Package</a></h6>
      <h6><a href="reg_2016_form.pdf">Registration Form</a></h6>
    </div>
    <div class = "col-md-3 vertical-line">
      <h4><b>Conference Information</b></h5>
      <h6><a href="keynote.php">Keynote Address</a></h6>
      <h6><a href="opening.php">Opening Panel</a></h6>
      <h6><a href="plenaries.php">Plenaries</a></h6>
      <h6><a href="opening.php">Closing Panel</a></h6>
      <h6><a href="plenaries.php">Schedule</a></h6>
    </div>
    <div class = "col-md-3 vertical-line">
      <h4><b>About WAC</b></h5>
      <h6><a href="faq.php">FAQ</a></h6>
      <h6><a href="about_us.php">Meet the Team</a></h6>
      <h6><a href="contact_us.php">Contact Us</a></h6>
      </br>
      </br>
      </br>
    </div>
    <div class = "col-md-3">
      Developed by this year's WAC web design team, <?php echo $teamNames; ?>
      <p style="font-size: 8px">
      </br>
      This website utilises <a href="http://getbootstrap.com">the bootstrap framework</a>.
      </br>
      We use cookies and Google Analytics to help make the website experience better! By using our site, you agree to the use of these services.
      </p>
    </div>
  </div>
</div>
