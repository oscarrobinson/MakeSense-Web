o<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
require_once("navigation.php");

echo "
<body>
<div id='wrap'>
<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class='jumbotron'>
      <div class='container'>
		<div id='sensorinfo'>
			<h1>Customisable Sensor Networks</h1>
			<p>MakeSense is an easy to set up, reliable sensor network allowing users to monitor any environmental factor they desire.  Data is viewable using the MakeSense web platform where all sensor data from the user’s network is viewable ready for analysis.  Building managers could use the system to monitor the temperature, light levels and movement in rooms in their buildings and use the data provided to optimise how they heat and light rooms at different times of day.</p>
			<!--<p><a class='btn btn-primary btn-lg'>Learn more &raquo;</a></p>-->
		</div>
	  </div>
    </div>
	
	<hr>
    <hr>
	
	<div class='jumbotron'>	
		<div class='container'>
				<div id='makesensevideo'>
					<embed
						width='600dp' height='450dp'
						src='http://www.youtube.com/v/TMhPiHF3Qzg'
						type='application/x-shockwave-flash'>
					</embed>
				</div>
		</div>
	</div>
	
    <div class='container'>
      <!-- Example row of columns -->
	  <div id='aboutbottominfo'>
      <div class='row'>
        <div class='col-lg-4'>
          <h2>User Accounts</h2>
          <p>Each one of your sensor networks is linked to your account so you can moniter, set alerts and analyse your data. Each account permits as many networks as you require</p>
          <!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
        </div>
        <div class='col-lg-4'>
          <h2>Sensor Networks</h2>
          <p>Every network is completely customisable and can have as many types of sensors and number of nodes as you require. The nodes wirelessly transmit data to a central gateway which pushes the information to the MakeSense cloud platform</p>
          <!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
       </div>
        <div class='col-lg-4'>
          <h2>Data Analytics</h2>
          <p>Using the MakeSense dashboard, you can view statistics on each of your networks. You can customise the dashboard to match your needs and can even set alerts if sensor data exceeds set thresholds</p>
          <!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
        </div>
		</div>
      </div>

    </div> <!-- /container -->    
</div>";
	
require_once("footer.php");
echo"
</body>
</html>";

?>
