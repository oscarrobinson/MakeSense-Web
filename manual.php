<?php
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
    
	<div class='jumbotron'>
		<div class='container'>
			<h2>Web App:</h2>
				<p>You must be logged in to do this!</p>
				<p>Find your way to the 'Graph' tab. This page is the control center and is where you are able to view the readings for each of your networks. </p>
				
				<p>You should see something similar to the screenshot below: </p>
				<br>
				<img src='img/graph.png' >
				
				<p><br>The box on the left is where you can select the network you wish to view, the sensor ontology (light intensity, temperature etc) and the sensors.</p>
				
				<p>It is possible to select several sensors at once by highlighting the relevant options</p>
				
				<p><br>To add a network, you must get the unique identifier tag on your gateway sensor hardware and type it in the box, as shown below. Give your network a name (like 'Office Humidities', for example) <br></p>
				<br>
				<img src='img/addnetwork.png' >
				<p><br>If the network identifier you have added matches, then your network will instantly start recording data!</p>
				<p><br>For a more in depth user manual, see the site Wiki under the 'More' tab</p>
			<h2>Sensor Networks:</h2>
		</div>				
	</div>
";
	
require_once("footer.php");
echo"
</body>
</html>";
