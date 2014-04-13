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
	<div class='positioning'>
		<div class='jumbotron'>
			<div class='container'>
				<div id='sensorinfo'>
					<h1>Getting Started</h1>";
						if(!isUserLoggedIn()){
						echo"
						<p>To get started, create an account and login!</p>";
						}
						if(isUserLoggedIn()){
						echo"<p>Find your way to the 'Graph' tab. This page is the control center and is where you are able to view the readings for each of your networks. </p>
						
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
						
						";
						}
						echo "
				</div>
			</div>
		</div>
	</div>
	
	<hr>
	<hr>
	<div class='positioning'>
		<div class='jumbotron'>	
			<div class='container'>
				<div id='makesensevideo'>
					<h1>What is MakeSense?</h1>
					<embed
						width='600dp' height='450dp'
						src='http://www.youtube.com/v/TMhPiHF3Qzg'
						type='application/x-shockwave-flash'>
					</embed>
				</div>
			</div>
		</div>
	</div>
	
	<hr>
    <hr>
	
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
	
	<div class='positioning'>
		<div class='jumbotron'>	
			<div class='container'>
				<h1>Current Web App Implementation</h1>
				<p>
					The current implementation of the web application was designed with the Model View Controller design pattern in mind.  The web app was built in an agile way.  A set of requirements was drawn up and these were implemented in work packages designated to members of the team.
				</p>
				<p>
					As no members of the team had ever created a web application before, we quickly found our initial research and plans for the application’s development had been slightly misguided.  Hence the current implementation of the web application does not have an entirely satisfactory architecture, despite satisfying all the must have and some of the should have requirements of the system.  In the current design, pages generate content by calling scripts written in PHP, these scripts generate the required HTML dynamically by creating an instance of the DataManager class.  The DataManager class has access to the database and fetches the information required by the UI depending on which method in the DataManager is called.  This data is then returned to the PHP script which generates the HTML which is rendered by the web page.
				</p>
				<p>
					This structure does roughly align with the principles of the MVC design pattern in that there is a Model  in the system (the DataManager class coupled with the database) and a view (the generated HTML pages which the user interacts with).   However, the Controller is split between several parts of JavaScript code which call different PHP scripts to generate UI elements.  This is not a good design as the number of different scripts required will expand as more features are added to the web application.  It is clear that the current implementation of the system, although functional, will not be easy for developers to work with in the future.  To improve the application’s extensibility and efficiency, it will be important to create a dedicated Controller class for the system to use, the details of how this could be implemented are discussed in the next section.
				</p>
			</div>
		</div>
	</div>	
	<div class='positioning'>
		<div class='jumbotron'>	
			<div class='container'>
				<h1>Future Web App Implementation</h1>
				<p>
				To improve the web application’s design, all generation of user interface elements should be moved into JavaScript code, this  would allow for better performance and also allow for easier error generation and progress reports to provide more information to the user when the application is slow or errors in retrieving information from the database occur.
				</p>
				<p>
				When the user makes a request for some data, the JavaScript would then send a POST request to a PHP controller class.  This class would handle all data requests from the user.  Given a request, the script would use its instance of the DataManager class to fetch the required data from the database.  The data would then be given as the result of the request back to the JavaScript code where any required UI elements could be generated.  If the data was not returned as expected, a useful error message could instead be displayed to the user.
				</p>
				<p>	
				This structure is much better aligned with the MVC design pattern and would give the web application much improved performance.  The introduction of a dedicated Controller class in PHP would mean new features would be much quicker to implement as any new UI code could be written in the new page then any dynamic content could be easily added by adding additional methods to the Controller class.
				</p>
		</div>
	</div>
	
	<hr>
    <hr>
	
	<div class='positioning'>
		<div class='jumbotron'>	
			<div class='container'>
				<h1>Project Management and Work Packages</h1>
				<p>
				The project was primarily managed using an agile approach in regards to work packages and progress. The team would meet around 2/3 times per week to show progress, set milestones and to make decisions on the long term plans for the project. The table below shows the dates of the meetings held by the team (with or without our supervisor). 
				</p>
				<p>
				Work packages were designed with emphasis placed on the priority of each task to eventually create a minimum viable product. The key packages delivered this term has been (1) conversion to a mesh network system for the sensor nodes,(2) migration from a Laptop-based gateway to a Raspberry Pi, (3) work on the web application to support user accounts paired with personal data networks, (4) sensor ontology work, (5) database design and implementation and (6) API construction.
				</p>
				<p>
				Having completed these key work packages, we believe we have created our minimum viable product. 
				</p>
		</div>
	</div>
	
</div>";
	
require_once("footer.php");
echo"
</body>
</html>";

?>




