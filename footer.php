<?php
$rando = rand(1,2);
if($rando == 1){
	$teamNames = "<b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b> and <b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b>";
}
elseif($rando == 2){
	$teamNames = "<b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b> and <b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b>";
}

?>
<div class ="hidden-xs">
  </br>
</div>
</br>
<div class="containter-fluid" style = "background-color:#f8f8f8;color: black; padding: 2% 10% 1% 10%">
  <div class =  "row">
    <div class = "col-md-2 vertical-line">
      <h4>Home</h4>
      <h6><a href="index.php">Homepage</a></h6>
      <h4>Registration Information</h4>
      <h6><a href="reg_how.php">How to Register</a></h6>
      <h6><a href="reg_2016.pdf">Registration Package</a></h6>
      <h6><a href="reg_2016_form.pdf">Registration Form</a></h6>
    </div>
    <div class = "col-md-2 vertical-line">
      <h4>Conference Information</h4>
      <h6><a href="keynote.php">Keynote Address</a></h6>
      <h6><a href="opening.php">Opening Panel</a></h6>
      <h6><a href="plenaries.php">Plenaries</a></h6>
      <h6><a href="opening.php">Closing Panel</a></h6>
      <h6><a href="construction.php">Schedule</a></h6>
    </div>
    <div class = "col-md-2 vertical-line">
      <h4>About WAC</h4>
      <h6><a href="faq.php">FAQ</a></h6>
      <h6><a href="about_us.php">Meet the Team</a></h6>
      <h6><a href="contact_us.php">Contact Us</a></h6>
      <div class ="hidden-xs">
      </br>
      </br>
      </br>
      </div>
    </div>
    <div class = "col-md-6" style="text-align: right;">
      <h4>The World Affairs Conference Website</h4>
      Developed by <?php echo $teamNames; ?>
      </br>
      </br>
      <h4>The World Affairs Conference 2016</h4>
      February 1st 2016 | February 2nd 2016
      </br>
      <a href="http://ucc.on.ca">Upper Canada College</a>
      </br>
    </div>
  </div>
  <p style="text-align:right" class="footer-text">
      This website utilises <a href="http://getbootstrap.com">the bootstrap framework</a>.
      </br>
      We use <a href="https://en.wikipedia.org/wiki/HTTP_cookie">cookies</a> and <a href="https://www.google.com/policies/privacy/">Google Analytics</a> to help make the website experience better! By using our site, you agree to the use of these services.
  </p>
</div>
