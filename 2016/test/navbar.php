<!-- underline code
<span style="position:absolute; bottom:-1px; left:0px; width:100%; background-color:#53b5b4; height:2px; opacity:1;" class="hidden-xs"></span>
-->

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-nav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt = "World Affairs Conference" height="25px"></img></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-nav">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration Information<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="misc_files/reg_2016.pdf">Registration Package</a></li>
            <li><a href="misc_files/reg_2016_form.pdf">Registration Form</a></li>
            <li><a href="reg_how.php">How to Register</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Conference Information <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="keynote.php">Keynote Address</a></li>
            <li><a href="opening.php">Opening Panel</a></li>
            <li><a href="plenaries.php">Plenaries</a></li>
            <li><a href="closing.php">Closing Panel</a></li>
            <li><a href="construction.php">Schedule</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About WAC <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="about_us.php">Meet the Team</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
          </ul>
        </li>
      </ul>
      <ul class = "nav navbar-nav navbar-right" style = "padding:0px">
        <?php
          if(empty($_SESSION['user'])) { ?>
        <li class="dropdown" style = "width:40vw;text-align:right;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <div class = "row">
                <form class="form-signin" action="login.php" method="post" style="padding:10px;padding-top:0;padding-bottom:0;">
                <div class = "col-md-4">
                  <input type="email" id="email" class="form-control" placeholder="email@user.com" name="email" required="" autofocus="">
                </div>
                <div class = "col-md-4">
                  <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class = "col-md-4">
                  <button class="btn btn-small btn-success btn-block" id="submitbutton" type="submit" value="Login">Sign in</button>
                  <a href="register_page.php" style = "text-decoration: underline; color:black;font-size:8px;">Don't have an account?</a>
                </div>
              </form>
              </div>
            </li>
          </ul>

        </li>

        <?php } else { 
          debug_to_console($_SESSION['user']['username']);
          // $firstname = ucfirst(htmlentities(explode("%$%", $_SESSION['user']['username'])[0]));
          // $lastname = ucfirst(htmlentities(explode("%$%", $_SESSION['user']['username'])[1]));
        ?>
        <!-- You exist -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome <b><?php echo $row["first_name"];?></b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="account.php#notif">Notifications <span class="badge">1</span></a></li>
            <li><a href="account.php">View Account</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
        <?php } ?>


      </ul>
    </div>
  </div>
</nav>