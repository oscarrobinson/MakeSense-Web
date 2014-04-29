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
							<br>
							<p>To have a look at the web application's features for yourself, login to our demonstration account:</p>
							<p><b>Username: </b>demo</p>
							<p><b>Password: </b>comp2014</p>
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
					<div class='panel-body' style='margin-left:60px;'>
						<p>We aimed to keep our development schedule to the Gantt Chart below:</p>
						<img src='/img/gantt.png'>
						<br></br>
						<p>However, some of these work packages took longer than expected due to numerous issues and bugs.</p>
						<br>
						<p><b>Forks in prototypes</b></p>
						<p>The intial plan was to implement ContikiOS’s mesh networking protocol in the sensor networks.  However, we encountered a bug in the ContikiOS framework that meant this protocol did not work on the hardware we were working.  Hence, we shifted the network to using the Collect mechanism which, in fact, turned out to be more suitable for our system.</p>
						<br>
						<p><b>Iterations</b></p>
						<p>We developed the web application using an agile development module, it therefore underwent numerous iterations on the path to the final product.  The main milestones were as follows:</p>
							<ol>
							<li>Creation of user accounts system with UserCake</li>
							<li>Development of proper database structure</li>
							<li>Sensor network and individual sensor selection for graph</li>
							<li>Viewing and editing of sensor information</li>
							</ol>
						<p>The design of the web app meant these features were easily implemented as the web app had been developed with the accommodation of these features in mind from the beginning thanks to our requirements gathering process.</p>

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
				
					<div id='collapseFive' class='panel-collapse collapse'>
						<div id='center'>
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

						<div id='api-text-1' style='padding:50px;'>

							<h3>About the MakeSense Python API</h3>
							<p>The makesensepy python module is designed to allow users to add data from their own sensor systems to the MakeSense platform.  This API was specifically requested by our client and means users will be able to use any hardware with the MakeSense platform, not just our own proprietary sensor network hardware.  The scope of what the MakeSense web application can be used for is therefore vastly expanded.  The API will also be used by the MakeSense team for the more rapid development of gateway platforms for new sensor systems.  This API acts as a convenient adaptor between hardware and the MakeSense web platform.  In future iterations, the piGateway.py code used in the current gateway platform can be refactored to use this code.</p>

							<h3>About the MakeSense Arduino API</h3>

							<p>The MakeSense Arduino API is designed to allow users to create their own sensor nodes for use with the Stamp hardware and their own Arduinos.  This API acts as an adaptor to the stamp and hides the code needed to properly format data and send it to the stamp over the Arduino’s serial port.  This means sending data to the MakeSense platform from an Arduino connected to a MakeSense sensor network is as easy as using a send() function.  User’s won’t have to worry about properly formatting their data or manually sending strings over the serial port.</p>


							<h3>Future Development</h3>

							<p>Throughout the development process, we have always had the future development of the system in mind.  The aim has always been to make the MakeSense platform as flexible as possible so it can be used in a wide range of applications.  The code for the web application has been written so that the design is consistent across the code base and the code itself is sensibly written to act as its own documentation.  The first focus of future development of the system would be implementing more of the should have and could have requirements identified for the system.  A mobile app could also be created.  As our data is stored in an SQL database, it is platform independent and could therefore be accessed by a range of different applications on different devices.   There is also scope to make access to the sensor data itself easier for users by creating an API to access and perform analysis on the sensor data a user has collected.</p>

							<p>However, our testing has shown that the current combination of SQL database to store sensor data and the Highcharts graphing library to display data does not handle high volumes of high volumes of data very efficiently.  Future developments of the web application could involve porting the entire system to use NoSQL, a more modern way of storing data that would give improved extensibility to the system and allow large volumes of data to be more efficiently handled.  Graphing would also need to be optimised so that a single graph does not have so many data points as graphs can take a while to generate with the current system.</p>

							<p>On the hardware side, the current state of the product is less complete.  Primary objectives would be to improve the usability of the hardware so that a user can easily set up their own network without any expert knowledge.  This would possibly involve moving to more reliable hardware as tests on our current system have shown the current hardware has somewhat flaky performance.  Work would also need to be done to improve the battery life of the sensor nodes.  Most of the technical work for the sensor network hardware is complete but the next step is making the product more attractive  by designing proper casing and improving the overall user experience.</p>

							<h3>Collaboration Opportunities</h3>

							<p>There are two routes the MakeSense hardware could take: continuing development to create a product that can be sold to people that require sensor networks for a variety of applications, or making the code on the sensor nodes and gateways open source and provide advice on how people can create their own networks.  Users of this code could then view and analyse their sensor network data on the closed source MakeSense web application which we would continue to work on ourselves.  Both options would mean the entire hardware code would need to be refactored and properly documented as much of it is definitely still stuck in the prototyping and experimentation stage.  There is possible demand for both of these options but the latter option of making the hardware code open source could lead to exciting developments such as the integration of MakeSense with all sorts of projects and products that people are working on.  The work we have done makes the somewhat complex idea of creating distributed sensor networks a lot more accessible to less experienced programmers.  It would be beneficial for both the open source community and us to cease working on our own hardware and instead focus our efforts on the web application.</p>

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
							<p>Need help setting up your network? click the link below.</p>
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
					<div class='panel-body' style='padding-left:60px;'>
					<b>Testing Strategy</b>
					<p>Our testing strategy focused on testing the robustness of the hardware.  We continuously tested the hardware during development, leaving the network running for 1-2 hours at a time.  Our final test was running the sensor network under the following conditions:</p>
							<ul>
							<li>One network with two sensor nodes</li>
							<li>One sensor node out of range of gateway so its data hops over the second node</li>
							<li>Each sensor node sending a light sensor reading every 2 seconds</li>
							<li>Therefore gateway processing 1 reading per second</li>
							<li>Add network to web application using method described in manual</li>
							<li>Web application accessed every hour to test rendering of graph with live data from the network</li>
							</ul>

					<p>As well as testing the hardware, this test was also used to test how our web application coped with large volumes of data.  Every hour, the graph for one of the sensor nodes was loaded to ensure data was being efficiently displayed to the user.</p>

					<b>Results</b>
					<p>The hardware successfully ran without any issues being identified.  However, during the test, the sensor nodes remained plugged into USB ports as we wanted to test the data performance of the system rather than the battery life of the sensor nodes.  We frequently ran into the problem during less formal testing where the Engduino would run out of power.  It is clear that power management will be a significant focus in later development of the system.</p>
					<p>The gateway uploaded all the sensor data it received to the database without any data points becoming corrupted or lost.  However, the volume of data present in the database started to cause some problems in the web application.  After 4-5 hours of operation the number of data points being loaded onto the graph for each sensor caused significant slowdown in page load times as shown in the following table:</p>
					<table id='testing-table'>
						  <tr>
						    <th>Time system running for/hours</th>
						    <th>No. of data points in data table(approx)</th>
						    <th>Graph load time/s</th>
						  </tr>
						  <tr>
						    <td>0</td>
						    <td>0</td>
						    <td>0.12</td>
						  </tr>
						  <tr>
						    <td>1</td>
						    <td>3600</td>
						    <td>0.56</td>
						  </tr>
						  <tr>
						    <td>2</td>
						    <td>7200</td>
						    <td>1.02</td>
						  </tr>
						  <tr>
						    <td>3</td>
						    <td>10800</td>
						    <td>2.20</td>
						  </tr>
						  <tr>
						    <td>4</td>
						    <td>14400</td>
						    <td>4.99</td>
						  </tr>
						  <tr>
						    <td>5</td>
						    <td>18000</td>
						    <td>5.12</td>
						  </tr>
						  <tr>
						    <td>6</td>
						    <td>21600</td>
						    <td>7.43</td>
						  </tr>
						  <tr>
						    <td>7</td>
						    <td>25200</td>
						    <td>28800</td>
						  </tr>
						  <tr>
						    <td>8</td>
						    <td>28800</td>
						    <td>9.16</td>
						  </tr>
						  <tr>
						    <td>9</td>
						    <td>32400</td>
						    <td>12.16</td>
						  </tr>
						  <tr>
						    <td>10</td>
						    <td>36000</td>
						    <td>12.70</td>
						  </tr>
						  <tr>
						    <td>11</td>
						    <td>39600</td>
						    <td>12.90</td>
						  </tr>
						  <tr>
						    <td>12</td>
						    <td>43200</td>
						    <td>16.21</td>
						  </tr>
						</table>
						<br>
						<p>It became clear from our testing that there were two fundamental flaws in the structure of our system:</p>

						<p>1. The storage of sensor data in an SQL database - An SQL database is simply not suited to such large volumes of data coming in at such high frequency</p>

						<p>2. The current method of rendering all the data for a sensor at once on the Highcharts graph - the time taken to create and render a graph with this volume of data makes loading times for graphs too long</p>

						<p>This testing therefore proved invaluable in guiding plans for future development of the system and highlighted some of the flaws in the design of our system</p>
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
					<div class='panel-body' style='margin-left:60px;'>
						We evaluated the usability of our hardware and web application platforms using the set of Heurstics set out below (Nielson, 1995)
						<p><b>1.	Visibility of system status</b><p>
						<p>- The system should always keep users informed about what is going on, through appropriate feedback within reasonable time.</p>
						<p><b>2.	Match between system and the real world</b></p>
						<p>- The system should speak the users' language, with words, phrases and concepts familiar to the user, rather than system-oriented terms. Follow real-world conventions, making information appear in a natural and logical order. </p>
						<p><b>3.	User control and freedom</b></p>
						<p>- Users often choose system functions by mistake and will need a clearly marked 'emergency exit' to leave the unwanted state without having to go through an extended dialogue. Support undo and redo.</p>
						<p><b>4.	Consistency and standards</b></p>
						<p>- Users should not have to wonder whether different words, situations, or actions mean the same thing. Follow platform conventions.</p>
						<p><b>5.	Error prevention</b></p>
						<p>- Even better than good error messages is a careful design which prevents a problem from occurring in the first place. Either eliminate error-prone conditions or check for them and present users with a confirmation option before they commit to the action.</p>
						<p><b>6.	Recognition rather than recall</b></p>
						<p>- Minimize the user's memory load by making objects, actions, and options visible. The user should not have to remember information from one part of the dialogue to another. Instructions for use of the system should be visible or easily retrievable whenever appropriate.</p>
						<p><b>7.	Flexibility and efficiency of use</b></p>
						<p>- Accelerators -- unseen by the novice user -- may often speed up the interaction for the expert user such that the system can cater to both inexperienced and experienced users. Allow users to tailor frequent actions.</p>
						<p><b>8.	Aesthetic and minimalist design</b></p>
						<p>- Dialogues should not contain information which is irrelevant or rarely needed. Every extra unit of information in a dialogue competes with the relevant units of information and diminishes their relative visibility. </p>
						<p><b>9.	Help users recognize, diagnose, and recover from errors</b></p>
						<p>- Error messages should be expressed in plain language (no codes), precisely indicate the problem, and constructively suggest a solution.</p>
						<p><b>10.	Help and documentation</b></p>
						<p>- Even though it is better if the system can be used without documentation, it may be necessary to provide help and documentation. Any such information should be easy to search, focused on the user's task, list concrete steps to be carried out, and not be too large.</p>
						<br>
						<iframe style='width:1000px; height:700px;' src='https://docs.google.com/spreadsheets/d/1GNIGDFhjoIjT2tkl4jZpJYkzQr2pKQct-baYn727eMU/pubhtml?widget=true&amp;headers=false'></iframe>
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

			<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFourteen'>
						Forum and Wiki
					</a>
					</h4>
				</div>
				<div id='collapseFourteen' class='panel-collapse collapse'>
					<div class='panel-body'>
							<div class='container'>
								<p>Have any questions? post in our forum.</p>
								<p><a class='btn btn-default' href='http://makesense.boards.net/' role='button'>Go To Forum</a></p>

								<p>Want more information about MakeSense? Visit our Wiki.</p>
								<p><a class='btn btn-default' href='http://uclteam10.azurewebsites.net/wiki/index.php?title=Main_Page' role='button'>Go To Wiki</a></p>
							</div>
					</div>
				</div>
			</div>
			
		</div>
	
	
	</div>

	<div class='panel panel-default'>
				<div class='panel-heading'>
					<h4 class='panel-title'>
					<a data-toggle='collapse' data-parent='#accordion' href='#collapseFifteen'>
						All Code Repositories
					</a>
					</h4>
				</div>
				<div id='collapseFifteen' class='panel-collapse collapse'>
					<div class='panel-body'>
							<div class='container'>
								<p><b>Web Application</b></p>
								<p><a class='btn btn-default' href='https://github.com/scarrobin/meth-web-app' role='button'>Go</a></p>
								<br>
								<p><b>Hardware Code</b></p>
								<p>This repository includes the gateway code for the Pi as well as our code for the stamps.
								<p>There is also a large amount of code for the ContikiOS platform, hence the links are for the relevant parts of the hardware code</p>
								<p><a class='btn btn-default' href='https://github.com/andrewgrex/MethHardware/blob/master/piGateway.py' role='button'>Pi Gateway Code</a></p>
								<p><a class='btn btn-default' href='https://github.com/andrewgrex/MethHardware/blob/master/examples/OrisenStamp/collectGateway.c' role='button'>Stamp Gateway Code</a></p>
								<p><a class='btn btn-default' href='https://github.com/andrewgrex/MethHardware/blob/master/examples/OrisenStamp/collectSensor.c' role='button'>Stamp Sensor Code</a></p>
								<p><a class='btn btn-default' href='https://github.com/andrewgrex/MethHardware/blob/master/Engduino%20Code/EngduinoSerial1Test.ino' role='button'>EngduinoCode</a></p>
								<br>
								<p><b>Python API</b></p>
								<p><a class='btn btn-default' href='https://github.com/scarrobin/MakeSense-Python' role='button'>Go</a></p>
								<br>
								<p><b>Arduino API</b></p>
								<p><a class='btn btn-default' href='https://github.com/jay-shah/MakeSense-Arduino' role='button'>Go</a></p>

								
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



