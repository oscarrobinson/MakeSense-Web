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
			<h2>Setting up your MakeSense network:</h2>
			<div id='hardwarepics' style='width:1030px; margin:0 auto;'>
			<div id='sensornode'  style='float:left; margin-right:30px;'>
			<img id='manual-sensornodeimage' src='img/sensornode.jpg' style='width:500px;'>
			<div id='manual-sensornodetext'><b>Sensor Node</b></div>
			</div>
			<div id='gateway' style='margin-left:30px;'>
			<img id='manual-gatewayimage' src='img/gatewayinstruct.jpg' style='width:500px;'>
			<div id='manual-gatewaytext'><b>Gateway Platform</b></div>
			</div>
			</div>
			<br>
			<br>

			<div id = manual-tutorial1>
				<p><b>1.</b> Plug the ethernet cable into the Raspberry Pi at one end and plug the other end into your network router</p>
				<img id='manual-1-1' src='img/ethernetin.jpg' style='width:500px;'>
				<br><br>
				<p><b>2.</b> Plug the power cable into the Raspberry Pi</p>
				<img id='manual-1-2' src='img/powerin.jpg' style='width:500px;'>
				<br><br>
				<p><b>3.</b> Power up the Gateway (Raspberry Pi) by turning on the power at the socket</p>
				<img id='manual-1-3' src='img/poweron.jpg' style='width:500px;'>
				<br><br>
				<p><b>4.</b> Ensure your sensor node is fully charged then turn it on with the switch, if you see a flashing blue led on the stamp, your sensor node is successfully sending readings.  If you see a flashing green led on the gateway stamp, it is successfully receiving readings.  If this is not the case, try rebooting the Raspberry Pi by turning it off and on again and then restart the sensor node by turning it off and on again.</p>
				<img id='manual-1-4' src='img/nodeon.jpg' style='width:500px;'>
				<br><br>
				<p><b>5.</b> Go to the ‘Graphs’ page on the web application</p>
				<img id='manual-1-5' src='img/graph-page.png' style='width:700px;'>
				<br><br>
				<p><b>6.</b> Input the network ID code supplied with the Gateway platform  and a name for your network</p>
				<img id='manual-1-6' src='img/netadd.png' style='width:500px;'>
				<br><br>
				<p><b>7.</b> Select the network in the network selection box</p>
				<img id='manual-1-7' src='img/netselect2.png' style='width:500px;'>
				<br><br>
				<p><b>8.</b> Voila! You are now viewing live data from your network.</p>
				<img id='manual-1-8' src='img/instructgraph.png' style='width:800px;'>
			</div>


			<br>

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
		</div>				
	</div>
";
	
require_once("footer.php");
echo"
</body>
</html>";
