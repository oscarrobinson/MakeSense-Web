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
	<div id='content'>
		<div id=\"title\"><h1>Contact</h1></div>
	<br><br><br>
	</div>

	<div class='container marketing'>

		<!-- Three columns of text below the carousel -->
		<div class='row'>
			<div class='col-lg-4'>
				<img class='img-circle' src='img/andy.jpg' data-src='holder.js/140x140' alt='Generic placeholder image' >
				<h2>Andrew Greatorex</h2>
				<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class='col-lg-4'>
				<img class='img-circle' src='img/oscar.jpg' data-src='holder.js/140x140' alt='Generic placeholder image' >
				<h2>Oscar Robinson</h2>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
			<div class='col-lg-4'>
				<img class='img-circle' src='img/jay.jpg' data-src='holder.js/140x140' alt='Generic placeholder image'>
				<h2>Jay Shah</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>
</div>";
require_once("footer.php");
echo"	

</body>
</html>";


?>
