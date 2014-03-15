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

	</div>

	<div class='container'>
		<h3>For further information or any queries you may have, contact us today at &lt;contact@make-sense.co.uk&gt;</h3>
	</div>
	
	<br><br>
	<div class='container marketing'>
		<!-- Three columns of text below the carousel -->
		<div class='row'>
			<div class='col-lg-4'>
				<img class='img-circle' src='img/andy.jpg' data-src='holder.js/140x140' alt='Generic placeholder image' >
				<h2>Andrew Greatorex</h2>
				<p>A second year UCL Computer Science student. Interests include long walks on the beach and bubble baths</p>
				<!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
			</div><!-- /.col-lg-4 -->
			<div class='col-lg-4'>
				<img class='img-circle' src='img/oscar.jpg' data-src='holder.js/140x140' alt='Generic placeholder image' >
				<h2>Oscar Robinson</h2>
				<p>A second year UCL Computer Science student. Interests include stamp collecting, competitive dog grooming and sculpting egg shells</p>
				<!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
			</div><!-- /.col-lg-4 -->
			<div class='col-lg-4'>
				<img class='img-circle' src='img/jay.jpg' data-src='holder.js/140x140' alt='Generic placeholder image'>
				<h2>Jay Shah</h2>
				<p>A second year UCL Computer Science student. Interest include shaping hedges and trainspotting </p>
				<!--<p><a class='btn btn-default' href='#'>View details &raquo;</a></p>-->
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>
</div>";
require_once("footer.php");
echo"	

</body>
</html>";


?>
