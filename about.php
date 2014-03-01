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
        <h1>Data, data everywhere</h1>
        <p>Oi you there, fancy a wireless sensor network? 'course you do. Come buy one (courtesy of Hypnotoad) lolz i'm just writing this to fill up space</p>
        <p><a class='btn btn-primary btn-lg'>Learn more &raquo;</a></p>
      </div>
    </div>

    <div class='container'>
      <!-- Example row of columns -->
      <div class='row'>
        <div class='col-lg-4'>
          <h2>Network</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
        </div>
        <div class='col-lg-4'>
          <h2>Sensors</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
       </div>
        <div class='col-lg-4'>
          <h2>Cloud Services</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>
    </div> <!-- /container -->    
</div>";
	
require_once("footer.php");
echo"
</body>
</html>";

?>
