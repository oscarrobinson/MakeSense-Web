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
<!-- Main jumbotron for a primary marketing message or call to action -->
    
	<div class='jumbotron'>
	
		<div class='panel-group' id='accordion'>
		
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
						About
					</a>
					</h4>
				</div>
				<div id='collapseOne' class='panel-collapse collapse'>
					<div class='panel-body'>
						<div class='container'>
							<p>To find out what MakeSense is, click the link below!</p>
							<p><a class='btn btn-default' href='about.php' role='button'>Tell me more! &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
						Video
					</a>
					</h4>
				</div>
				<div id='collapseTwo' class='panel-collapse collapse'>
					<div class='panel-body'>
						<div class='container'>
							<div id='makesensevideo'>
								<h1>What is MakeSense?</h1>
								<embed
									width='600dp' height='450dp'
									src='http://www.youtube.com/v/TMhPiHF3Qzg'
									type='application/x-shockwave-flash'>
								</embed>
								<h1>MakeSense In Action</h1>
								<embed
									width='600dp' height='450dp'
									src='https://www.youtube.com/v/pVLEOGOHGXI'
									type='application/x-shockwave-flash'>
								</embed>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
						Development Plan
					</a>
					</h4>
				</div>
				<div id='collapseThree' class='panel-collapse collapse'>
					<div class='panel-body'>
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFour'>
						Architectural Diagrams
					</a>
					</h4>
				</div>
				<div id='collapseFour' class='panel-collapse collapse'>
					<div class='panel-body'>
					
						<h2>Deployment Diagram<h2>
						<img src='img/Arch_Diagrams/DeploymentDiagram.png' style='max-height:800px;max-width:1100px; margin-bottom:30px;' >	
						
						
						<h2>Current Web App Implementation<h2>
						<img src='img/Arch_Diagrams/WebAppCurrentImplementation.png' style='max-height:600px;max-width:900px; margin-bottom:30px;' >	
						
						<h2>Future Web App Implementation<h2>
						<img src='img/Arch_Diagrams/WebAppFutureImplementation.png' style='max-height:600px;max-width:900px; margin-bottom:30px;' >	
						
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFive'>
						Description of API and Future Collaboration
					</a>
					</h4>
				</div>
				<div id='center'>
					<div id='collapseFive' class='panel-collapse collapse'>
						<div class='panel-body'>
							<h1>API's</h1>
							<h2>Web App Integration API</h2>
							<p>Use this API to connect your own networks with out site! Click the Find out More button and have a look through the 'README'</p>
							<p><a class='btn btn-default' href='https://github.com/scarrobin/MakeSense-Python' role='button'>Find Out More &raquo;</a></p>
							<h2>Build your own sensor nodes</h2>
							<p>Use this API to build your own custom sensor nodes with Arduino's. Click the Find out More button and have a look through the 'README'</p>
							<p><a class='btn btn-default' href='https://github.com/jay-shah/MakeSense-Arduino' role='button'>Find Out More &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseSix'>
						Manual
					</a>
					</h4>
				</div>
				<div id='collapseSix' class='panel-collapse collapse'>
					<div class='panel-body'>
						<div class='container'>
							<p>To find out what MakeSense is, click the link below!</p>
							<p><a class='btn btn-default' href='manual.php' role='button'>Show me how! &raquo;</a></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseSeven'>
						Requirements
					</a>
					</h4>
				</div>
				<div id='collapseSeven' class='panel-collapse collapse'>
					<div class='panel-body'>
						<div class='container'>
						<h1>Requirements</h1>
							<p>
								This formal set of requirements was drawn up to meet the needs of our client, Steve Hailes.  These requirements were essential throughout the project to determine in what order work packages were assigned.  As the requirements were prioritised in the MoSCoW style, we implemented the Must Have requirements first.  All the Must Have requirements for the web application were implemented and most of the Must Have requirements for the hardware were implemented.  Some Should Have requirements for the web application were also successfully implemented.
							</p>
							<p>
								The list of requirements is beyond the scope of what we hoped to achieve during the project and therefore gives guidelines for what future development should aim to implement into the system.
							</p>
							<div id='spreadsheet'>
								<iframe width='905' height='1360' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0AgcQZklv7An-dC1kT3k2LXRMZEdjYV95RkdzTDk4a0E&single=true&gid=1&output=html&widget=true'></iframe>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseEight'>
						Testing Strategy
					</a>
					</h4>
				</div>
				<div id='collapseEight' class='panel-collapse collapse'>
					<div class='panel-body'>
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			
			
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseNine'>
						Technical Achievements and Design Patterns
					</a>
					</h4>
				</div>
				<div id='collapseNine' class='panel-collapse collapse'>
					<div class='panel-body'>
						<div class='container'>
							<h1>Web Application</h1>
							<h2>Current Web App Implementation</h2>
							
							<p><i>For architectural diagrams of the web app, click the '<b>Archiectural Diagrams</b>' tab above</i></p>
							<br>
							
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
						<div class='container'>
							<h2>Future Web App Implementation</h2>
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
						<div class = 'container'>
							<h1>Hardware</h1>
								<h2>Stamps</h2>
									<p>The networking code to send sensor data between the stamps uses ContikiOS.  ContikiOS acts as a facade to the complicated networking code.  Our code implements the ‘collect’ networking mechanism.  The <a href='https://github.com/andrewgrex/MethHardware/blob/master/examples/OrisenStamp/collectGateway.c'>collectGateway.c</a> code designates the gateway stamp as the collect node, therefore all sensor data sent from nodes running the <a href='https://github.com/andrewgrex/MethHardware/blob/master/examples/OrisenStamp/collectSensor.c'>collectSensor.c</a> code is automatically sent to the gateway node.  The data can hop over other sensor nodes if the gateway node is not in range.  As long as a sensor nodes is in range of a node which has a path to the gateway, data from that node will also reach the gateway.  This makes the system very robust and means networks can be spread out over a large buildings very easily.</p>
								<h2>Raspberry Pi</h2>
									<p>The raspberry pi runs the <a href='https://github.com/andrewgrex/MethHardware/blob/master/piGateway.py'>piGateway.py</a> code.  This code reads the Pi’s GPIO serial pins to get the data the collect stamp is receiving.  This data is then fed into the database.  Currently this is done with direct database access.  However, this code could now be refactored to use the MakeSenseDB API, avoiding the need for direct database access from the Pi and therefore avoiding the security risks this involves.</p>
						</div>
						<div class = 'container'>
							<h1>APIs</h1>
								<h2>MakeSenseDB API</h2>
									<p>The <a href='https://github.com/scarrobin/MakeSense-Python/blob/master/makesensepy.py'>makesensepy.py</a> module for python allows users to add data from their own sensor networks to the MakeSense system.  The methods act as an Adaptor, hiding the formatting and network request code so the user can simply add data to the system using intuitive methods such as addSensor().</p>
								<h2>Arduino API</h2>
									<p>Our Arduino API allows users to create their own sensor node hardware to attach a stamp to.  The code acts as an Adaptor to the code to properly format the data to be sent by the stamp so the user can send their code in an intuitive way.</p>
									<p><b><i>To See how our code is deployed throughout the system, check out the deployment diagram in the ‘Architectural Diagrams’ section</i></b></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseTen'>
						Heuristic Analysis
					</a>
					</h4>
				</div>
				<div id='collapseTen' class='panel-collapse collapse'>
					<div class='panel-body'>
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseEleven'>
						Meeting Minutes
					</a>
					</h4>
				</div>
				<div id='collapseEleven' class='panel-collapse collapse'>
					<div class='container'>
						<div class='panel-body'>
							<p>Click the link below to see all meeting minutes and content for the months January through March.</p>
							<p><a class='btn btn-default' href='https://drive.google.com/folderview?id=0Bze6F1PYGKo_QngtbEs0Z285NEk&usp=sharing' role='button'>Meeting Minutes &raquo;</a></p>
						</div>
					</div>	
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseTwelve'>
						Project Management and Work Packages
					</a>
					</h4>
				</div>
				<div id='collapseTwelve' class='panel-collapse collapse'>
					<div class='panel-body'>
							<div class='container'>
								<h1>Project Management and Work Packages</h1>
								<p>
									The project was primarily managed using an agile approach in regards to work packages and progress. The team would meet around 2/3 times per week to show progress, set milestones and to make decisions on the long term plans for the project. The table below shows the dates of the meetings held by the team (with or without our supervisor). 
								</p>
								<p>
									Work packages were designed with emphasis placed on the priority of each task to eventually create a minimum viable product. The key packages delivered this term have been: 
								</p>
								<ol>
									<li>
										conversion to a mesh network system for the sensor nodes <b>[Oscar]</b>
									</li>
									<li>
										migration from a Laptop-based gateway to a Raspberry Pi <b>[Oscar and Jay]</b>
									</li>
									<li>
										work on the web application to support user accounts paired with personal data networks <b>[Andrew]</b>
									</li>
									<li>
										sensor ontology work <b>[Oscar]</b>
									</li>
									<li>
										database design and implementation <b>[Oscar and Andrew]</b>
									</li>
									<li>
										API construction <b>[Oscar and Jay]</b>
									</li>
								</ol>	
								<p>
									Having completed these key work packages, we believe we have created our minimum viable product. 
								</p>
							</div>
					</div>
				</div>
			</div>
			
			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseThirteen'>
						Concept Case Designs
					</a>
					</h4>
				</div>
				<div id='collapseThirteen' class='panel-collapse collapse'>
					<div class='panel-body'>
							<div class='container'>
								<div id='center'>
									<h1>Casing Designs</h1>
									<p>Shown below are some concept designs of casing for the gateway and sensor nodes.
									<h2>Gateway</h2>
									<img src='img/Models/gateway1.png' style='max-height:500px;max-width:800px; margin-bottom:30px;' >
									<img src='img/Models/gateway2.png' style='max-height:500px;max-width:800px; margin-bottom:30px;'>
									<img src='img/Models/gateway3.png' style='max-height:500px;max-width:800px; margin-bottom:30px;'>
									<h2>Sensor Node</h2>
									<img src='img/Models/sensor1.png' style='max-height:500px;max-width:800px; margin-bottom:30px;'>
								</div>
							</div>
					</div>
				</div>
			</div>
			
		</div>
	
	
	</div>
";
	
require_once("footer.php");
echo"
</body>
</html>";

?>



