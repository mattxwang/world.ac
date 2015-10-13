<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
     <head>
	  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
          <title>CPU Monitor by Steve Stone</title>
	  <link rel="stylesheet" href="css/mon.css" type="text/css" />
	  <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
	  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js" type="text/javascript"></script>
	  <script src="js/cpufunctions.js" type="text/javascript"></script>
     </head>
     <body>
	  <div class="left">Current monitor interval:&nbsp;</div>
          <div id="timeBox" class="left">0.5 Seconds</div><br />
        
          <form action="javascript:void(0)">
               <input id="radio01" type="radio" name="speed" value="0.1" onclick="changeSeconds(this)" />0.1
               <input id="radio05" type="radio" name="speed" value="0.5" onclick="changeSeconds(this)" checked="checked" />0.5
               <input id="radio1" type="radio" name="speed" value="1" onclick="changeSeconds(this)" />1
               <input id="radio5" type="radio" name="speed" value="5" onclick="changeSeconds(this)" />5
               <input id="radio10" type="radio" name="speed" value="10" onclick="changeSeconds(this)" />10
          </form>
        
          <div id="tabs" class="tabbg" style="border: 1px solid grey">
               <ul>
                    <li><a href="#tabs-3">Overview</a></li>
		    <li><a href="#tabs-1">CPU Monitor</a></li>
		    <li><a href="#tabs-2">RAM Monitor</a></li>
               </ul>
          <div id="tabs-1">
               <div class="grid full">&nbsp;
		    <div class="left"><b>&nbsp;CPU Usage:</b>&nbsp;</div><div id="cpu" class="left">&nbsp;</div><div class="left">%</div>
		    <?php
                    $width = 5;
                    for($i = 0; $i < 40; $i++){
			 print("<div id='cpu$i' class='big bar' style='left: ".$width."px;'>&nbsp;</div>
			 ");
			 $width = $width + 17;
                    }
                ?>
               </div>
          </div>
          <div id="tabs-2">
            <div class="grid full">&nbsp;
                <div class="left"><b>&nbsp;RAM Usage:</b>&nbsp;</div><div id="ram" class="left">&nbsp;</div><div class="left">%</div>
                    <?php
                        $width = 5;
                        for($i = 0; $i < 40; $i++){
                            print("<div id='ram$i'  class='big bar' style = 'left: ".$width."px;'>&nbsp;</div>
                            ");
                            $width = $width + 17;
                        }
                    ?>
                </div>
            </div>
          <div id="tabs-3">
	       <div class="grid half">&nbsp;
               <div class="left"><b>&nbsp;CPU Usage:</b>&nbsp;</div><div id="cpuO" class="left">&nbsp;</div><div class="left">%</div>
	            <?php
	                 $width = 5;
	                 for($i = 0; $i < 40; $i++){
	                      print("<div id='cpuO$i' class='small bar' style = 'left: ".$width."px;'>&nbsp;</div>
	                      ");
	                      $width = $width + 17;
	                 }
                    ?>
               </div>
               <div style="height:18px;">&nbsp;</div>
	       <div class="grid half">&nbsp;
		    <div class="left"><b>&nbsp;RAM Usage:</b>&nbsp;</div><div id="ramO" class="left">&nbsp;</div><div class="left">%</div>
                    <?php
                         $width = 5;
                         for($i = 0; $i < 40; $i++){
			      print("<div id='ramO$i' class='small bar' style = 'left: ".$width."px;'>&nbsp;</div>
			      ");
			      $width = $width + 17;
			 }
                    ?>
		    </div>
	       </div>
	  </div>
     </body>
</html>

