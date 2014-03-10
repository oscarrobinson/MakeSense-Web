
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
						<h1>Such Wireless.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>";
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
						<h1>Very Sensors.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class='btn btn-large btn-primary' href='#'>Learn more</a></p>
					</div>
				</div>
			</div>
			<div class='item'>
				<img src='img/Models/gateway1.png' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide' alt='Third slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>Wow.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class='btn btn-large btn-primary' href='#'>Browse gallery</a></p>
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

