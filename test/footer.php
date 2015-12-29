<?php
$rando = rand(1,2);
if($rando == 1){
	$teamNames = "<b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b> and <b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b>";
}
elseif($rando == 2){
	$teamNames = "<b><a href =\"http://jack.antinode.ca\">Jack Sarick</a></b> and <b><a href =\"https://twitter.com/malsf21\">Matthew Wang</a></b>";
}

?>

<div class="containter-fluid">
  <div class =  "row" style = "background-color:#f8f8f8;color: black;">
    <div class = "col-md-8 vertical-line">
      <div class = "row">
        <div class = "col-md-4 vertical-line">
          <b><h5>Home</h5></b>
          <h6><a href="index.php">Homepage</a></h6>
          <b><h5>Registration Information</h5></b>
          <h6><a href="reg_how.php">How to Register</a></h6>
          <h6><a href="reg_2016.pdf">Registration Package</a></h6>
          <h6><a href="reg_2016_form.pdf">Registration Form</a></h6>
        </div>
        <div class = "col-md-4 vertical-line">
          <b><h5>Conference Information</h5></b>
          <h6><a href="keynote.php">Keynote Address</a></h6>
          <h6><a href="opening.php">Opening Panel</a></h6>
          <h6><a href="plenaries.php">Plenaries</a></h6>
          <h6><a href="opening.php">Closing Panel</a></h6>
          <h6><a href="plenaries.php">Schedule</a></h6>
        </div>
        <div class = "col-md-4">
          <b><h5>About WAC</h5></b>
          <h6><a href="faq.php">FAQ</a></h6>
          <h6><a href="about_us.php">Meet the Team</a></h6>
          <h6><a href="contact_us.php">Contact Us</a></h6>
        </div>
      </div>
    </div>
    <div class = "col-md-4">
      <h3>Developed by this year's WAC web design team, <?php echo $teamNames; ?></h3>
      Privacy Policy blah blah blah
    </div>
  </div>
</div>
