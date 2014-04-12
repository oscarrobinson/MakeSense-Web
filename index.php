<?php
	require_once("navigation.php");
echo"

<html lang='en'>
  <head>
  

    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <link rel='shortcut icon' href='../../assets/ico/favicon.ico'>

	
    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href='bootstrap/dist/css/bootstrap.min.css' rel='stylesheet'>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src='../../assets/js/ie8-responsive-file-warning.js'></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href='carousel.css' rel='stylesheet'>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    


    <!-- Carousel
    ================================================== -->
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
						<h1>Who are we?</h1>
						<p>We are MakeSense. We build customisable sensor networks for environmental monitoring purposes. Our sensor networks are completely customisable, and the data is stored in the MakeSense Cloud, where it is available for viewing, manage or to download.</p>
						
						";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
					</div>
				</div>
			</div>
			<div class='item'>
				<img src='img/Models/gateway1.png' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:Second slide' alt='Second slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>Sensor networks?</h1>
						<p>A sensor network is a spatially distributed and autonomous network of sensors which can monitor physical or environmental conditions, such as temperature, CO2 levels or humidity. Our sensor network has been designed so any number of any type of sensors may be present in any number of networks! </p>
							
						";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
							
					</div>
				</div>
			</div>
			<div class='item'>
				<img src='img/graph1.png' data-src='holder.js/100%x500/auto/#777:#7a7a7a/text:Third slide' alt='Third slide'>
				<div class='container'>
					<div class='carousel-caption'>
						<h1>Brilliant! How does it work?</h1>
						<p>With a set of sensor nodes to record data, a central gateway to send the data up to the cloud, and an account on our website; you are all set to manage you own sensor network!</p>
							";
							if(!isUserLoggedIn()){
							echo"
							<p><a class='btn btn-large btn-primary' href='login.php'>Sign up today</a></p>";
							}
							echo"
					</div>
				</div>
			</div>
		</div>
		<a class='left carousel-control' href='#myCarousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
      <a class='right carousel-control' href='#myCarousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
	</div><!-- /.carousel -->
</div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class='container marketing'>

      <!-- Three columns of text below the carousel -->
		<div class='row'>
			<div class='col-lg-4'>
			<img class='img-circle' src='img/Icons/wifi.png' data-src='holder.js/140x140' alt='Generic placeholder image' >
			<h2>Networks</h2>
			<p>The Sensor networks and gateway are completely wire free! Giving you more flexibility over how and where you put them.</p>
		</div><!-- /.col-lg-4 -->
        <div class='col-lg-4'>
			<img class='img-circle' src='img/Icons/arrow.png' data-src='holder.js/140x140' alt='Generic placeholder image' >
			<h2>Cloud Storage</h2>
			<p>The data from each sensor node is received by a central gateway, which sends it up to the MakeSense database. It can be accessed anywhere in world</p>
        </div><!-- /.col-lg-4 -->
        <div class='col-lg-4'>
			<img class='img-circle' src='img/Icons/personal.png' data-src='holder.js/140x140' alt='Generic placeholder image' >
			<h2>Web Application</h2>
			<p>Here is where you can view, manage or download you sensor data.</p>
        </div><!-- /.col-lg-4 -->
     </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class='featurette-divider'>

      <div class='row featurette'>
        <div class='col-md-7'>
          <h2 class='featurette-heading'><span class='text-muted'>Real Time</span> Graphical Data Viewing.</h2>
          <p class='lead'>You can view the readings ofseveral sensors concurrently in real time using the MakeSense web service. Sign up and connect to see data appearing instantaneously from you sensor network. The best part? You can connect as many sensor nodes to as many networks as you like. </p>
        </div>
        <div class='col-md-5'>
          <img class='featurette-image img-responsive' src='img/graph1.png' data-src='holder.js/500x500/auto' alt='Generic placeholder image'>
        </div>
      </div>

      <hr class='featurette-divider'>

      <div class='row featurette'>
        <div class='col-md-5'>
          <img class='featurette-image img-responsive' src='img/graphadd.png' data-src='holder.js/500x500/auto' alt='Generic placeholder image'>
        </div>
        <div class='col-md-7'>
          <h2 class='featurette-heading'>Adding networks is as simple as <span class='text-muted'>Typing in an ID tag.</span></h2>
          <p class='lead'>To add your own sensor network, simply type in the identification number from the gateway. If it matches, your sensor readings will immediately appear online and be ready for download.</p>
		  <h2 class='featurette-heading'>Adding <span class='text-muted'>Sensors</span> is as simple as <span class='text-muted'>Placing it next to a gateway</span></h2>
		  <p class='lead'>Adding another sensor node (of any type) to your network simply requires you to put that node near to the gateway. The gateway will add the sensor ID to a list of a devices it may accept readings from</p> 	
		</div>
      </div>

      <hr class='featurette-divider'>

      <div class='row featurette'>
        <div class='col-md-7'>
          <h2 class='featurette-heading'>Connect <span class='text-muted'>Your own</span> Networks.</h2>
          <p class='lead'>We've built an API so you can connect your own sensor nodes to our website. Check out our Github page to find out more!</p>
		  <p><a class='btn btn-default' href='#' role='button'>Find Out More &raquo;</a></p>
        </div>
        <div class='col-md-5'>
          <img class='featurette-image img-responsive' src='img/Icons/book.png' data-src='holder.js/500x500/auto' alt='Generic placeholder image'>
        </div>
      </div>

      <hr class='featurette-divider'>

      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->
";
	require_once('footer.php');
	echo"

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
    <script src='../../dist/js/bootstrap.min.js'></script>
    <script src='../../assets/js/docs.min.js'></script>
  </body>
</html>";
?>