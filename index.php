
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
	<div id='myCarousel' class='carousel slide'>
		<!-- Indicators -->
		<ol class='carousel-indicators'>
			<li data-target='#myCarousel' data-slide-to='0' class='active'></li>
			<li data-target='#myCarousel' data-slide-to='1'></li>
			<li data-target='#myCarousel' data-slide-to='2'></li>
		</ol>
		<div class='carousel-inner'>
			<div class='item active'>
				<img src='img/makesense.png' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:First slide' alt='First slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>Sensor Networks</h1>
						<p>Every network is completely customisable and can have as many types of sensors and number of nodes as you require. The nodes wirelessly transmit data to a central gateway which pushes the information to the MakeSense cloud platform</p>";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
					</div>
				</div>
			</div>
			<div class='item'>
				<img src='img/suchsense.jpg' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide' alt='Second slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>User Accounts</h1>
						<p>Each one of your sensor networks is linked to your account so you can moniter, set alerts and analyse your data. Each account permits as many networks as you require</p>";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
						<!-- <p><a class='btn btn-large btn-primary' href='#'>Learn more</a></p>-->
					</div>
				</div>
			</div>
			<div class='item'>
				<img src='img/hank7.jpg' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide' alt='Third slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>Data Analytics</h1>
						<p>Using the MakeSense dashboard, you can view statistics on each of your networks. You can customise the dashboard to match your needs and can even set alerts if sensor data exceeds set thresholds</p>";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
						<!-- <p><a class='btn btn-large btn-primary' href='#'>Browse gallery</a></p>-->
					</div>
				</div>
			</div>
		</div>
		<a class='left carousel-control' href='#myCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
      <a class='right carousel-control' href='#myCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
	</div><!-- /.carousel -->
</div>";
require_once("footer.php");
echo"
</body>
</html>";
?>

